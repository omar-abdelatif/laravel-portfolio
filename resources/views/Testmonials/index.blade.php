@extends('layouts.app')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('header')
    <header class="header header-sticky mb-4 d-block">
<<<<<<< HEAD
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button"
                onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
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
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
            <ul class="header-nav ms-auto">

            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown">
                    <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
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
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
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
                                <li class="breadcrumb-item active">Testmonials</li>
                            </ol>
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_testmonial" data-coreui-whatever="@mdo">
<<<<<<< HEAD
                                <b>Add Testmonial</b>
=======
                                <b>Add Testmonials</b>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="modal fade" id="add_testmonial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Testmonial</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{route('testmonials.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
<<<<<<< HEAD
                            <div class="col-lg-12 mb-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="client" class="text-white mb-2 text-center">
                                                <b>Client Name</b>
                                            </label>
                                            <input type="text" name="client_name" placeholder="Title" id="client" class="form-control w-100">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="title" class="text-white mb-2 text-center">
                                                <b>Title</b>
                                            </label>
                                            <input type="text" name="title" placeholder="Title" id="title" class="form-control w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text-center mb-3">
=======
                            <div class="col-lg-12">
                                <div class="form-group text-center mb-3">
                                    <label class="text-white" for="client_name">
                                        <b>Client Name</b>
                                    </label>
                                    <input type="text" name="client_name" id="client_name" placeholder="Client Name" class="form-control text-center">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label class="text-white" for="title">
                                        <b>Title</b>
                                    </label>
                                    <input type="text" name="title" id="title" placeholder="Title" class="form-control text-center">
                                </div>
                                <div class="form-group text-center mb-3">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                    <label for="img" class="text-white">
                                        <b>Image</b>
                                    </label>
                                    <input type="file" name="img" id="img" class="form-control text-center" accept="image/*">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
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
<<<<<<< HEAD
    <table class="table text-center align-middle table-striped table-hover" id="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Client Name</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testmonials as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->client_name}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                        <img src="{{asset('assets/imgs/testmonials/'. $item->img)}}" class="rounded-circle" width="80" alt="">
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_testmonial{{$item->id}}" data-coreui-whatever="@mdo">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <div class="modal fade" id="edit_testmonial{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Testmonial {{$item->title}}</h5>
=======

    <table class="table text-center align-middle table-striped table-hover" id="table">
        <thead>
            <th>#</th>
            <th>Client Name</th>
            <th>Tite</th>
            <th>Image</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($testmonials as $testmonial)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$testmonial->client_name}}</td>
                    <td>{{$testmonial->title}}</td>
                    <td>
                        <img src={{asset('assets/imgs/testmonials/'.$testmonial->img)}} class="rounded" width="50" alt={{$testmonial->img}}>
                    </td>
                    <td>
                        {{-- ! edit ! --}}
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_testmonial{{$testmonial->id}}">
                            <b>
                                <i class="fa-regular fa-pen-to-square"></i>
                            </b>
                        </button>
                        <div class="modal fade" id="edit_testmonial{{$testmonial->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Testmonial {{$testmonial->title}}</h5>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body bg-dark">
                                        <form action="{{route('testmonials.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
<<<<<<< HEAD
                                            <input type="hidden" name="id" value="{{$item->id}}">
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="client" class="text-white mb-2 text-center">
                                                                    <b>Client Name</b>
                                                                </label>
                                                                <input type="text" name="client_name" value="{{$item->client_name}}" id="client" class="form-control w-100">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title" class="text-white mb-2 text-center">
                                                                    <b>Title</b>
                                                                </label>
                                                                <input type="text" name="title" value="{{$item->title}}" id="title" class="form-control w-100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="img" class="text-white">
                                                            <b>Image</b>
                                                        </label>
                                                        <input type="file" name="img" id="img" value="{{$item->img}}" class="form-control text-center" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                                                    </div>
                                                </div>
=======
                                            <input type="hidden" name="id" value={{$testmonial->id}}>
                                            <div class="form-group mb-3 text-center">
                                                <label for="client_name" class="text-white">
                                                    <b>Client Name</b>
                                                </label>
                                                <input type="text" name="client_name" id="client_name" value='{{$testmonial->client_name}}' placeholder="Client Name" class="form-control text-center">
                                            </div>
                                            <div class="form-group mb-3 text-center">
                                                <label for="title" class="text-white">
                                                    <b>Title</b>
                                                </label>
                                                <input type="text" name="title" id="title" value='{{$testmonial->title}}' placeholder="Title" class="form-control text-center">
                                            </div>
                                            <div class="form-group mb-3 text-center">
                                                <label for="img" class="text-white">
                                                    <b>Image</b>
                                                </label>
                                                <input type="file" name="img" id="img" value={{$testmonial->img}} class="form-control text-center">
                                            </div>
                                            <div class="form-group mb-3 text-center">
                                                <button class="btn btn-success w-100 text-center" type="submit">Update</button>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                        <a href="{{route('testmonials.delete', $item->id)}}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
=======
                        {{-- ! Delete ! --}}
                        <a href={{route('testmonials.destroy', $testmonial->id)}} class="btn btn-danger">
                            <b>
                                <i class="fa-solid fa-trash"></i>
                            </b>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
