<nav class="navbar navbar-expand-sm bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand mb-2" href="{{route('homepage')}}">AulabPost</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('article.create')}}">Create article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('article.index')}}">Article list</a>
                </li>
                <li class="nav-item effect">
                    <a class="nav-link active" href="{{route('careers')}}"><i class="fa-solid fa-briefcase px-2"></i>Work with us</a>
                  </li>
            </ul>
           
            <div class="collapse navbar-collapse mb-2" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    @auth
                    @if (Auth::user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.dashboard')}}">Dashboard admin</a>
                    </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Welcome {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                                                </ul>
                    </li>
                    @else
                    @endauth
                

                    @auth
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
