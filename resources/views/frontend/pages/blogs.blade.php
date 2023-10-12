@extends('frontend.layout.master')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('content')
    <div class="wrapper bg-primary rounded w-90 mx-auto m-5">
        <section class="blog p-5">
            <div class="blog-title mb-lg-5 mb-md-4 mb-sm-3">
                <h1 class="text-left mt-0 ps-5 mb-0 text-white text-decoration-underline">- Blogs -</h1>
            </div>
            <div class="blog-content">
                <div class="container">
                    <div class="row justify-content-center">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-item text-center mb-lg-4 mb-md-3 mb-sm-3 bg-primary overflow-hidden rounded">
                                    <div class="blog-item-img">
                                        <a href="#blog-{{$blog->id}}" data-bs-toggle="modal" aria-label="Blog Image" class="blog-img">
                                            <img src="{{asset('assets/imgs/blogs/'.$blog->img)}}" alt="{{$blog->img}}" class="img-fluid" width="356" height="200">
                                        </a>
                                        <div class="modal modal-box fade" id="blog-{{$blog->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header border-bottom-none">
                                                        <button type="button" class="close bg-transparent rounded-circle text-white border border-1 border-white bottom-0" data-bs-dismiss="modal">
                                                            <i class="fa-solid fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-img">
                                                            <img src="{{asset('assets/imgs/blogs/'.$blog->img)}}" alt="{{$blog->img}}" class="rounded-5">
                                                        </div>
                                                        <div class="blog-meta d-flex text-white">
                                                            <p class="category">
                                                                <b>{{$blog->category}}</b>
                                                            </p>
                                                        </div>
                                                        <div class="blog-title text-white mb-3 mt-3">
                                                            <h3 class="text-decoration-underline">{{$blog->title}}</h3>
                                                        </div>
                                                        <div class="blog-paragraph text-white text-left">
                                                            <p class="mb-0">
                                                                <b>{{$blog->content}}</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content p-3 rounded">
                                        <div class="blog-meta mb-3 text-white d-flex justify-content-between">
                                            <div class="blog-admin">
                                                <p class="mb-0">
                                                    Wrote By
                                                    <span class="text-decoration-underline">{{$blog->author}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blog-title ps-3 text-center text-white">
                                            <a href="#blog-0" data-bs-toggle="modal" aria-label="Blog Title" class="text-decoration-none text-white">
                                                <h2>{{$blog->title}}</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layout.footer')
    </div>
@endsection
