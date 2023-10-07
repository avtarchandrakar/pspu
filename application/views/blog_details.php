<!-- Header  END ==== -->
<?php  $this->view('header') ?>
 <!-- Header  END ==== -->
       <!-- Content -->
       <div class="page-content bg-white">
           <!-- inner page banner -->
           <div class="page-banner ovbl-dark" style="">
               <div class="container">
                   <div class="page-banner-entry">
                       <h1 class="text-white"> <?php echo $post_details[0]->m_category_title;  ?> | <?php echo $post_details[0]->title;  ?></h1>
   				</div>
               </div>
           </div>
   		<!-- Breadcrumb row -->
   		<div class="breadcrumb-row">
   			<div class="container">
   				<ul class="list-inline">
   					<li><a href="<?php echo base_url('Home');  ?>">Home</a></li>
   					<li><?php echo $post_details[0]->m_category_title;  ?></li>
   				</ul>
   			</div>
   		</div>
   		<!-- Breadcrumb row END -->
           <div class="content-block">
   			<div class="section-area section-sp1">
   				<div class="container">
   					<div class="row">
   						<!-- Left part start -->

                         <?php
                      
                                 if (!empty($post_details)) {
                                     foreach ($post_details as $value) {
                                      if(!empty($value->image))
                                        {   
                                          $pou_img = base_url('pspuadmin/uploads/post/'.$value->image);
                                        }else{
                                          $pou_img = base_url('pspuadmin/uploads/post/2022-11-04.jpg');
                                        }
                                     
                             
                               ?>
   						<div class="col-lg-8 col-xl-8">
   							<!-- blog start -->
   							<div class="recent-news blog-lg">
   								<div class="action-box blog-lg">
   									<img src="<?php echo $pou_img;?>" alt="">
   								</div>
   								<div class="info-bx">
   									<ul class="media-post">
   										<li><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><i class="fa fa-calendar"></i><?php echo date("M d Y", strtotime($value->created_date));  ?></a></li>
   										<li><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><i class="fa fa-comments-o"></i> <?php echo $value->comments;  ?> Comment</a></li>
   									</ul>
   									<h5 class="post-title"><a href="<?php echo base_url('Media/blog_details?id=').$value->id; ?>"><?php echo $value->title;  ?></a></h5>
   									<p><?php echo $value->description;  ?></p>
   									
   									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
   									

   									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
   										<h6>SHARE </h6>
   										<ul class="list-inline contact-social-bx">
   											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
   											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
   											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
   											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-whatsapp"></i></a></li>
   										</ul>
   									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
   								</div>
   							</div>
   							
   							<!-- blog END -->
   						</div>

                    <?php }} ?>


   						<!-- Left part END -->
   						<!-- Side bar start -->
   						<div class="col-lg-4 col-xl-4">
   							<aside  class="side-bar sticky-top">
   								
   								
   								<div class="widget widget-newslatter">
   									<h6 class="widget-title">Newsletter</h6>
   									<div class="news-box">
   										<p>Enter your e-mail and subscribe to our newsletter.</p>
   										<form class="subscription-form" action="#" method="post">
   											<div class="ajax-message"></div>
   											<div class="input-group">
   												<input name="email_newsletter" required="required" type="email" class="form-control" placeholder="Your Email Address"/>
   												<button name="button" value="Submit" type="submit" class="btn black radius-no">
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
       <!-- Content END-->
	<!-- Footer ==== -->
	 <?php $this->view('footer');  ?> 
	<!-- Footer ==== -->