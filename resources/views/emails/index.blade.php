<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <title>@yield('title', 'Omar Abdelatif')</title>
</head>
<body>
    <div class="container">
        <div class="email-logo text-center">
            <img src="{{asset('assets/emails/favicon.png')}}" width="150" alt="">
        </div>
        <div class="email-container w-50 mx-auto bg-dark rounded p-5 my-3">
            <div class="email-header ms-3">
                <p class=" mb-0 text-white fs-4">
                    <b>Hey, Omar Abdelatif</b>
                </p>
                <p class=" mb-0 text-success fs-2">
                    My Name Is:
                    <b>{{$name}}</b>
                </p>
                <p class=" mb-0 text-success fs-2">
                    and My Email is
                    <b>{{$email}}</b>
                </p>
                <p class=" mb-0 text-success fs-2">
                    and My Phone is
                    <b>{{$phone}}</b>
                </p>
                <p class="subject mb-0 text-white fs-4">{{$subject}}</p>
                <p class="message mb-0 text-white text-center fs-5">{{$msg}}</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
