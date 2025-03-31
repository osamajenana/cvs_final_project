<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
    @yield('style')
</head>

<body>
    @yield('content')
    @include('includes.scripts')
    @yield('script')
</body>

</html>
