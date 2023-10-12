<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="My Awesome Laravel Portfolio">
        <link rel="apple-touch-icon" href="{{asset('frontend/assets/imgs/favicon.png')}}" sizes="180x180">
        <link rel="mask-icon" href="{{asset('frontend/assets/imgs/favicon.png')}}" color="#FFFFFF">
        <link rel="icon" href="{{asset('frontend/assets/imgs/favicon.png')}}" />
        <meta name="theme-color" content="#317EFB">
        @vite('resources/sass/app.scss')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
        <title>@yield('title', 'Omar Abdelatif')</title>
    </head>
    <body>
        @include('frontend.layout.navigation')
        @yield('content')
        @include('frontend.components.scrollup')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
        <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    </body>
</html>
