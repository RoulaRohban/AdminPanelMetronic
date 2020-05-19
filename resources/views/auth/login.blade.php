<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
@extends('includes.header')
@section('title', '| Login Page')
@section('styles')
    <!--begin::Page Custom Styles(used by this page) -->
{{--        <link href="assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css" />--}}

        <!--end::Page Custom Styles -->
    @stop
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/media/bg/bg-1.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="assets/media/logos/logo-mini-2-md.png">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Login To Admin</h3>
                        </div>


                    <form class="kt-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            <div class="input-group">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            <div class="input-group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row kt-login__extra">
                            <div class="col">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="kt-checkbox" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
                        </div>
                        <div class="kt-login__actions">
                                <button type="submit" class="btn btn-pill kt-login__btn-primary">
                                    {{ __('Login') }}
                                </button>
{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@extends('includes.scripts')
</body>
</html>
