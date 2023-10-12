@extends('layouts.app')

@section('title', 'Omar Abdelatif | ' . $pageTitle)

<<<<<<< HEAD
@section('header')
    <header class="header header-sticky mb-4">
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
    </header>
@endsection

@section('content')
    <div class="row">
=======
@section('content')
    <div class="row mt-5">
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        <div class="col-lg-3">
            <div class="card mb-4 text-white bg-primary-gradient">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Total Projects</h5>
                        <span>Total Projects</span>
                    </div>
                    <p class="count mb-0">{{$project_count}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4 text-white bg-info-gradient">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Total Skills</h5>
                        <span>Total Skills</span>
                    </div>
                    <p class="count mb-0">0</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4 text-white bg-warning-gradient">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Total Services</h5>
                        <span>Total Services</span>
                    </div>
                    <p class="count mb-0">0</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4 text-white bg-danger-gradient">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Total Blogs</h5>
                        <span>Total Blogs</span>
                    </div>
                    <p class="count mb-0">0</p>
                </div>
            </div>
        </div>
    </div>
@endsection
