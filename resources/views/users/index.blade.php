@extends('layouts.app')

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
