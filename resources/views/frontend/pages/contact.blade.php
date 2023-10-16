@extends('frontend.layout.master')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('content')
    <div class="wrapper bg-primary rounded w-90 mx-auto m-5">
        <section class="contact p-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-title my-4">
                            <h1 class="text-center text-white text-decoration-underline text-lg-5 text-md-4 text-sm-3">I Want
                                to Hear from You</h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="address-info mt-lg-4 mt-md-4 mt-sm-2 mb-lg-2 mb-md-4 mb-sm-3">
                            <div class="address-title">
                                <h2 class="text-white text-decoration-underline text-lg-4 text-md-3 text-sm-2">Contact Us
                                </h2>
                            </div>
                            <div class="address-content text-left text-white mt-lg-4 mt-md-4 mt-sm-2">
                                <div class="location mb-3 d-flex align-items-center">
                                    <i class="fa fa-map-marker icons p-3 me-3 rounded bg-info text-center"
                                        aria-hidden="true"></i>
                                    <p>{{ $contact->address }}</p>
                                </div>
                                <div class="phone mb-3 d-flex align-items-center">
                                    <i class="fas fa-mobile-alt icons p-3 me-3 rounded bg-info text-center"
                                        aria-hidden="true"></i>
                                    <p>{{ $contact->phone_number }}</p>
                                </div>
                                <div class="email mb-3 d-flex align-items-center">
                                    <i class="far fa-envelope icons p-3 me-3 rounded bg-info text-center"
                                        aria-hidden="true"></i>
                                    <p>{{ $contact->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form mt-3">
                            <form action="{{url('send-email')}}" method="get">
                                @csrf
                                <input type="text" name="name" class="form-control mb-3" placeholder="Name">
                                <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                                <input type="text" name="subject" class="form-control mb-3" placeholder="Subject">
                                <input type="tel" name="phone" class="form-control mb-3" placeholder="Phone">
                                <textarea class="form-control mb-3" name="msg" placeholder="Message" rows="4"></textarea>
                                <button type="submit" class="btn btn-success w-100">
                                    <b>SendEmail</b>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layout.footer')
    </div>
@endsection
