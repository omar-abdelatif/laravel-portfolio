@extends('layouts.app')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('header')
    <header class="header header-sticky mb-4 d-block">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ol>
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_categories" data-coreui-whatever="@mdo">
                                <b>Add Category</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="modal fade" id="add_categories" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="form-group text-center mb-3">
                            <label for="title">
                                <b>Title</b>
                            </label>
                            <input type="text" name="title" id="title" class="form-control text-center" placeholder="Category Name">
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
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
    <table class="table text-center align-middle table-striped table-hover" id="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_categories{{$category->id}}" data-coreui-whatever="@mdo">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <div class="modal fade" id="edit_categories{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit Category {{$category->title}}</h5>
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('categories.update')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$category->id}}">
                                            <div class="form-group text-center mb-3">
                                                <label for="title" class="mb-2">
                                                    <b class="text-white">Title</b>
                                                </label>
                                                <input type="text" name="title" id="title" class="form-control text-center" value="{{$category->title}}">
                                            </div>
                                            <button type="submit" class="btn btn-success w-100 mt-3 text-center text-white">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('admin.categories.destroy', $category->id)}}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
