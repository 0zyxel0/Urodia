<!DOCTYPE html>
<html>

<head>
	<title>Urodia</title>

</head>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.js"></script>

<body class="nav-md">
<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col menu_fixed">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
					<a href="dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Urodia</span></a>
				</div>

				<div class="clearfix"></div>

				<!-- menu profile quick info -->
				<div class="profile clearfix">
					<div class="profile_pic">
						<img src="images/img.jpg" alt="..." class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Welcome,</span>
						<h2>Dr. Dick</h2>
					</div>
				</div>
				<!-- /menu profile quick info -->

				<br />

				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<h3>Options</h3>
						<ul class="nav side-menu">
							<li><a><i class="fa fa-home"></i> Home </a>
							</li>
							<li><a><i class="fa fa-desktop"></i> Schedule <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="calendar.html">Calendar</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-table"></i> Patient Records <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="newPatient">New Patient</a></li>
									<li><a href="viewPatientRecords">View Patient Records</a></li>
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
								<img src="images/img.jpg" alt="">Dr. Dick
								<span class=" fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu pull-right">
								<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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