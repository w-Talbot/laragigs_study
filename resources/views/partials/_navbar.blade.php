<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a href="/"
        ><img class="w-24" src="{{asset('images/sortition.logo.png')}}" alt="" class="logo"
            /></a>
        @auth()

{{--            <span class="font-bold uppercase">--}}
{{--                Welcome {{auth()->user()->name}}--}}
{{--            </span>--}}
{{--        --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/studies">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/studies">Studies</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Manage
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/studies/manage">Studies</a></li>
                        <li><a class="dropdown-item" href="/ManageUsers/index">User</a></li>
                        <li><a class="dropdown-item" href="#">System Audit</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Help
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">General</a></li>
                        <li><a class="dropdown-item" href="#">Admin</a></li>
                        <li><a class="dropdown-item" href="#">Stats</a></li>
                        <li><a class="dropdown-item" href="#">Blind</a></li>
                        <li><a class="dropdown-item" href="#">IT</a></li>

                    </ul>
                </li>

                <form class="nav-link" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                         Logout
                    </button>
                </form>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" name ="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            @else
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    </ul>
                </div>

            @endauth
        </div>
    </div>
</nav>
