@extends('frontend.layout.master')
@section('title', 'Omar Abdelatif | ' . $pageTitle)
@section('content')
    <div class="wrapper bg-primary rounded w-90 mx-auto m-5">
        <section class="works p-5">
            <div class="work-title text-left ps-5 mt-0 mb-0 text-white">
                <h1 class="text-decoration-underline"> - Portfolio - </h1>
            </div>
            <div class="work-content pt-4">
                <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link active" data-bs-target="#pills_all" id="pills_all_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_all" aria-selected="true">All Projects</button>
                    </li>
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link" data-bs-target="#pills_ui_design" id="pills_ui_design_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_ui_design" aria-selected="true">Ui Design</button>
                    </li>
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link" data-bs-target="#pills_ui_dev" id="pills_ui_dev_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_ui_dev" aria-selected="false">Ui Devlopment</button>
                    </li>
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link" data-bs-target="#pills_frontend" id="pills_frontend_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_frontend" aria-selected="false">FrontEnd</button>
                    </li>
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link" data-bs-target="#pills_backend" id="pills_backend_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_backend" aria-selected="false">BackEnd</button>
                    </li>
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link" data-bs-target="#pills_react" id="pills_react_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_react" aria-selected="false">React.js</button>
                    </li>
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link" data-bs-target="#pills_next" id="pills_next_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_next" aria-selected="false">Next.js</button>
                    </li>
                    <li class="nav-item me-3" role="presentation">
                        <button class="nav-link" data-bs-target="#pills_laravel" id="pills_laravel_tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills_laravel" aria-selected="false">Laravel</button>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane p-5 text-center fade show active" id="pills_all" role="tabpanel" tabindex="0" aria-labelledby="pills_all_tab">
                        <div class="row">
                            @if ($count > 0)
                                @foreach ($projects as $project)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="project-item rounded">
                                            <div class="ribbon">
                                                <span class="text-white text-center py-2 px-5">{{$project->category}}</span>
                                            </div>
                                            <div class="project-img">
                                                <img src="{{asset('assets/imgs/projects/'.$project->img)}}" class="img-fluid" width="40px" alt="{{$project->title}}">
                                            </div>
                                            <div class="project-content p-3">
                                                <a href="{{url("details/$project->id")}}" class="text-decoration-none text-white">
                                                    <h3>{{$project->title}}</h3>
                                                </a>
                                                <div class="links my-3">
                                                    <a href="{{$project->github}}" class="github text-white text-decoration-none me-2">
                                                        <i class="fa-brands fa-github fa-xl"></i>
                                                    </a>
                                                    <a href="{{$project->url}}" class="url text-white text-decoration-none">
                                                        <i class="fa-solid fa-link fa-xl"></i>
                                                    </a>
                                                </div>
                                                <div class="project-tags mt-4 d-flex align-items-center justify-content-evenly flex-wrap">
                                                    @foreach (explode(',', $project->tags) as $tags)
                                                        <span class="p-1 rounded">{{$tags}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1 class="text-center">No Projects To Show</h1>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane p-5 text-center fade" id="pills_ui_design" role="tabpanel" tabindex="0" aria-labelledby="pills_ui_design_tab">UI Design Projects</div>
                    <div class="tab-pane p-5 text-center fade" id="pills_ui_dev" role="tabpanel" tabindex="0" aria-labelledby="pills_ui_dev_tab">UI Development Project</div>
                    <div class="tab-pane p-5 text-center fade" id="pills_frontend" role="tabpanel" tabindex="0" aria-labelledby="pills_frontend_tab">
                        <div class="row">
                            @if ($count = 0)
                                <h1 class="text-center">No FrontEnd Projects To Show</h1>
                            @else
                                @foreach ($frontProjects as $item)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="project-item rounded">
                                            <div class="ribbon">
                                                <span class="text-white text-center py-2 px-5">{{$item->category}}</span>
                                            </div>
                                            <div class="project-img">
                                                <img src="{{asset('assets/imgs/projects/'.$item->img)}}" class="img-fluid" width="40px" alt="{{$item->title}}">
                                            </div>
                                            <div class="project-content p-3">
                                                <a href="{{url("details/$item->id")}}" class="text-decoration-none text-white">
                                                    <h3>{{$item->title}}</h3>
                                                </a>
                                                <div class="links my-3">
                                                    <a href="{{$item->github}}" class="github text-white text-decoration-none me-2">
                                                        <i class="fa-brands fa-github fa-xl"></i>
                                                    </a>
                                                    <a href="{{$item->url}}" class="url text-white text-decoration-none">
                                                        <i class="fa-solid fa-link fa-xl"></i>
                                                    </a>
                                                </div>
                                                <div class="project-tags mt-4 d-flex align-items-center justify-content-evenly flex-wrap">
                                                    @foreach (explode(',', $item->tags) as $tags)
                                                        <span class="p-1 rounded">{{$tags}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane p-5 text-center fade" id="pills_backend" role="tabpanel" tabindex="0" aria-labelledby="pills_backend_tab">
                        <div class="row">
                            @if ($backProjectsCount > 0)
                                @foreach ($backProjects as $item)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="project-item rounded">
                                            <div class="ribbon">
                                                <span class="text-white text-center py-2 px-5">{{$item->category}}</span>
                                            </div>
                                            <div class="project-img">
                                                <img src="{{asset("assets/imgs/projects/$item->img")}}" class="img-fluid" width="40px" alt="{{$item->title}}">
                                            </div>
                                            <div class="project-content p-3">
                                                <a href="{{url("details/$item->id")}}" class="text-decoration-none text-white">
                                                    <h3>{{$item->title}}</h3>
                                                </a>
                                                <div class="links my-3">
                                                    <a href="{{$item->github}}" class="github text-white text-decoration-none me-2">
                                                        <i class="fa-brands fa-github fa-xl"></i>
                                                    </a>
                                                    <a href="{{$item->url}}" class="url text-white text-decoration-none">
                                                        <i class="fa-solid fa-link fa-xl"></i>
                                                    </a>
                                                </div>
                                                <div class="project-tags mt-4 d-flex align-items-center justify-content-evenly flex-wrap">
                                                    @foreach (explode(',', $item->tags) as $tags)
                                                        <span class="p-1 rounded">{{$tags}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1 class="text-center">No BackEnd Projects To Show</h1>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane p-5 text-center fade" id="pills_react" role="tabpanel" tabindex="0" aria-labelledby="pills_react_tab">React.js Projects</div>
                    <div class="tab-pane p-5 text-center fade" id="pills_next" role="tabpanel" tabindex="0" aria-labelledby="pills_next_tab">Next.js Projects</div>
                    <div class="tab-pane p-5 text-center fade" id="pills_laravel" role="tabpanel" tabindex="0" aria-labelledby="pills_laravel_tab">Laravel Projects</div>
                </div>
            </div>
        </section>
        @include('frontend.layout.footer')
    </div>
@endsection
