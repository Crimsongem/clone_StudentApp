<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.nav')
    @include('layout.partials.namestudent')
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.partials.footer-script')
</body>
</html>