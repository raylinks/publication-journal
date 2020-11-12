<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#">
                            <img src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" width="38"
                                height="38" class="rounded-circle" alt="">
                        </a>
                    </div>

                    <div class="media-body mt-2">
                        <div class="media-content font-weight-semibold text-capitalize">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item">
                    <a href="" class="nav-link" id="dashboard">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="{{route('index')}}" class="nav-link" id="earlyAccess">
                        <i class="icon-key"></i>
                        <span>Early Access Requests</span>
                    </a>
                </li>
    
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
</div>
<!-- /main sidebar -->
