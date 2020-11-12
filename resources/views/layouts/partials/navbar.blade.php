<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-light">
    <!-- Header with logos -->
    <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
        <div class="navbar-brand navbar-brand-md">
            <a href="" class="d-inline-block">
                <img src="" alt="PB">
            </a>
        </div>

        <div class="navbar-brand navbar-brand-xs">
            <a href="" class="d-inline-block">
                <img src="" alt="PB">
            </a>
        </div>
    </div>
    <!-- /header with logos -->

    <!-- Mobile controls -->
    <div class="d-flex flex-1 d-md-none">
        <div class="navbar-brand mr-auto">
            <a href="" class="d-inline-block">
                <img src="{{ asset('logo.png') }}" alt="PB">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>

        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>
    <!-- /mobile controls -->


    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>
        <form id="logout-form" action="" method="POST" style="display: none;">
            @csrf
        </form>
        <span class="badge bg-white badge-pill ml-md-3 mr-md-auto">&nbsp;</span>

        <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34"
                        alt="">
                    <span class="text-capitalize"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user"></i> My profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="" onclick="">
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <!-- /navbar content -->
</div>
<!-- /main navbar -->
