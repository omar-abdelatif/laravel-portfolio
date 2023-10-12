@extends('frontend.layout.master')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('content')
    <div class="wrapper bg-primary rounded w-90 mx-auto m-5">
        <section class="services p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services-title mb-lg-5 mb-md-4 mb-sm-3 mb-xs-4">
                            <h1 class="text-left ps-lg-5 text-lg-5 text-md-4 text-sm-3 text-white text-decoration-underline">- Services That I Provide -</h1>
                        </div>
                        <div class="services-content">
                            <div class="row">
                                @foreach ($services as $service)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="service-item mb-md-3 mb-sm-4 mb-xs-3 text-center">
                                            <div class="service-img">
                                                <img src="{{asset('assets/imgs/services/'.$service->logo)}}" class="img-fluid" alt="{{$service->logo}}">
                                            </div>
                                            <h4 class="text-bold text-white">{{$service->title}}</h4>
                                            <p class="p-3 text-white mb-0">{{$service->description}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layout.footer')
    </div>
@endsection
