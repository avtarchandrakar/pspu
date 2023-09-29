<!-- Header  END ==== -->
<?php  $this->view('header') ?>
 <!-- Header  END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="">
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
					<li><a href="<?php echo site_url('Home');?>">Home</a></li>
					<li><?php echo $pagename;  ?></li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="feature-filters clearfix center m-b40">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#"><span>All</span></a> 
							</li>
							<!-- <li data-filter="happening" class="btn">
								<input type="radio">
								<a href="#"><span>Happening</span></a> 
							</li>
							<li data-filter="upcoming" class="btn">
								<input type="radio">
								<a href="#"><span>Upcoming</span></a> 
							</li>
							<li data-filter="expired" class="btn">
								<input type="radio">
								<a href="#"><span>Expired</span></a> 
							</li> -->
						</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">
                          <?php
                           $i = 1;
                         if (!empty($nationallead)) {
                             foreach ($nationallead as $value) {
                              if(!empty($value->image))
                                {   
                                  $pou_img = base_url('pspuadmin/uploads/post/'.$value->image);
                                }else{
                                  $pou_img = base_url('pspuadmin/uploads/post/2022-11-04.jpg');
                                }
                             
                     
                       ?>
							<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="<?php echo $pou_img;?>" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<div class="event-date"><?php echo date("d", strtotime($value->created_date));  ?></div>
												<div class="event-month"><?php echo date("F", strtotime($value->created_date));  ?></div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><?php echo $value->title;  ?></a></h4>
											<ul class="media-post">
												<li><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><i class="fa fa-clock-o"></i> <?php echo date("h:i A", strtotime($value->created_time));  ?></a></li>
												<!-- <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li> -->
											</ul>
											<p><?php echo $value->short_description; ?></p>
										</div>
									</div>
								</div>
							</li>
						<?php }}  ?>
							
						</ul>
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
	 <?php $this->view('footer');  ?> 
	<!-- Footer ==== -->