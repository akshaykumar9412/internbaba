@extends('admin.AuthAdmin.Master')

@section('mainSection')
    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Logo -->
        <span class="login100-form-logo">
            <img alt="Taxi Logo" src="{{ asset('assets/Admin/img/taxi.png') }}">
        </span>

        <!-- Title -->
        <span class="login100-form-title p-b-34 p-t-27">
            Log in
        </span>

        {{-- EMAIL --}}
        <div class="wrap-input100">
            <input 
                class="input100 @error('email') is-invalid @enderror" 
                type="text" 
                name="email" 
                placeholder="E-mail"
                value="{{ old('email') }}" 
                {{-- autocomplete="email"  --}}
                autofocus
            >
            <span class="focus-input100" data-placeholder="&#xf207;"></span>

            {{-- Show error message here --}}
            @error('email')
                <span class="invalid-feedback d-block text-danger small" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- PASSWORD --}}
        <div class="wrap-input100">
            <input 
                class="input100 @error('password') is-invalid @enderror" 
                type="password" 
                name="password" 
                placeholder="Password"
            >
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

            {{-- Show error message here --}}
            @error('password')
                <span class="invalid-feedback d-block text-danger small" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        {{-- REMEMBER ME --}}
        <div class="contact100-form-checkbox">
            <input 
                class="input-checkbox100" 
                id="ckb1" 
                type="checkbox" 
                name="remember" 
                {{ old('remember') ? 'checked' : '' }}
            >
            <label class="label-checkbox100" for="ckb1">
                Remember me
            </label>
        </div>

        {{-- SUBMIT BUTTON --}}
        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                Login
            </button>
        </div>

        {{-- FORGOT PASSWORD --}}
        <div class="text-center p-t-50">
            <a class="txt1" href="{{ route('admin.forgotPassword') }}">
                Forgot Password?
            </a>
        </div>
    </form>
@endsection
