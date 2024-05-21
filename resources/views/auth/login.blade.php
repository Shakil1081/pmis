@extends('layouts.app')
@section('content')

    <!--authentication-->

    <div class="mx-lg-0 mx-3">

        <div class="card col-xl-8 col-xxl-8 rounded-4 mx-auto my-5 overflow-hidden p-3">
            <div class="row g-4">
                <div class="col-lg-6 d-flex">
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo1.png') }}" class="mb-4" width="100"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="col-md-9">
                                <h4 class="fw-bold mt-4">Get Started Now</h4>
                                <p class="mb-0">Enter your credentials to login your account</p>
                            </div>
                        </div>
                        <div class="form-body mt-4">
                            @if (session('message'))
                                <div class="alert alert-info" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif



                <p class="text-muted">{{ trans('global.login') }}</p>

                @if(session('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>

                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-4">
                        <div class="form-check checkbox">
                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                            <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                {{ trans('global.remember_me') }}
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ trans('global.login') }}
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            @if(Route::has('password.request'))
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a><br>
                            @endif
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Don't have an account yet? <a href="auth-boxed-register.html">Sign
                                                up here</a>
                                        </p>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex d-none">
                    <div class="rounded-4 w-100 d-flex align-items-center justify-content-center bg-light p-3">
                        <img src="assets/images/auth/bg-login.png" class="img-fluid"style="max-height: 464px;width: 100%;"
                            class="img-fluid" alt="Background Login Image" loading="lazy">
                    </div>
                </div>

            </div><!--end row-->

        </div>
    </div>
</div>
@endsection