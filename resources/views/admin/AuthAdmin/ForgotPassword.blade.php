@extends('admin.AuthAdmin.Master')

@section('mainSection')
    <form class="login100-form validate-form">
        <span class="login100-form-logo">
            <img alt="" src="{{ asset('assets/Admin/img/taxi.png') }}">
        </span>
        <p class="text-center txt-small-heading">
            Forgot Your Password? Let Us Help You.
        </p>
        <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="username" placeholder="Enter Your Register Email Address">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
        </div>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Send
            </button>
        </div>
        <div class="text-center p-t-27">
            <a class="txt1" href="{{ url('/admin/login') }}">
                Login?
            </a>
        </div>
    </form>
@endsection
