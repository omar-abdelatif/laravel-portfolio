@extends('layouts.app')

@section('header')
    <header class="header header-sticky mb-4 d-block">
        {{-- <div class="container-fluid">
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
        <div class="header-divider"></div> --}}
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 w-100">
                        <div class="w-100 d-flex align-items-baseline justify-content-between mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Users') }}
        </div>

        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Img</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <img src="{{asset("assets/imgs/users/$user->img")}}" width="50" class="rounded-circle" alt="{{$user->img}}">
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning" data-coreui-toggle="modal" data-coreui-target="#edit_project_{{$user->id}}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <div class="modal fade" id="edit_project_{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update User {{$user->name}}</h5>
                                            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-dark">
                                            <form action="{{route('img.update')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="id" value="{{$user->id}}">
                                                    <div class="col-lg-12">
                                                        <div class="form-group text-center mb-3">
                                                            <label for="img" class="text-white">
                                                                <b>Image</b>
                                                            </label>
                                                            <input type="file" name="img" id="img" class="form-control text-center" value={{$user->img}}>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success w-100">
                                                                <b>Update</b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
