<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>KDIPL</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <meta name="description" content="{{ get_setting('meta_description', 'Default description') }}">
	<link rel="icon" href="{{ asset(get_setting('favicon', 'images/default-favicon.png')) }}" type="image/png">
    {{-- <link href="{{ asset('assets/Customers/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/Customers/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/Customers/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Customers/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Customers/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Customers/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Customers/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- Main CSS File -->
    <link href="{{ asset('assets/Customers/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eNno
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('Customer.Layouts.Header')

    <main class="main">

        @yield('mainContent')

    </main>

    @include('Customer.Layouts.Footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/Admin/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/Customers/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Customers/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/Customers/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/Customers/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/Customers/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/Customers/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/Customers/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/Customers/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/Customers/js/main.js') }}"></script>
    <script>
       
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
