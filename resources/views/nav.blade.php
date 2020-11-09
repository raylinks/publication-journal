
        <!-- Navbar -->
        <div class="container-fluid counts">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light w-100" style="border-bottom: 3px solid #9e3623; color:#9e3623;">
                <span class="navbar-brand font-weight-bolder text-truncate" style="font-size: 2rem; font-stretch:ultra-expanded">JRRS</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" style="color:#9e3623; font-size:28px;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-5 {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item mr-5 {{ Request::is('publications') ? 'active' : '' }}">
                            <a class="nav-link {{ Request::is('publications') ? 'active' : '' }}" href="{{url('/publications')}}"><i class="fas fa-book"></i>Publications</a>
                        </li>
                        <li class="nav-item mr-5 {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{url('/about')}}"><i class="fas fa-users"></i>About</a>
                        </li>
                        <li class="nav-item mr-5 {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{url('/contact')}}"><i class="fas fa-phone"></i>Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
