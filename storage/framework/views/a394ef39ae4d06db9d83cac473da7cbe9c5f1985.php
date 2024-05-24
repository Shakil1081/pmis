<?php $__env->startSection('content'); ?>
    <!--authentication-->

    <div class="mx-lg-0 mx-3">

        <div class="card col-xl-8 col-xxl-8 rounded-4 mx-auto my-5 overflow-hidden p-3">
            <div class="row g-4">
                <div class="col-lg-6 d-flex">
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="<?php echo e(route('home')); ?>">
                                    <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="mb-4" width="100"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="col-md-9">
                                <h4 class="fw-bold mt-4">Get Started Now</h4>
                                <p class="mb-0">Enter your credentials to login your account</p>
                            </div>
                        </div>
                        <div class="form-body mt-4">
                            <?php if(session('message')): ?>
                                <div class="alert alert-info" role="alert">
                                    <?php echo e(session('message')); ?>

                                </div>
                            <?php endif; ?>




                            <form method="POST" class="row g-3" action="<?php echo e(route('login')); ?>">

                                <?php echo csrf_field(); ?>

                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>


                                    <input id="email" name="email" type="text"
                                        class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" required
                                        autocomplete="email" autofocus placeholder="<?php echo e(trans('global.login_email')); ?>"
                                        value="<?php echo e(old('email', null)); ?>">



                                    <?php if($errors->has('email')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('email')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <input id="password" name="password" type="password"
                                        class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" required
                                        placeholder="<?php echo e(trans('global.login_password')); ?>">

                                    <?php if($errors->has('password')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('password')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <?php if(Route::has('password.request')): ?>
                                        <a href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(trans('global.forgot_password')); ?>

                                        </a><br>
                                    <?php endif; ?>

                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/auth/login.blade.php ENDPATH**/ ?>