<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title')</title>
    <style>
        section {
            padding: 60px 0;
        }
        .pointer {
            cursor: pointer;
        }
        *{
            user-select: none;
        }
        .readOnly {
            outline: none;
            border : 0;
            background: transparent;
            width: 45px;
        }
    </style>
</head>
<body>

@include('.layouts.navbar')

@yield('content')

<footer class="text-primary text-center  fw-bold">Made with ❤ by mustafa </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/cart.js')}}"></script>

</body>
</html>
