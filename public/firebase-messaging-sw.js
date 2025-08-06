 // Give the service worker access to Firebase Messaging.
 // Note that you can only use Firebase Messaging here. Other Firebase libraries
 // are not available in the service worker.
 importScripts('https://www.gstatic.com/firebasejs/9.2.0/firebase-app-compat.js');
 importScripts('https://www.gstatic.com/firebasejs/9.2.0/firebase-messaging-compat.js');

 // Initialize the Firebase app in the service worker by passing in
 // your app's Firebase config object.
 // https://firebase.google.com/docs/web/setup#config-object
 firebase.initializeApp({
  apiKey: "",
  authDomain: "",
  databaseURL: "",
  projectId: "",
  storageBucket: "",
  messagingSenderId: "",
  appId: "",
  measurementId: ""
 });

 // Retrieve an instance of Firebase Messaging so that it can handle background
 // messages.
//  const messaging = firebase.messaging();


// If you would like to customize notifications that are received in the
// background (Web app is closed or not in browser focus) then you should
// implement this optional method.
// Keep in mind that FCM will still show notification messages automatically
// and you should use data messages for custom notifications.
// For more info see:
// https://firebase.google.com/docs/cloud-messaging/concept-options

self.addEventListener("push", (event) => {
    console.log(event);
    let response = event.data && event.data.text();
    let title = JSON.parse(response).notification.title;
    let body = JSON.parse(response).notification.body;
    let icon = JSON.parse(response).notification.image;
    let image = JSON.parse(response).notification.image;

    event.waitUntil(
        self.registration.showNotification(title, { body, icon, image, data: { url: JSON.parse(response).data.url } })
    )
});

self.addEventListener('notificationclick', function(event) {
    event.notification.close();
    event.waitUntil(
        clients.openWindow(event.notification.data.url)
    );
}); 
