@extends('layouts.app')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('header')
    <header class="header header-sticky mb-4 d-block">
        @include('layouts.header')
        <div class="header-divider"></div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Pages</li>
                            </ol>
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_page" data-coreui-whatever="@mdo">
                                <b>Add Page</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="modal fade" id="add_page" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Page</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{route('pages.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text-center mb-3">
                                    <label for="title" class="text-white">
                                        <b>Title</b>
                                    </label>
                                    <input type="text" name="title" id="title" class="form-control text-center" placeholder="Page Name">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="classes" class="text-white">
                                        <b>Classes</b>
                                    </label>
                                    <input type="text" name="classes" id="classes" class="form-control text-center" placeholder="Page Classes">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text-center mb-3">
                                    <label for="url" class="text-white">
                                        <b>Url</b>
                                    </label>
                                    <input type="text" name="url" id="url" placeholder="url" class="form-control mb-3 text-center">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="icon" class="text-white">
                                        <b>Icon</b>
                                    </label>
                                    <input type="text" name="icon" id="icon" placeholder="Icon" class="form-control mb-3 text-center">
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
                <th>Title</th>
                <th>Url</th>
                <th>Icon</th>
                <th>Classes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$page->title}}</td>
                    <td>{{$page->url}}</td>
                    <td>{{$page->icon}}</td>
                    <td>{{$page->classes}}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_page{{$page->id}}" data-coreui-whatever="@mdo">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <div class="modal fade" id="edit_page{{$page->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Page {{$page->title}}</h5>
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body bg-dark">
                                        <form action="{{route('pages.update')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{$page->id}}">
                                                <div class="col-lg-6">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="title" class="text-white">
                                                            <b>Title</b>
                                                        </label>
                                                        <input type="text" name="title" id="title" class="form-control text-center" value="{{$page->title}}">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="classes" class="text-white">
                                                            <b>Classes</b>
                                                        </label>
                                                        <input type="text" name="classes" id="classes" class="form-control text-center" value="{{$page->classes}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="url" class="text-white">
                                                            <b>Url</b>
                                                        </label>
                                                        <input type="text" name="url" id="url" value="{{$page->url}}" class="form-control mb-3 text-center">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="icon" class="text-white">
                                                            <b>Icon</b>
                                                        </label>
                                                        <input type="text" name="icon" id="icon" value="{{$page->icon}}" class="form-control mb-3 text-center">
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
                        <a href="{{route('pages.delete', $page->id)}}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
