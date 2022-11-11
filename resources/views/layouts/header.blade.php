<nav class="navbar navbar-expand-sm bg-light navbar-light  ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav ">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/admin_master')}}">admin</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">View Blogs</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register')) 
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                    @endauth
                @endif
                </ul>
                
                </div>
            </div>
</nav>