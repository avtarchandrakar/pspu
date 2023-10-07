<!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img src="assets/images/logo-white.png" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="<?php echo site_url('Home/register');?>" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For Joining</h5>
							<p class="text-capitalize m-b20"></p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
									<div class="ajax-message"></div>
									<div class="input-group">
										<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">PSPU</h5>
									<ul>
										<li><a href="<?php echo site_url('Home');?>">Home</a></li>
										<li><a href="<?php echo site_url('Home/about');?>">About</a></li>
										<li><a href="<?php echo site_url('Home/election');?>">Election</a></li>
										<li><a href="<?php echo site_url('Home/membership');?>">Membership</a></li>
                                        <li><a href="<?php echo site_url('Home/contact');?>">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Media</h5>
									<ul>
										<!-- <li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li> -->
										<li><a href="<?php echo site_url('Media');?>">Blog</a></li>
										<li><a href="<?php echo site_url('Media/news');?>">News</a></li>
										<li><a href="<?php echo site_url('Media/news');?>>">Press</a></li>
										<li><a href="<?php echo site_url('Media/event');?>">Event</a></li>
                                       <li><a href="<?php echo site_url('Home/donation');?>">Donation</a></li>

									</ul>
								</div>
							</div>

							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a href="<?php echo site_url('Morcha');?>">SC Morcha</a></li>
										<li><a href="<?php echo site_url('Morcha/st_morcha');?>">ST Morcha</a></li>
								        <li><a href="<?php echo site_url('Morcha/obc_morcha');?>">OBC Morcha</a></li>
								        <li><a href="<?php echo site_url('Leadership');?>">National Leadership</a></li>
								        <li><a href="<?php echo site_url('Leadership/state');?>">State Leadership</a></li>
								        <li><a href="<?php echo site_url('Leadership/district');?>">District Leadership</a></li>
										
									</ul>
								</div>
							</div>
						</div>
                    </div>
					<!-- <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4" style="display:none;">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
								<li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
							</ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                </div>
            </div>
        </div>
    </footer>
     <button class="back-to-top fa fa-chevron-up" ></button>
</div>
    <!-- Footer END ==== -->
    <!---------------------script------------------------------->
          <?php $this->view('script');  ?>     
    <!---------------------/script------------------------------->