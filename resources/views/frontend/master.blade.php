@extends('frontend.layout.master')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('content')
    <section class="hero-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-img mt-5 text-center">
                        <img src="{{asset('assets/imgs/info/'.$info->img)}}" class="img-fluid rounded-circle" alt="hero-img">
                    </div>
                    <div class="hero-info text-center mt-5">
                        <div class="hero-title text-white mt-4 mb-4">
                            <h4 class="mb-0">
                                <b> &#10100; &#34;FullStack Devloper&#34; &#10101; </b>
                            </h4>
                        </div>
                        <div class="social">
                            <a href="{{$info->facebook_link}}" aria-label="social link" class="btn btn-primary" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="{{$info->whasapp_link}}" aria-label="social link" class="btn btn-success ms-3" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="{{$info->linkedin_link}}" aria-label="social link" class="btn btn-dark ms-3" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="{{$info->github_link}}" aria-label="social link" class="btn btn-secondary ms-3" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                        <div class="cv mt-4 mb-2">
                            <a href="{{asset('assets/files/cv/'.$info->cv)}}" class="btn btn-primary">Download Cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
