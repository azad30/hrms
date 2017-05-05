<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('') }}" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.name', 'laravel') }}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('design/images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a><i class="fa fa-building  "></i> Houses <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/') }}">Houses</a></li>
                            <li><a href="{{ url('/') }}">Flats</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-home"></i> Rents <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/') }}">Rents</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Control</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-database"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>Addresses<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="{{ url('/') }}">address 1</a>
                                    </li>
                                    <li><a href="{{ url('/') }}">address 2</a>
                                    </li>
                                    <li><a href="{{ url('/') }}">address 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/') }}">Address Types</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret "></i> Admin <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/') }}">Users</a></li>
                            <li><a href="{{ url('admin/role') }}">Roles</a></li>
                            <li><a href="{{ url('/') }}">User Roles</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-cog "></i> Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/') }}">My Profile</a></li>
                            <li><a href="{{ url('/') }}">Help</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Report</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-building  "></i> House <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/') }}">Houses Statement</a></li>
                            <li><a href="{{ url('/') }}">Flats Statement</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-home  "></i> Rent <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/') }}">Rents Statement</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user  "></i> User <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/') }}">Users Statement</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>