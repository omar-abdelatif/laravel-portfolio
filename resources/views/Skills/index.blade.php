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
                                <li class="breadcrumb-item active">Skills</li>
                            </ol>
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_skill" data-coreui-whatever="@mdo">
                                <b>Add Skill</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="modal fade" id="add_skill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Skill</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{route('skills.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text-center mb-3">
                                    <label for="img" class="text-white">
                                        <b>Image</b>
                                    </label>
                                    <input type="file" name="img" id="img" class="form-control text-center" accept="image/*">
                                </div>
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
    <table class="table text-center align-middle table-striped table-hover" id="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <td>{{$i++}}</td>
                    <td>
                        <img src="{{asset('assets/imgs/skills/'.$skill->img)}}" alt="{{$skill->category}}" width="50">
                    </td>
                    <td>{{$skill->category}}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_tag{{$skill->id}}">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <div class="modal fade" id="edit_tag{{$skill->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Tag {{$skill->title}}</h5>
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body bg-dark">
                                        <form action="{{route('skills.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$skill->id}}">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="title" class="text-white">
                                                            <b>Image</b>
                                                        </label>
                                                        <input type="file" name="img" id="img" class="form-control text-center" value="{{$skill->img}}">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="category" class="text-white">
                                                            <b>Category</b>
                                                        </label>
                                                        <select name="category" id="category" class="form-control text-center">
                                                            <option>Choose Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{$category->title}}" {{$skill->category == $category->title ? 'selected' : ''}}>{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
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
                        <a href="{{route('skills.destroy', $skill->id)}}" class="btn btn-danger">
                            <b>
                                Delete
                            </b>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
