<!--begin::Navbar-->
<div class="d-flex align-items-stretch" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend"
        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">


        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
            id="kt_page_loading_basic" data-kt-menu="true">

            <div class="menu-item me-lg-1">
                <a class="menu-link py-3" href="/home">
                    <span class="menu-title">Home</span>
                </a>
            </div>
{{--
            <div class="menu-item me-lg-1">
                <a class="menu-link py-3" href="#" id="testFcmLink">
                    <span class="menu-title">TEST FCM</span>
                </a>
            </div>

            <script>
                document.getElementById('testFcmLink').addEventListener('click', function(e) {
                    e.preventDefault();

                    fetch('/test-fcm', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Laravel CSRF token
                            },
                            body: JSON.stringify({
                                message: 'Hello from client!'
                            }) // Optional data
                        });
                });
            </script> --}}


            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                class="menu-item menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Mesin</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link py-3" href="/mesin" title="Berisi semua daftar mesin"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 461.169">
                                        <path opacity="0.3"
                                            d="M164.327 88.809h232.902v308.103h-11.572l20.326 47.279a11.763 11.763 0 011.181 5.155c0 6.529-5.294 11.823-11.823 11.823H195.626v-.047c-1.318 0-2.658-.223-3.971-.693-6.122-2.192-9.305-8.934-7.113-15.055l17.363-48.462h-37.578c-10.333 0-19.732-4.231-26.547-11.045l-.026-.026c-6.814-6.815-11.046-16.214-11.046-26.548v-15.651H79.376c-5.759 0-11.008-2.358-14.8-6.151-3.785-3.785-6.148-9.022-6.148-14.797v-59.423H20.411C9.139 263.271 0 254.132 0 242.86c0-11.271 9.139-20.41 20.411-20.41h38.017v-59.423c0-5.773 2.351-11.011 6.144-14.803 3.793-3.793 9.03-6.144 14.804-6.144h47.332v-15.652c0-10.334 4.232-19.733 11.046-26.548l.026-.026c6.815-6.813 16.214-11.045 26.547-11.045zM247.214 0h105.097c17.73 0 32.233 14.536 32.233 32.233v.004c0 17.696-14.535 32.233-32.233 32.233H247.214c-17.697 0-32.233-14.505-32.233-32.233v-.004C214.981 14.503 229.486 0 247.214 0zM122.04 165.726H82.075v154.269h39.965V165.726zm298.836-76.238c23.617 2.73 44.866 13.533 60.888 29.557C500.421 137.7 512 163.44 512 191.757v109.537c0 26.302-10.757 50.211-28.083 67.535-16.333 16.334-38.515 26.828-63.041 27.976V89.488zm-58.625 312.798H224.994l-12.624 35.236h165.029l-15.148-35.236zm-161.583-218.22c-7.45 0-13.492-6.042-13.492-13.492 0-7.451 6.042-13.493 13.492-13.493h146.274c7.45 0 13.492 6.042 13.492 13.493 0 7.45-6.042 13.492-13.492 13.492H200.668zm0 147.512c-7.45 0-13.492-6.042-13.492-13.493 0-7.45 6.042-13.492 13.492-13.492h146.274c7.45 0 13.492 6.042 13.492 13.492 0 7.451-6.042 13.493-13.492 13.493H200.668zm0-73.756c-7.45 0-13.492-6.041-13.492-13.492 0-7.45 6.042-13.492 13.492-13.492h146.274c7.45 0 13.492 6.042 13.492 13.492 0 7.451-6.042 13.492-13.492 13.492H200.668z" />
                                    </svg>

                                </span>
                            </span>
                            <span class="menu-title">Daftar Mesin</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link py-3" href="/sparepart" title="Daftar semua spareparts"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon">

                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                            fill="black" />
                                        <path
                                            d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                            fill="black" />
                                    </svg>
                                </span>

                            </span>
                            <span class="menu-title">Spareparts</span>
                        </a>
                    </div>
                </div>

            </div>

            @can('admin')
                <div class="menu-item me-lg-1">
                    <a class="menu-link py-3" href="/approve">
                        <span class="menu-title">Laporan Pekerjaan</span>
                    </a>
                </div>
            @endcan
            @can('superadmin')
                <div class="menu-item me-lg-1">
                    <a class="menu-link py-3" href="/user/all">
                        <span class="menu-title">User</span>
                    </a>
                </div>
            @endcan

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Navbar-->
