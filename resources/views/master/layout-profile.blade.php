<!DOCTYPE html>
<html>
<head>
    <title>Urodia</title>
</head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" " type=" text />css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="{{asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{asset('css/custom.css') }}" rel="stylesheet">
<link href="{{asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
<link href="{{asset('css/font-awesome.css') }}" rel="stylesheet">
<link href="{{asset('css/datatables.css') }}" rel="stylesheet">
<link href="{{asset('css/custom-checkboxes.css') }}" rel="stylesheet">
<script src="{{asset('js/jquery.js') }}"></script>
<script src="{{asset('js/datatables.js') }}"></script>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/urodia/public/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Urodia</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
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
                            <h3>Options</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="/urodia/public/dashboard"><i class="fa fa-home"></i> Home </a>
                                </li>

                                <li>
                                    <a><i class="fa fa-table"></i> Patient Records <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/urodia/public/newPatient">New Patient</a></li>
                                        <li><a href="/urodia/public/viewPatientRecords">View Patient Records</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-desktop"></i> Admin Options <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li><a href="/urodia/public/categorytree">Edit List Options</a></li>
                                    </ul>
                                </li>
                                <li>
                                   <a><i class="fa fa-desktop"></i> Reports </a>
                                    <ul class="nav child_menu">

                                        <li><a href="/urodia/public/showtally">Show Tally Count</a></li>
                                    </ul>
                               </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="/urodia/public/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            @yield('content')
        </div>
        <!-- /page content -->
    </div>
</body>
</html>