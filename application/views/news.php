<!-- Header  END ==== -->
<?php  $this->view('header') ?>
 <!-- Header  END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"><?php echo $pagename;  ?></h1>
				</div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="<?php echo base_url('Home');?>">Home</a></li>
					<li><?php echo $pagename;  ?></li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<!-- left part start -->
						<div class="col-lg-8 col-xl-8 col-md-7">
							<!-- blog grid -->
							<div id="masonry" class="ttr-blog-grid-3 row">

                           <?php
                           $i = 1;
                          if (!empty($all_news)) {
                             foreach ($all_news as $value) {
                              if(!empty($value->image))
                                {   
                                  $pou_img = base_url('pspuadmin/uploads/post/'.$value->image);
                                }else{
                                  $pou_img = base_url('pspuadmin/uploads/post/2022-11-04.jpg');
                                }
                             ?>


								<a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>">
									<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
										<div class="recent-news">
											<div class="action-box">
												<img src="<?php echo $pou_img;?>" alt="">
											</div>
											<div class="info-bx">
												<ul class="media-post">
													<li><a href="#"><i class="fa fa-calendar"></i></a><?php echo date('d-m-Y',strtotime($value->created_date));  ?></li>
													<!-- <li><a href="#"><i class="fa fa-user"></i>By William</a></li> -->
												</ul>
												<h5 class="post-title"><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><?php echo $value->title;  ?></a></h5>
												<p><?php echo $value->short_description; ?></p>
												<div class="post-extra">
													<a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>#" class="btn-link">READ MORE</a>
													<a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>" class="comments-bx"><i class="fa fa-comments-o"></i><?php echo $value->comments;  ?> Comment</a>
												</div>
											</div>
										</div>
									</div>
								</a>

							<?php }} ?>

								
							</div>
							<!-- blog grid END -->
							<!-- Pagination -->
							<!-- <div class="pagination-bx rounded-sm gray clearfix">
								<ul class="pagination">
									<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
								</ul>
							</div> -->
							<!-- Pagination END -->
						</div>
						<!-- left part END -->
						<!-- Side bar start -->
						<div class="col-lg-4 col-xl-4 col-md-5 sticky-top">
							<aside class="side-bar sticky-top">
								<div class="widget">
									<h6 class="widget-title">Search</h6>
									<div class="search-bx style-1">
										<form role="search" method="post">
											<div class="input-group">
												<input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
												<span class="input-group-btn">
													<button type="submit" class="fa fa-search text-primary"></button>
												</span> 
											</div>
										</form>
									</div>
								</div>
								<div class="widget recent-posts-entry">
									<h6 class="widget-title">Recent Posts</h6>
									<div class="widget-post-bx">
                                         <?php
				                           
				                          if (!empty($recent_news)) {
				                             foreach ($recent_news as $value) {
				                              if(!empty($value->image))
				                                {   
				                                  $pou_img = base_url('pspuadmin/uploads/post/'.$value->image);
				                                }else{
				                                  $pou_img = base_url('pspuadmin/uploads/post/2022-11-04.jpg');
				                                }
				                             ?>

										<div class="widget-post clearfix">
											<div class="ttr-post-media"> <img src="<?php echo $pou_img;?>" width="200" height="143" alt=""> </div>
											<div class="ttr-post-info">
												<div class="ttr-post-header">
													<h6 class="post-title"><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><?php echo $value->title;  ?></a></h6>
												</div>
												<ul class="media-post">
													<li><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><i class="fa fa-calendar"></i><?php echo date("M d Y", strtotime($value->created_date));  ?></a></li>
													<li><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><i class="fa fa-comments-o"></i><?php echo $value->comments;  ?> Comment</a></li>
												</ul>
											</div>
										</div>
									<?php }} ?>
										
									</div>
								</div>
								<div class="widget widget-newslatter">
									<h6 class="widget-title">Newsletter</h6>
									<div class="news-box">
										<p>Enter your e-mail and subscribe to our newsletter.</p>
										<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
											<div class="ajax-message"></div>
											<div class="input-group">
												<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address"/>
												<button name="submit" value="Submit" type="submit" class="btn black radius-no">
													<i class="fa fa-paper-plane-o"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
								
								
							</aside>
						</div>
						<!-- Side bar END -->
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Left & right section END -->
    <!-- Content END-->
	<!-- Footer ==== -->
	 <?php $this->view('footer');  ?> 
	<!-- Footer ==== -->