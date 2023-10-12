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
                    <div class="tab-pane p-5 text-center fade show active" id="pills_all" role="tabpanel" tabindex="0" aria-labelledby="pills_all_tab">All Projects</div>
                    <div class="tab-pane p-5 text-center fade undefined" id="pills_ui_design" role="tabpanel" tabindex="0" aria-labelledby="pills_ui_design_tab">UI Design Projects</div>
                    <div class="tab-pane p-5 text-center fade undefined" id="pills_ui_dev" role="tabpanel" tabindex="0" aria-labelledby="pills_ui_dev_tab">UI Development Project</div>
                    <div class="tab-pane p-5 text-center fade undefined" id="pills_frontend" role="tabpanel" tabindex="0" aria-labelledby="pills_frontend_tab">FrontEnd Development Projects</div>
                    <div class="tab-pane p-5 text-center fade undefined" id="pills_backend" role="tabpanel" tabindex="0" aria-labelledby="pills_backend_tab">BackEnd Development Projects</div>
                    <div class="tab-pane p-5 text-center fade undefined" id="pills_react" role="tabpanel" tabindex="0" aria-labelledby="pills_react_tab">React.js Projects</div>
                    <div class="tab-pane p-5 text-center fade undefined" id="pills_next" role="tabpanel" tabindex="0" aria-labelledby="pills_next_tab">Next.js Projects</div>
                    <div class="tab-pane p-5 text-center fade undefined" id="pills_laravel" role="tabpanel" tabindex="0" aria-labelledby="pills_laravel_tab">Laravel Projects</div>
                </div>
            </div>
        </section>
        @include('frontend.layout.footer')
    </div>
@endsection
