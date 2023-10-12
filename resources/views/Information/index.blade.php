@extends('layouts.app')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('header')
    <header class="header header-sticky mb-4 d-block">
<<<<<<< HEAD
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-menu') }}"></use>
                </svg>
            </button>
            <a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="{{ asset('icons/brand.svg#full') }}"></use>
                </svg>
            </a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
            </ul>
            <ul class="header-nav ms-auto"></ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown">
                    <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                            <svg class="icon me-2">
                                <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                            </svg>
                            {{ __('My profile') }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('icons/coreui.svg#cil-account-logout') }}"></use>
                                </svg>
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-divider"></div>
=======
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
<<<<<<< HEAD
                                <li class="breadcrumb-item active">Information</li>
                            </ol>
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_infos" data-coreui-whatever="@mdo">
                                <b>Add Infrmation</b>
=======
                                <li class="breadcrumb-item active">Personal Information</li>
                            </ol>
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_info" data-coreui-whatever="@mdo">
                                <b>Add New Information</b>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
<<<<<<< HEAD
    <div class="modal fade" id="add_infos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
    <div class="modal fade" id="add_info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Information</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{route('infos.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
<<<<<<< HEAD
                                <div class="form-group mb-3">
                                    <label for="name" class="text-white mb-2">
                                        <b>Name</b>
                                    </label>
                                    <input type="text" name="name" placeholder="Title" id="name" class="form-control w-100">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="text-white mb-2 text-center">
                                        <b>Email Address</b>
                                    </label>
                                    <input type="text" name="email" placeholder="Email Address" id="email" class="form-control w-100">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone_number" class="text-white mb-2 text-center">
                                        <b>Phone Number</b>
                                    </label>
                                    <input type="number" name="phone_number" placeholder="Phone Number" id="phone_number" class="form-control w-100">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address" class="text-white mb-2 text-center">
                                        <b>Address</b>
                                    </label>
                                    <input type="text" name="address" placeholder="Address" id="address" class="form-control w-100">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="age" class="text-white mb-2 text-center">
                                        <b>Age</b>
                                    </label>
                                    <input type="number" name="age" placeholder="Age" id="age" class="form-control w-100">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="cv" class="text-white mb-2">
                                        <b>CV</b>
                                    </label>
                                    <input type="file" name="cv" id="cv" class="form-control text-center" accept="application/pdf">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="facebook_link" class="text-white mb-2">
                                        <b>FaceBook Link</b>
                                    </label>
                                    <input type="text" name="facebook_link" id="facebook_link" placeholder="FaceBook Link" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="github_link" class="text-white mb-2">
                                        <b>GitHub Link</b>
                                    </label>
                                    <input type="text" name="github_link" id="github_link" placeholder="GitHub Link" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="whasapp_link" class="text-white mb-2">
                                        <b>WhatsApp Link</b>
                                    </label>
                                    <input type="text" name="whasapp_link" id="whasapp_link" placeholder="WhatsApp Link" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="linkedin_link" class="text-white mb-2">
                                        <b>LinkedIn Link</b>
                                    </label>
                                    <input type="text" name="linkedin_link" id="linkedin_link" placeholder="LinkedIn Link" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="img" class="text-white mb-2">
                                        <b>Image</b>
                                    </label>
                                    <input type="file" name="img" id="img" class="form-control text-center" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success w-100 text-center text-white">Submit</button>
                                </div>
                            </div>
                        </div>
=======
                                <div class="form-group text-center mb-3">
                                    <label class="text-white" for="name">
                                        <b>Name</b>
                                    </label>
                                    <input type="text" name="name" id="name" class="form-control text-center" placeholder="Your Name">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="age" class="text-white">
                                        <b>Age</b>
                                    </label>
                                    <input type="number" class="form-control text-center" placeholder="Your Age" id="age" name="age" >
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="phone_number" class="text-white">
                                        <b>Mobile Number</b>
                                    </label>
                                    <input type="number" class="form-control text-center" placeholder="Your Phone Numbr" id="phone_number" name="phone_number" >
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="facebook" class="text-white">
                                        <b>Facebook Username</b>
                                    </label>
                                    <input type="text" name="facebook_link" id="facebook" placeholder="Facebook Username" class="form-control text-center">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="github" class="text-white">
                                        <b>Github Username</b>
                                    </label>
                                    <input type="text" name="github_link" id="github" placeholder="Github Username" class="form-control text-center">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text-center mb-3">
                                    <label for="address" class="text-white">
                                        <b>Address</b>
                                    </label>
                                    <input type="text" class="form-control text-center" placeholder="Address" id="address" name="address" >
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="email" class="text-white">
                                        <b>Work Email</b>
                                    </label>
                                    <input type="email" class="form-control text-center" placeholder="Your Work Email" id="email" name="email" >
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="img" class="text-white">
                                        <b>Profile Image</b>
                                    </label>
                                    <input type="file" name="img" id="img" class="form-control text-center" accept="image/*">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="whatsapp" class="text-white">
                                        <b>Whatsapp Link</b>
                                    </label>
                                    <input type="text" name="whatsapp_link" id="whatsapp" placeholder="Whatsapp Link" class="form-control text-center">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="linkedin" class="text-white">
                                        <b>Linkedin Username</b>
                                    </label>
                                    <input type="text" name="linkedin_link" id="linkedin" placeholder="Linkedin Username" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                        </div>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<<<<<<< HEAD
    @if (session('success'))
        <div id="success" class="alert alert-success w-50 mx-auto text-center mt-5">
            <p class="m-0">{{ session('success') }}</p>
        </div>
    @elseif ($errors->any())
        @foreach ($errors->all() as $error)
            <div id="error" class="alert alert-danger w-50 mx-auto text-center mt-5">
                <p class="mb-0">{{ $error }}</p>
            </div>
        @endforeach
    @endif
    <?php $i = 1 ?>
    <table class="table text-center align-middle table-striped table-hover" id="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Age</th>
                <th>Address</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allInfos as $info)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$info->name}}</td>
                    <td>{{$info->email}}</td>
                    <td>{{$info->phone_number}}</td>
                    <td>{{$info->age}}</td>
                    <td>{{$info->address}}</td>
                    <td>
                        <img src="{{asset('assets/imgs/info/'.$info->img)}}" width="50" class="rounded-circle" alt="{{$info->img}}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_infos{{$info->id}}" data-coreui-whatever="@mdo">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <div class="modal fade" id="edit_infos{{$info->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Information For {{$info->name}}</h5>
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body bg-dark">
                                        <form action="{{route('infos.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$info->id}}">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="text-white mb-2">
                                                            <b>Name</b>
                                                        </label>
                                                        <input type="text" name="name" value="{{$info->name}}" id="name" class="form-control w-100">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="email" class="text-white mb-2 text-center">
                                                            <b>Email Address</b>
                                                        </label>
                                                        <input type="text" name="email" value="{{$info->email}}" id="email" class="form-control w-100">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="phone_number" class="text-white mb-2 text-center">
                                                            <b>Phone Number</b>
                                                        </label>
                                                        <input type="number" name="phone_number" value="{{$info->phone_number}}" id="phone_number" class="form-control w-100">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="address" class="text-white mb-2 text-center">
                                                            <b>Address</b>
                                                        </label>
                                                        <input type="text" name="address" value="{{$info->address}}" id="address" class="form-control w-100">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="age" class="text-white mb-2 text-center">
                                                            <b>Age</b>
                                                        </label>
                                                        <input type="number" name="age" value="{{$info->age}}" id="age" class="form-control w-100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="cv" class="text-white mb-2">
                                                            <b>CV</b>
                                                        </label>
                                                        <input type="file" name="cv" id="cv" value="{{$info->cv}}" class="form-control text-center" accept="application/pdf">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="facebook_link" class="text-white mb-2">
                                                            <b>FaceBook Link</b>
                                                        </label>
                                                        <input type="text" name="facebook_link" id="facebook_link" value="{{$info->facebook_link}}" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="github_link" class="text-white mb-2">
                                                            <b>GitHub Link</b>
                                                        </label>
                                                        <input type="text" name="github_link" id="github_link" value="{{$info->github_link}}" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="whasapp_link" class="text-white mb-2">
                                                            <b>WhatsApp Link</b>
                                                        </label>
                                                        <input type="text" name="whasapp_link" id="whasapp_link" value="{{$info->whasapp_link}}" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="linkedin_link" class="text-white mb-2">
                                                            <b>LinkedIn Link</b>
                                                        </label>
                                                        <input type="text" name="linkedin_link" id="linkedin_link" value="{{$info->linkedin_link}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="img" class="text-white mb-2">
                                                            <b>Image</b>
                                                        </label>
                                                        <input type="file" name="img" id="img" value="{{$info->img}}" class="form-control text-center" accept="image/*">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success w-100 text-center text-white">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('infos.delete', $info->id)}}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
=======
    <div class="container-fluid">
        @if (session('success'))
            <div id="success" class="alert alert-success w-50 mx-auto text-center mt-5">
                <p class="m-0">{{ session('success') }}</p>
            </div>
        @elseif ($errors->any())
            @foreach ($errors->all() as $error)
                <div id="error" class="alert alert-danger w-50 mx-auto text-center mt-5">
                    <p class="mb-0">{{ $error }}</p>
                </div>
            @endforeach
        @endif
        <?php $i = 1 ?>
        <table class="table text-center align-middle table-striped table-hover" id="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Work Email</th>
                    <th>Image</th>
                    <th>Facebook</th>
                    <th>Whatsapp</th>
                    <th>Github</th>
                    <th>Linkedin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infos as $info)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$info->name}}</td>
                        <td>{{$info->age}}</td>
                        <td>{{$info->phone_number}}</td>
                        <td>{{$info->address}}</td>
                        <td>{{$info->email}}</td>
                        <td>
                            <img src={{asset('assets/imgs/information/'.$info->img)}} width="50" class="rounded" alt={{$info->name}}>
                        </td>
                        <td>
                            <a href="https://www.facebook.com/{{$info->facebook_link}}" target="_blank">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </td>
                        <td>
                            <a href="https://wa.me/{{$info->whatsapp_link}}" target="_blank">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </td>
                        <td>
                            <a href="https://github.com/{{$info->github_link}}" target="_blank">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </td>
                        <td>
                            <a href="https://linkedin.com/in/{{$info->linkedin_link}}" target="_blank">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_info{{$info->id}}">
                                <b>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </b>
                            </button>
                            <div class="modal fade" id="edit_info{{$info->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Info {{$info->name}}</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-dark">
                                            <form action="{{route('infos.update')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$info->id}}">
                                                    <div class="col-lg-6">
                                                        <div class="form-group text-center mb-3">
                                                            <label class="text-white" for="name">
                                                                <b>Name</b>
                                                            </label>
                                                            <input type="text" name="name" id="name" class="form-control text-center" value="{{$info->name}}" placeholder="Your Name">
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="age" class="text-white">
                                                                <b>Age</b>
                                                            </label>
                                                            <input type="number" class="form-control text-center" value="{{$info->age}}" placeholder="Your Age" id="age" name="age" >
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="phone_number" class="text-white">
                                                                <b>Mobile Number</b>
                                                            </label>
                                                            <input type="number" class="form-control text-center" value="{{$info->phone_number}}" placeholder="Your Phone Numbr" id="phone_number" name="phone_number" >
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="facebook" class="text-white">
                                                                <b>Facebook Username</b>
                                                            </label>
                                                            <input type="text" name="facebook_link" value="{{$info->facebook_link}}" id="facebook" placeholder="Facebook Username" class="form-control text-center">
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="github" class="text-white">
                                                                <b>Github Username</b>
                                                            </label>
                                                            <input type="text" name="github_link" value="{{$info->github_link}}" id="github" placeholder="Github Username" class="form-control text-center">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group text-center mb-3">
                                                            <label for="address" class="text-white">
                                                                <b>Address</b>
                                                            </label>
                                                            <input type="text" class="form-control text-center" value="{{$info->address}}" placeholder="Address" id="address" name="address" >
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="email" class="text-white">
                                                                <b>Work Email</b>
                                                            </label>
                                                            <input type="email" class="form-control text-center" value="{{$info->email}}" placeholder="Your Work Email" id="email" name="email" >
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="img" class="text-white">
                                                                <b>Profile Image</b>
                                                            </label>
                                                            <input type="file" name="img" id="img" class="form-control text-center" value="{{$info->img}}" accept="image/*">
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="whatsapp" class="text-white">
                                                                <b>Whatsapp Link</b>
                                                            </label>
                                                            <input type="text" name="whatsapp_link" value="{{$info->whatsapp_link}}" id="whatsapp" placeholder="Whatsapp Link" class="form-control text-center">
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <label for="linkedin" class="text-white">
                                                                <b>Linkedin Username</b>
                                                            </label>
                                                            <input type="text" name="linkedin_link" value="{{$info->linkedin_link}}" id="linkedin" placeholder="Linkedin Username" class="form-control text-center">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href={{route('infos.destroy', $info->id)}} class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
@endsection
