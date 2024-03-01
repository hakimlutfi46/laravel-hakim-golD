<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    @include('layout.partials.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layout.nav')

        @include('layout.sidebar')

        @yield('content')
        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    @include('layout.partials.footer')
</body>

</html>
