<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/manager.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <meta name="robots" content="noindex, follow">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    @include('_include.managerSidebar') {{--SideBar Here--}}
    <div id="content" class="bg-white">
        @include('_include.managerNavbar')
        @yield('content')
    </div>
</div>
<script src="https://colorlib.com/etc/bootstrap-sidebar/sidebar-02/js/jquery.min.js"></script>
<script src="https://colorlib.com/etc/bootstrap-sidebar/sidebar-02/js/bootstrap.min.js"></script>
<script src="https://colorlib.com/etc/bootstrap-sidebar/sidebar-02/js/main.js"></script>
</body>
</html>
