<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/addd2f43dd.js"
            crossorigin="anonymous"></script>


    <title>JS Dev | @yield('title')</title>
    <link rel="stylesheet"
          type="text/css"
          href="{{ url('/css/app.css') }}"/>
</head>



<body class="bg-gray-bg font-roboto" style="background-image: url( {{asset('img/sharex/pattern2.png')}} )">
    @yield('content')
</body>


