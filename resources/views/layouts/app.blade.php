<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href={{asset('assets/imgs/logo/favicon.png')}} type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title', 'Omar Abdelatif')</title>
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui-pro@4.6.4/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <h1 class="text-center sidebar-brand-full">Dashboard</h1>
            <img src={{asset('assets/imgs/logo/favicon.png')}} width="50" alt="logo" class="text-center sidebar-brand-narrow">
        </div>
        @include('layouts.navigation')
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('layouts.header')
        @yield('header')
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
    <script src="https://unpkg.com/@coreui/coreui-pro@4.6.4/dist/js/coreui.bundle.min.js"></script>
    <script src="https://unpkg.com/@fortawesome/fontawesome-free@6.4.2/js/all.min.js"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
