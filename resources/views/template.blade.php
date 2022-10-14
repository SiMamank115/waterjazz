<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Water Jazz | {{$title}}</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body data-barba="wrapper">
    <div class="barba-transition"></div>
    @yield('content')
    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <script src="{{ asset("js/gsap.min.js") }}"></script>
    <script src="{{ asset("js/barba.min.js") }}"></script>
    <script src="{{ asset("js/app.js") }}" type="module"></script>
</body>
</html>