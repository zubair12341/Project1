<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Wisdom Chest')</title>
</head>
<body>
    @include('inc.header')

    <div id="app">
        <!-- Your page content goes here -->
        @yield('content')
    </div>

    @include('inc.footer')
</body>
</html>
