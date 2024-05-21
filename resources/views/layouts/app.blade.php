<!DOCTYPE html>
<html>

<head>
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> parent of 90e809a (Merge branch 'quickadminpanel_2024_05_21_12_41_09' into shakil-dev)
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_TITLE', 'PIMS') }}</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png">

=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Bootstrap demo</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png">

>>>>>>> parent of 0a6c57d (QuickAdminPanel automatic commit)
    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <style>
        html,
        body,
        div {
            font-family: bangla;
        }
    </style>
<<<<<<< HEAD

=======
>>>>>>> parent of 0a6c57d (QuickAdminPanel automatic commit)
=======
>>>>>>> parent of 90e809a (Merge branch 'quickadminpanel_2024_05_21_12_41_09' into shakil-dev)
</head>


<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page" style="background: #75553c;">
    <div class="c-app align-items-center flex-row">

        @yield('content')
    </div>
    @yield('scripts')
</body>

</html>
