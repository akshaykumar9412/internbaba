<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="SmartUniversity" />

    <meta name="description" content="{{ get_setting('meta_description', 'Default description') }}">
    <link rel="icon" href="{{ asset(get_setting('favicon', 'images/default-favicon.png')) }}" type="image/png">

    <title>@yield('pageTitle', 'Intern Baba')</title>
    <!-- google font -->
    <link hyref="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"
        type="text/css" />
    <!-- icons -->
    <link href="{{ asset('fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{ asset('assets/Admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/Admin/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <!-- morris chart -->
    <link href="{{ asset('assets/Admin/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ asset('assets/Admin/plugins/material/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Admin/css/material_style.css') }}">
    <!-- animation -->
    <link href="{{ asset('assets/Admin/css/pages/animate_page.css') }}" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="{{ asset('assets/Admin/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/Admin/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/Admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/Admin/css/theme-color.css') }}" rel="stylesheet" type="text/css" />

    {{-- Data Table LInk --}}
    <link href="{{ asset('assets/Admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- favicon -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('customCss')
    <style>
        #loader {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(2, 4, 66);
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2f2fff47;
        }

        .spinner {
            width: 60px;
            height: 60px;
            border: 6px solid #01054a;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <div class="page-wrapper">
        <!-- start header -->
        @include('admin.layouts.HeaderBar')
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            @include('admin.layouts.SideBar')
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @yield('mainContainer')
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab">Theme
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-bs-toggle="tab"> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
                            id="quick_sidebar_tab_1">
                            <div class="slimscroll-style">
                                <div class="theme-light-dark">
                                    <h6>Sidebar Theme</h6>
                                    <button type="button" data-theme="white"
                                        class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
                                        Sidebar</button>
                                    <button type="button" data-theme="dark"
                                        class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
                                        Sidebar</button>
                                </div>
                                <div class="theme-light-dark">
                                    <h6>Sidebar Color</h6>
                                    <ul class="list-unstyled">
                                        <li class="complete">
                                            <div class="theme-color sidebar-theme">
                                                <a href="#" data-theme="white"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="dark"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="blue"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="indigo"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="cyan"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="green"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="red"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6>Header Brand color</h6>
                                    <ul class="list-unstyled">
                                        <li class="theme-option">
                                            <div class="theme-color logo-theme">
                                                <a href="#" data-theme="logo-white"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="logo-dark"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="logo-blue"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="logo-indigo"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="logo-cyan"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="logo-green"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="logo-red"><span
                                                        class="head"></span><span class="cont"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6>Header color</h6>
                                    <ul class="list-unstyled">
                                        <li class="theme-option">
                                            <div class="theme-color header-theme">
                                                <a href="#" data-theme="header-white"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="header-dark"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="header-blue"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="header-indigo"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="header-cyan"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="header-green"><span
                                                        class="head"></span><span class="cont"></span></a>
                                                <a href="#" data-theme="header-red"><span
                                                        class="head"></span><span class="cont"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Start Setting Panel -->
                        <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_2">
                            <div class="chat-sidebar-settings-list slimscroll-style">
                                <div class="chat-header">
                                    <h5 class="list-heading">Layout Settings</h5>
                                </div>
                                <div class="chatpane inner-content ">
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Position</div>
                                            <div class="setting-set">
                                                <select
                                                    class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Header</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Menu </div>
                                            <div class="setting-set">
                                                <select
                                                    class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                    <option value="accordion" selected="selected">Accordion</option>
                                                    <option value="hover">Hover</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Footer</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Account Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Notifications</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-1">
                                                        <input type="checkbox" id="switch-1"
                                                            class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Show Online</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-7">
                                                        <input type="checkbox" id="switch-7"
                                                            class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Status</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-2">
                                                        <input type="checkbox" id="switch-2"
                                                            class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">2 Steps Verification</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-3">
                                                        <input type="checkbox" id="switch-3"
                                                            class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">General Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Location</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-4">
                                                        <input type="checkbox" id="switch-4"
                                                            class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Save Histry</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-5">
                                                        <input type="checkbox" id="switch-5"
                                                            class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Auto Updates</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-6">
                                                        <input type="checkbox" id="switch-6"
                                                            class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2025 &copy; {{ get_setting('project_name', '') }} Admin Template
                <a href="" target="_top" class="makerCss"></a>
            </div>
            <div class="scroll-to-top">
                <i class="material-icons">eject</i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="{{ asset('assets/Admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/Admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/pages/sparkline/sparkline-data.js') }}"></script>
    <!-- Common js-->
    <script src="{{ asset('assets/Admin/js/app.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/layout.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/theme-color.js') }}"></script>
    <!-- material -->
    <script src="{{ asset('assets/Admin/plugins/material/material.min.js') }}"></script>
    <!-- animation -->
    <script src="{{ asset('assets/Admin/js/pages/ui/animations.js') }}"></script>
    <!-- morris chart -->
    <script src="{{ asset('assets/Admin/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/morris/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/pages/chart/morris/morris_home_driver_data.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/Admin/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/pages/table/table_data.js') }}"></script>



    <!-- end js include path -->
    <script>
        window.onload = function() {
            document.getElementById('loader').style.display = 'none';
        };

        function showAlert(status = "success", message = "Something went wrong!", title = "") {
            Swal.fire({
                icon: status,
                title: title,
                text: message,
            });
        }

        function confirmationAlert(message = "You won't be able to revert this!", cb) {
            Swal.fire({
                title: "Are you sure?",
                text: message,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                cb(result.isConfirmed)
            });
        }
        // Here calling the confirmation code

        // confirmationAlert("Are you delete this record",(status)=>{
        // 	if(status){
        // 		Swal.fire({
        // 			title: "Deleted!",
        // 			text: "Your file has been deleted.",
        // 			icon: "success"
        // 		});
        // 	}
        // })

        @if (Session::has('flash_message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right"
            }
            toastr.success("{{ session('flash_message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right"
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>
</body>

</html>
