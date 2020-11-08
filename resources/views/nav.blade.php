
        <!-- Navbar -->
        <div class="container-fluid counts">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light w-100" style="border-bottom: 3px solid burlywood; color:burlywood;">
                <span class="navbar-brand font-weight-bolder text-truncate" style="max-width: 210px;">JRRS (Journal of Research and Review in Science)</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" style="color:#C88937; font-size:28px;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-5">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link {{ Request::is('/publications') ? 'active' : '' }}" href="{{url('/publications')}}"><i class="fas fa-book"></i>Publications</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link {{ Request::is('/about') ? 'active' : '' }}" href="{{url('/about')}}"><i class="fas fa-users"></i>About</a>
                        </li>
                        <li class="nav-item mr-5">
                        <a class="nav-link {{ Request::is('/contact') ? 'active' : '' }}" href="{{url('/contact')}}"><i class="fas fa-phone"></i>Contact</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i>Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
