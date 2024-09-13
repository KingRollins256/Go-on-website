<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Home Page</title>
</head>
<body>
    @yield('content')
    <script src="{{ asset('script.js')}}"></script> 
</body>
</html>