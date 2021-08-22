<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('template_frontend.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('template_frontend.navbar')
    @yield('content')
    @include('template_frontend.footer')
</body>
</html>