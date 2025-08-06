require('./bootstrap');

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getMessaging, getToken, onMessage, onBackgroundMessage } from "firebase/messaging";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "",
    authDomain: "",
    databaseURL: "",
    projectId: "",
    storageBucket: "",
    messagingSenderId: "",
    appId: "",
    measurementId: ""
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const messaging = getMessaging(app);


navigator.serviceWorker.register('firebase-messaging-sw.js')
    .then((registration) => {
        getToken(messaging, {
            vapidKey: "",
            serviceWorkerRegistration: registration,
        }).then((currentToken) => {
            if (currentToken) {
                // Send the token to your server and update the UI if necessary
                // ...
                console.log(currentToken);
                sendTokenToServer(currentToken);

            } else {
                // Show permission request UI
                requestPermission();
                console.log('No registration token available. Request permission to generate one.');
                // ...
            }
        });
    });

function requestPermission() {
    Notification.requestPermission().then((permission) => {
        if (permission === 'granted') {
            console.log('Notification permission granted.');
            // TODO(developer): Retrieve a registration token for use with FCM.
            // ...
        } else {
            console.log('Unable to get permission to notify.');
        }
    });
}


function sendTokenToServer(web_token) {
    var csrf = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    let formData = new FormData();
    formData.append('web_token', web_token);
    fetch("/tokenweb", {
        headers: {
            "X-CSRF-TOKEN": csrf,
            _method: "POST"
        },
        method: "post",
        credentials: "same-origin",
        body: formData,
    }).then((response) => {
        console.log(response.status);

    })
}
