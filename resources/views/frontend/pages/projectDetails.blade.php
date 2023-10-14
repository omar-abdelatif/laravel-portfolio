@extends('frontend.layout.master')
@section('title', 'Omar Abdelatif | '. $detail->title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="item d-flex justify-content-center align-items-center h-100vh">
                <h1 class="text-center text-white">{{$detail->title}}</h1>
            </div>
        </div>
    </div>
@endsection
