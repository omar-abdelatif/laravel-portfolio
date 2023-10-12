@php
    use Illuminate\Support\Facades\Form;
@endphp
@extends('layouts.app')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('header')
<<<<<<< HEAD
    <header class="header header-sticky mb-4 d-block">
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
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
            <ul class="header-nav ms-auto"></ul>
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
    <header class="header header-sticky d-block">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 w-100">
<<<<<<< HEAD
                        <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
=======
                        <div class="w-100 d-flex align-items-baseline justify-content-between">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
<<<<<<< HEAD
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_blog" data-coreui-whatever="@mdo">
                                <b>Add Blog</b>
=======
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#add_blog">
                                <b>Add New Blog</b>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="modal fade" id="add_blog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<<<<<<< HEAD
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text-center mb-3">
                                    <label for="author" class="text-white">
                                        <b>Author</b>
                                    </label>
                                    <input type="text" name="author" id="author" class="form-control text-center" placeholder="Author Name">
                                </div>
=======
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                <div class="form-group text-center mb-3">
                                    <label for="title" class="text-white">
                                        <b>Title</b>
                                    </label>
<<<<<<< HEAD
                                    <input type="text" name="title" id="title" class="form-control text-center" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text-center mb-3">
                                    <label for="category" class="text-white">
                                        <b>Category</b>
                                    </label>
                                    <select name="category" id="category" class="form-control text-center">
                                        <option>Choose Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->title}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
=======
                                    <input type="text" name="title" id="title" class="form-control text-center" placeholder="Project Name">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="img" class="text-white">
                                        <b>Image</b>
                                    </label>
<<<<<<< HEAD
                                    <input type="file" name="img" id="img" class="form-control mb-3 text-center" accept="image/*">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-center mb-3">
                                    <label for="content" class="text-white">
                                        <b>Content</b>
                                    </label>
                                    <textarea name="content" placeholder="Content" id="contnent" class="form-control text-center pb-3" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
=======
                                    <input type="file" name="img" id="img" class="form-control text-center">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="category" class="text-white">
                                        <b>Category</b>
                                    </label>
                                    <select name="category" id="category" class="form-control text-center">
                                        <option value="">Select category...</option>
                                        @foreach ($categories as $category)
                                            <option value={{$category->title}}>{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="content" class="text-white">
                                        <b>Content:</b>
                                    </label>
                                    <textarea class="form-control pt-3 text-center" placeholder="Content Here" name="content"></textarea>
                                </div>
                                <div class="form-group mb-3 text-center">
                                    <label for="admins" class="text-white">
                                        <b>Admins:</b>
                                    </label>
                                    <select name="author" id="admins" class="form-control text-center">
                                        <option value="">Select Admin...</option>
                                        @foreach ($admins as $admin)
                                            <option value={{$admin->name}}>{{$admin->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-center">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
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
<<<<<<< HEAD
    <?php $i = 1 ?>
    <table class="table text-center align-middle table-striped table-hover" id="table">
=======
    <?php $i = 1; ?>
    <table class="table text-center align-middle table-striped table-hover mt-5" id="table">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        <thead>
            <tr>
                <th>#</th>
                <th>Author</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Image</th>
<<<<<<< HEAD
                <th>Action</th>
=======
                <th>Actions</th>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
<<<<<<< HEAD
                    <td>{{$i++}}</td>
                    <td>{{$blog->author}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->category}}</td>
                    <td>{{$blog->content}}</td>
                    <td>
                        <img src="{{asset('assets/imgs/blogs/'.$blog->img)}}" class="rounded-circle" width="80" alt="{{$blog->img}}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_project{{$blog->id}}">
                            <b>
                                Edit
                            </b>
                        </button>
                        <div class="modal fade" id="edit_project{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Blog {{$blog->title}}</h5>
=======
                    <td>{{ $i++ }}</td>
                    <td>{{ $blog['author'] }}</td>
                    <td>{{ $blog['title'] }}</td>
                    <td>{{ $blog['content'] }}</td>
                    <td>{{ $blog['category'] }}</td>
                    <td>
                        <img src={{asset('assets/imgs/Blogs/'.$blog['img'])}} class="rounded-circle" width="50" alt={{$blog['title']}}>
                    </td>
                    <td>
                        {{-- Edit --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_project_{{$blog->id}}">
                            <b>
                                <i class="fa-regular fa-pen-to-square"></i>
                            </b>
                        </button>
                        <div class="modal fade" id="edit_project_{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Project {{$blog->title}}</h5>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body bg-dark">
                                        <form action="{{route('blogs.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{$blog->id}}">
<<<<<<< HEAD
                                                <div class="col-lg-6">
=======
                                                <div class="col-lg-12">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="author" class="text-white">
                                                            <b>Author</b>
                                                        </label>
                                                        <select name="author" id="author" class="form-control text-center">
                                                            <option>Choose Category</option>
                                                            @foreach ($admins as $admin)
                                                                <option value="{{$admin->name}}" {{$blog->author == $admin->name ? 'selected' : ''}}>{{$admin->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                                    <div class="form-group text-center mb-3">
                                                        <label for="title" class="text-white">
                                                            <b>Title</b>
                                                        </label>
                                                        <input type="text" name="title" id="title" value="{{$blog->title}}" class="form-control text-center">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="category" class="text-white">
                                                            <b>Category</b>
                                                        </label>
                                                        <select name="category" id="category" class="form-control text-center">
                                                            <option>Choose Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{$category->title}}" {{$blog->category == $category->title ? 'selected' : ''}}>{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
<<<<<<< HEAD
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="url" class="text-white">
                                                            <b>
                                                                Author
                                                            </b>
                                                        </label>
                                                        <input type="text" class="form-control text-center" name="author" id="author" value="{{$blog->author}}">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="img" class="text-white">
                                                            <b>
                                                                Image
                                                            </b>
                                                        </label>
                                                        <input type="file" name="img" id="img" class="form-control text-center" value="{{$blog->img}}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
=======
                                                    <div class="form-group text-center mb-3">
                                                        <label for="img" class="text-white">
                                                            <b>Image</b>
                                                        </label>
                                                        <input type="file" name="img" id="img" class="form-control text-center" value={{$blog->img}}>
                                                    </div>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                                    <div class="form-group text-center mb-3">
                                                        <label for="content" class="text-white">
                                                            <b>Content</b>
                                                        </label>
<<<<<<< HEAD
                                                        <textarea name="content" id="content" class="form-control pt-3 text-center" cols="30" rows="10">{{$blog->content}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
=======
                                                        <textarea name="content" class="form-control text-center pt-4" id="content" cols="30" rows="10">{{$blog->content}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success w-100">
                                                            <b>Update</b>
                                                        </button>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                        <a href="{{route('blogs.destroy', $blog->id)}}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                            <b>Delete</b>
=======
                        <a href={{route('blogs.destroy', $blog['id'])}} class="btn btn-danger">
                            <b>
                                <i class="fa-solid fa-trash text-white"></i>
                            </b>
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
