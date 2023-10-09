<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="PSPU : <?php echo $pagename;  ?>" />
	<meta name="author" content="PSPU : <?php echo $pagename;  ?>" />
	<meta name="robots" content="PSPU : <?php echo $pagename;  ?>" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="PSPU" />
	
	<!-- OG -->
	<meta property="og:title" content="PSPU" />
	<meta property="og:description" content="PSPU : <?php echo $pagename;  ?>" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<!-- 
	<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.png" /> -->
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>PSPU : <?php echo $pagename;  ?>  </title>
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?=site_url()?>assets1/images/favicon.png" />
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="<?=site_url()?>assets1/js/html5shiv.min.js"></script>
	<script src="<?=site_url()?>assets1/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=site_url()?>assets1/css/assets.css">
	<link rel="stylesheet" type="text/css" href="<?=site_url()?>assets1/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=site_url()?>assets1/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=site_url()?>assets1/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?=site_url()?>assets1/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=site_url()?>assets1/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?=site_url()?>assets1/css/color/color-1.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="<?=site_url('Home/dashboard')?>" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="<?=site_url()?>assets1/images/logo-mobile.png" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="<?=site_url()?>assets1/images/logo-white.png" width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="<?=site_url('Home/dashboard')?>" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
					<!-- <li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="../courses.html">Our Courses</a></li>
								<li><a href="../event.html">New Event</a></li>
								<li><a href="../membership.html">Membership</a></li>
							</ul>
						</div>
					</li> -->
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="<?=site_url()?>assets1/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="<?=site_url('Home/dashboard')?>">My profile</a></li>
								<!-- <li><a href="list-view-calendar.html">Activity</a></li> -->
								<!-- <li><a href="mailbox.html">Messages</a></li> -->
								<li><a href="<?=site_url("Home/logout")?>">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="<?=site_url()?>assets1/images/logo.png" width="122" height="27"></a>
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="<?=site_url('Home/dashboard')?>" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashborad</span>
		                </a>
		            </li>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->