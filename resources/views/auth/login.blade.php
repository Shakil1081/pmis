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
                            <div class="col-md-9 text center">






                                @if (app()->getLocale() === 'bn')
                                    <h4 class="fw-bold mt-4">লগইন করুন</h4>
                                    <p class="mb-0">নিচের ফর্মটি পূরণ করুন</p>
                                    Change language to <a href="{{ url()->current() }}?change_language=en">
                                        English
                                    </a>
                                @else
                                    <h4 class="fw-bold mt-4">Get Started Now</h4>
                                    <p class="mb-0">Enter your credentials to login your account</p>
                                    ভাষা পরিবর্তন করুন <a href="{{ url()->current() }}?change_language=bn">
                                        বাংলা
                                    </a>
                                @endif

                            </div>
                        </div>
                        <div class="form-body mt-4">
                            @if (session('message'))
                                <div class="alert alert-info" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif




                            <form method="POST" class="row g-3" action="{{ route('login') }}">

                                @csrf

                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">

                                        @if (app()->getLocale() === 'bn')
                                            ইমেইল
                                        @else
                                            Email
                                        @endif
                                    </label>


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
                                    <label for="inputChoosePassword" class="form-label">


                                        @if (app()->getLocale() === 'bn')
                                            পাসওয়ার্ড
                                        @else
                                            Password
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <input id="password" name="password" type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            required
                                            placeholder=" 
                                            @if (app()->getLocale() === 'bn') পাসওয়ার্ড ভুলে গেছেন?
                                        @else
                                        Forgot your password @endif

                                            
                                            ">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="togglePassword">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                                    height="16" fill="currentColor">
                                                    <path
                                                        d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">
                                            @if (app()->getLocale() === 'bn')
                                                আমাকে মনে রাখবেন
                                            @else
                                                Remember Me
                                            @endif
                                        </label>
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
                                        <button type="submit" class="btn btn-primary">
                                            @if (app()->getLocale() === 'bn')
                                                লগইন
                                            @else
                                                Login
                                            @endif
                                        </button>
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




    <!--authentication-->
@endsection
