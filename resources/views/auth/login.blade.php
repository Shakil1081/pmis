@extends('layouts.app')
@section('content')
    <!--authentication-->

    <div class="mx-lg-0 mx-3">

        <div class="card col-xl-9 col-xxl-8 rounded-4 mx-auto my-5 overflow-hidden p-4">
            <div class="row g-4">
                <div class="col-lg-6 d-flex">
                    <div class="card-body">
                        <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to login your account</p>

                        <div class="form-body mt-4">
                            @if (session('message'))
                                <div class="alert alert-info" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif




                            <form method="POST" class="row g-3" action="{{ route('login') }}">

                                @csrf

                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>


                                    <input id="email" name="email" type="text"
                                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required
                                        autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}"
                                        value="{{ old('email', null) }}">



                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <input id="password" name="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                        placeholder="{{ trans('global.login_password') }}">

                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ trans('global.forgot_password') }}
                                        </a><br>
                                    @endif

                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Don't have an account yet? <a href="auth-boxed-register.html">Sign
                                                up here</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex d-none">
                    <div class="rounded-4 w-100 d-flex align-items-center justify-content-center bg-light p-3">
                        <img src="assets/images/auth/bg-login.png"
                            style="
                        height: 100%;
                    " class="img-fluid"
                            alt="">
                    </div>
                </div>

            </div><!--end row-->
        </div>

    </div>




    <!--authentication-->
@endsection
