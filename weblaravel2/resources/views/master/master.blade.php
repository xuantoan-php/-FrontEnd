<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test @yield('title')</title>
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="public/css/master.css">
</head>
<body>
    @include('master.header')
    @yield('content')
    @include('master.footer')
</body>
</html>