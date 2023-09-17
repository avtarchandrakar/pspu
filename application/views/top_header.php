<!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="<?php echo site_url('Home/contact');?>"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>pspunational@gmail.com</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
							<li><a class="btn btn-warning text-bold"  href="<?php echo site_url('Home/donation');?>">Donation</a></li>
							<li><a href="<?php echo site_url('Home/login');?>">Login</a></li>
							<li><a href="<?php echo site_url('Home/register');?>">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="<?=base_url('Home')?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="<?=base_url('Home')?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li class="active"><a href="<?php echo site_url('Home');?>">Home </a></li>
                           <li><a href="javascript:;">About<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
								 <li><a href="<?php echo site_url('Home/history');?>">OUR HISTORY</a></li>
								 <li><a href="<?php echo site_url('Home/differences');?>">Why We Are Diffrence</a></li><li><a href="<?php echo site_url('Home/organization');?>">Organization</a></li><li><a href="<?php echo site_url('Home/philosophy');?>">Our Philosophy</a></li></ul>
							</li>
							<li><a href="javascript:;">Leadership<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
								<li><a href="<?php echo site_url('Leadership');?>">National Leadership</a></li>
								 <li><a href="<?php echo site_url('Leadership/state');?>">State Leadership</a></li>
								 <li><a href="<?php echo site_url('Leadership/district');?>">District Leadership</a></li>
								</ul> 
							</li>
							<li><a href="javascript:;">Media<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
								 <li><a href="<?php echo site_url('Media/news');?>">News</a></li>
								 <li><a href="<?php echo site_url('Media');?>">Blog</a></li>
								 <li><a href="<?php echo site_url('Media/press');?>">Press</a></li>
                                <li><a href="<?php echo site_url('Media/event');?>">Events</a></li>
								 <!-- <li><a href="javascript:;">Vedio</a></li>---></ul> 
							</li>
							<li><a href="javascript:;">Morcha<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
								 <li><a href="<?php echo site_url('Morcha');?>">SC Morcha</a></li>
								 <li><a href="<?php echo site_url('Morcha/st_morcha');?>">ST Morcha</a></li>
								 <li><a href="<?php echo site_url('Morcha/obc_morcha');?>">OBC Morcha</a></li>
								 </ul>
							</li>
							<li><a href="<?php echo site_url('Home/election');?>">Election</a></li>
							
							<li><a href="javascript:;">Membership <i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">	
							<li><a href="<?php echo site_url('Home/membership');?>">Membership</a></li>
							<li><a href="<?php echo site_url('Home/donation');?>">Donation</a></li>
							</ul>	
							</li>

							<li><a href="<?php echo site_url('Home/contact');?>">Contact Us</a></li>
						</ul>
						<div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->