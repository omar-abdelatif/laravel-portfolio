@extends('layouts.app')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('header')
    <header class="header header-sticky mb-4 d-block">
        {{-- @include('layouts.header') --}}
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
            <ul class="header-nav ms-auto">
                <li class="nav-item">
                    <a href="/" class="btn btn-success" target="_blank">
                    <b>View Site</b>
                </a>
                </li>
            </ul>
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ol>
                            <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#add_project" data-coreui-whatever="@mdo">
                                <b>Add Project</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="modal fade" id="add_project" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Project</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text-center mb-3">
                                    <label for="title" class="text-white">
                                        <b>Title</b>
                                    </label>
                                    <input type="text" name="title" id="title" class="form-control text-center" placeholder="Project Name">
                                </div>
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
                            <div class="col-lg-6">
                                <div class="form-group text-center mb-3">
                                    <label for="tags" class="text-white">
                                        <b>Tags</b>
                                    </label>
                                    <select name="tags[]" class="form-multi-select form-multi-select-multiple form-multi-select-selection-tags form-multi-select-with-cleaner" multiple data-coreui-search="true">
                                        @foreach ($tags as $tag)
                                            <option class="form-multi-select-option" value="{{$tag->title}}">{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="github" class="text-white">
                                        <b>Github Repo Link</b>
                                    </label>
                                    <input type="text" id="github" name="github" placeholder="Github Repo Link" class="form-control mb-3 text-center">
                                </div>
                                <div class="form-group text-center mb-3">
                                    <label for="url" class="text-white">
                                        <b>Url Link</b>
                                    </label>
                                    <input type="text" name="url" id="url" placeholder="Url Link" class="form-control mb-3 text-center">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-center mb-3">
                                    <label for="description" class="text-white">
                                        <b>Description</b>
                                    </label>
                                    <textarea name="description" placeholder="Description" id="description" class="form-control text-center pb-3" cols="30" rows="10"></textarea>
                                </div>
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
                <th>Description</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Url</th>
                <th>Github</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->category}}</td>
                    <td>
                        @foreach (explode(',', $project->tags) as $tag)
                            <span class="p-2 bg-primary rounded text-white">{{$tag}}</span>
                        @endforeach
                    </td>
                    <td>{{$project->url}}</td>
                    <td>{{$project->github}}</td>
                    <td>
                        <img src="{{asset('assets/imgs/projects/' . $project->img)}}" alt="{{$project->title}}" width="50" class="rounded">
                    </td>
                    <td>
                        {{-- ! edit ! --}}
                        <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_project_{{$project->id}}">
                            <b>
                                Edit
                            </b>
                        </button>
                        <div class="modal fade" id="edit_project_{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Project {{$project->title}}</h5>
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body bg-dark">
                                        <form action="{{route('projects.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{$project->id}}">
                                                <div class="col-lg-6">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="title" class="text-white">
                                                            <b>Title</b>
                                                        </label>
                                                        <input type="text" name="title" id="title" value="{{$project->title}}" class="form-control text-center">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="category" class="text-white">
                                                            <b>Category</b>
                                                        </label>
                                                        <select name="category" id="category" class="form-control text-center">
                                                            <option>Choose Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{$category->title}}" {{$project->category == $category->title ? 'selected' : ''}}>{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="tag" class="text-white">
                                                            <b>Tag</b>
                                                        </label>
                                                        <select name="tags[]" class="form-multi-select form-multi-select-multiple form-multi-select-selection-tags form-multi-select-with-cleaner" multiple data-coreui-search="true">
                                                            @foreach ($tags as $tag)
                                                                <option value="{{$tag->title}}"
                                                                    @if (collect(explode(',', $project->tags))->contains($tag->title))
                                                                        selected
                                                                    @endif>
                                                                    {{$tag->title}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="url" class="text-white">
                                                            <b>Url</b>
                                                        </label>
                                                        <input type="text" class="form-control text-center" name="url" id="url" value="{{$project->url}}">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="github" class="text-white">
                                                            <b>Github</b>
                                                        </label>
                                                        <input type="text" name="github" id="github" class="form-control text-center" value="{{$project->github}}">
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <label for="img" class="text-white">
                                                            <b>Image</b>
                                                        </label>
                                                        <input type="file" name="img" id="img" class="form-control text-center" value="{{$project->img}}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group text-center mb-3">
                                                        <label for="description" class="text-white">
                                                            <b>Description</b>
                                                        </label>
                                                        <textarea name="description" id="description" class="form-control pt-3 text-center" cols="30" rows="10">{{$project->description}}</textarea>
                                                    </div>
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
                        {{-- delete --}}
                        <a href="{{route('projects.destroy', $project->id)}}" class="btn btn-danger">
                            <span>
                                <b>
                                    Delete
                                </b>
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
