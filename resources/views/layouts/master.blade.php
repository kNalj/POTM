<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @yield('styles')
    @yield('scripts')
</head>
<body>
@yield('header')
@yield('content')
@yield('about')
@yield('footer')
</body>
</html>