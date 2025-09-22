<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>ECab - Taxi Admin Bootstrap 5 Material Design Dashboard Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/Admin/plugins/iconic/css/material-design-iconic-font.min.css') }}">
    <!-- bootstrap -->
    <link href="{{ asset('assets/Admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/Admin/css/pages/extra_pages.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/Admin/img/favicon.ico') }}" />
    <style>
        #loader {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #84848b47;
        }

        .spinner {
            width: 60px;
            height: 60px;
            border: 6px solid #ddd;
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

<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('assets/Admin/img/bg-01.jpg') }};">
            <div class="wrap-login100">
                @yield('mainSection')
            </div>
        </div>
    </div>
    <!-- start js include path -->
    <script src="{{ asset('assets/Admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/Admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/pages/extra_pages/login.js') }}"></script>
    <!-- end js include path -->
    <script>
        // Hide loader when page fully loaded
        window.onload = function () {
            document.getElementById('loader').style.display = 'none';
        };
        
    </script>
</body>

</html>
