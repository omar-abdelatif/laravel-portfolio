<nav class="navbar navbar-expand-lg p-3">
    <div class="container">
        <a href="/" class="navbar-brand text-white">
            <span>
                Omar
            </span>
            <span class="ms-2">
                Abdelatif
            </span>
        </a>
        <button class="btn btn-primary menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="offcanvas offcanvas-start" tabindex= -1 id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Menu</h5>
                <button type="button" class="fa-solid fa-xmark btn text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto">
                    @foreach ($pages as $page)
                        <li class="nav-item">
                            <a href="{{$page->url}}" class="{{$page->classes}} px-lg-2 px-md-3 px-sm-4">
                                <i class="{{$page->icon}}"></i>
                                <b>{{$page->title}}</b>
                            </a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        @auth
                            <a href="{{route('dashboard')}}" class="nav-link px-lg-2 px-md-3 px-sm-4" target="_blank">
                                <i class="fa-solid fa-gauge"></i>
                                <b>Dashboard</b>
                            </a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
