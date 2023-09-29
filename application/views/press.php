<!-- Header  END ==== -->
<?php  $this->view('header') ?>
 <!-- Header  END ==== -->
    <!-- Inner Content Box ==== -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(<?php echo base_url();?>assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"><?php echo $pagename;  ?></h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="<?= site_url('Home');?>">Home</a></li>
					<li><?php echo $pagename;  ?></li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
        <div class="content-block">
			<!-- Blog Grid ==== -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="ttr-blog-grid-3 row" id="masonry">

						 <?php
                           $i = 1;
                          if (!empty($blog)) {
                             foreach ($blog as $value) {
                              if(!empty($value->image))
                                {   
                                  $pou_img = base_url('pspuadmin/uploads/post/'.$value->image);
                                }else{
                                  $pou_img = base_url('pspuadmin/uploads/post/2022-11-04.jpg');
                                }
                             ?>
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="<?php echo $pou_img;?>" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i><?php echo base_url('Media/blog_details?id=').$value->id; ?></a></li>
										<!-- <li><a href="#"><i class="fa fa-user"></i>By William</a></li> -->
									</ul>
									<h5 class="post-title"><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><?php echo $value->title;  ?></a></h5>
									<p><?php echo $value->short_description; ?></p>
									<div class="post-extra">
										<a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>#" class="btn-link">READ MORE</a>
										<a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>" class="comments-bx"><i class="fa fa-comments-o"></i><?php echo $value->comments;  ?>Comment</a>
									</div>
								</div>
							</div>
						</div>
					<?php }}  ?>
						
					</div>
					<!-- Pagination ==== -->
					<!-- <div class="pagination-bx rounded-sm gray clearfix">
						<ul class="pagination">
							<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
						</ul>
					</div> -->
					<!-- Pagination END ==== -->
				</div>
			</div>
			<!-- Blog Grid END ==== -->
        </div>
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Page Content Box END ==== -->
	<!-- Footer ==== -->
	 <?php $this->view('footer');  ?> 
	<!-- Footer ==== -->