@extends('frontend.layout.master')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('content')
    <div class="wrapper bg-primary rounded w-90 mx-auto m-5">
        <section class="about p-lg-5 p-md-4 p-sm-3">
            <div class="about-title">
                <h1 class="text-left mt-0 ps-5 mb-0 text-white text-decoration-underline">- About Me -</h1>
            </div>
            <div class="about-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-8">
                            <div class="about-img rounded overflow-hidden mt-lg-5 mt-md-4 mt-sm-3">
                                <img src="{{asset('assets/imgs/info/'.$about->img)}}" alt="profile">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="about-content mt-lg-5 mt-md-4 mt-sm-3">
                                <h2 class="text-left text-white text-decoration-underline mb-3">- Who Am I -</h2>
                                <p class="desc mb-3 text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    At quas ea sed eos dolores, quasi tempore impedit sequi fuga,
                                    perspiciatis aliquid asperiores ipsum iure inventore delectus voluptatem aut molestias nostrum?
                                </p>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit et,
                                    excepturi consequuntur, corrupti unde,
                                    magni sit voluptatum incidunt atque ab libero fugit labore dolores error.
                                    Doloribus ab aliquid voluptatibus labore.
                                </p>
                            </div>
                            <div class="about-info">
                                <h2 class="text-left text-white text-decoration-underline mb-3">- Personal Info -</h2>
                                <ul class="navbar-nav flex-row">
                                    <li class="nav-item d-flex me-3 align-items-center me-2">
                                        <span class="icons rounded">
                                            <i class="fa-solid fa-mobile-screen text-white p-3"></i>
                                        </span>
                                        <div class="data ms-2">
                                            <p class="text-white text-decoration-underline">
                                                <b>Phone</b>
                                            </p>
                                            <p class="text-white mb-0">{{$about->phone_number}}</p>
                                        </div>
                                    </li>
                                    <li class="nav-item d-flex me-3 align-items-center me-2">
                                        <span class="icons rounded">
                                            <i class="fa-solid fa-envelope text-white p-3"></i>
                                        </span>
                                        <div class="data ms-2">
                                            <p class="text-white text-decoration-underline">
                                                <b>Email Address</b>
                                            </p>
                                            <p class="text-white mb-0">{{$about->email}}</p>
                                        </div>
                                    </li>
                                    <li class="nav-item d-flex me-3 align-items-center me-2">
                                        <span class="icons rounded">
                                            <i class="fa-solid fa-location-dot text-white p-3"></i>
                                        </span>
                                        <div class="data ms-2">
                                            <p class="text-white text-decoration-underline">
                                                <b>Location</b>
                                            </p>
                                            <p class="text-white mb-0">{{$about->address}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.components.testmonials')
        @include('frontend.layout.footer')
    </div>
@endsection
