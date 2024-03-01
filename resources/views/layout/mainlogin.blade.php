<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ Route::currentRouteName() }}</title>


    @include('layout.partials.login.header')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                @yield('head')
            </div>
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

    @include('layout.partials.login.footer')
</body>

</html>
