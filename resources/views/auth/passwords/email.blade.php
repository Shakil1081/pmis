@extends('layouts.app')
@section('content')
    <!--authentication-->

    <div class="mx-lg-0 mx-3">

        <div class="card col-xl-9 col-xxl-8 rounded-4 mx-auto my-5 overflow-hidden p-4">
            <div class="row g-4">
                <div class="col-lg-6 d-flex">
                    <div class="card-body">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo1.png') }}" class="mb-4" width="145" alt="Logo" />
                        </a>
                        <h4 class="fw-bold">Reset Password</h4>
                        <p class="mb-0">Enter your credentials to Reset Password</p>

                        <div class="form-body mt-4">
                            @if (session('message'))
                                <div class="alert alert-info" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif




                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group">
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
