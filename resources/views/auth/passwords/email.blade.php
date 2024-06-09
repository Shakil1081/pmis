@extends('layouts.app')
@section('content')
    <!--authentication-->

    <div class="mx-lg-0 mx-3">

        <div class="card rounded-4 mx-auto my-5 overflow-hidden p-4">
            <div class="row g-4">
                <div class="col-lg-6 d-flex">
                    <div class="card-body">

                        <div class="row mt-5">
                            <div class="col-md-3">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo1.png') }}" class="mb-4" width="80"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="col-md-9 text center">






                                @if (app()->getLocale() === 'bn')
                                    <h5 class="fw-bold mt-3">পাসওয়ার্ড পুনরুদ্ধার করুন</h5>

                                    Change language to <a href="{{ url()->current() }}?change_language=en">
                                        English
                                    </a>
                                @else
                                    <h4 class="fw-bold mt-3">Reset Password</h4>

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

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                    {{ session('message') }}
                                </div>
                            @endif


                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="inputEmailAddress " class="form-label required">

                                        @if (app()->getLocale() === 'bn')
                                            ইমেইল
                                        @else
                                            Email
                                        @endif
                                        <span class="test-danget">*</span>
                                    </label>
                                    <input id="email" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                        required autocomplete="email" autofocus
                                        placeholder="{{ trans('global.login_email') }}" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary btn-flat btn-block w-100">
                                            {{ trans('global.send_password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex d-none">
                    <div class="rounded-4 w-100 d-flex align-items-center justify-content-center bg-light p-3">
                        <img src="{{ asset('assets/images/auth/bg-login.png') }}" style="height: 483px;width: 100%;"
                            class="img-fluid" alt="Background Login Image" loading="lazy">

                    </div>
                </div>

            </div><!--end row-->
        </div>

    </div>




    <!--authentication-->
@endsection
