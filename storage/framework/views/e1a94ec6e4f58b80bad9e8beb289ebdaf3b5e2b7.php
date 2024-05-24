<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(env('APP_TITLE', 'PIMS')); ?></title>
    <!--favicon-->
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon-32x32.png')); ?>" type="image/png">

    <!--plugins-->
    <link href="<?php echo e(asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/metismenu/metisMenu.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/metismenu/mm-vertical.css')); ?>">
    <!--bootstrap css-->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="<?php echo e(asset('assets/css/bootstrap-extended.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dark-theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet">
    <style>
        html,
        body,
        div {
            font-family: bangla;
        }
    </style>
</head>


<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page" style="background: #75553c;">
    <div class="c-app align-items-center flex-row">

        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH J:\2024working\pims2024\pmis\resources\views/layouts/app.blade.php ENDPATH**/ ?>