<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="PSPU" />
	
	<!-- OG -->
	<meta property="og:title" content="PSPU" />
	<meta property="og:description" content="PSPU : <?php echo $pagename;  ?>" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<!-- <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.png" /> -->
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>PSPU : <?php echo $pagename;  ?></title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head"  style="background-image:url('<?php echo base_url();?>assets/images/background/bg2.jpg');">
			<a href="<?php echo base_url('Home');?>">
				<img src="<?php echo base_url();?>assets/images/logo-white-2.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h4 class="title-head">Sign In <span>Now</span></h4>
					<p>Login Your Account <a href="<?php echo base_url('Home/login');?>">Click here</a></p>
				</div>
				<div class="heading-bx left">
					<h4 class="title-head">OTP Verify & Fill General Details </h4>
					<p>OTP send into Your WhastApp</a></p>
				</div>	
				<form class="contact-bx" method= "post" id="frm-add-data">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Enter OTP</label>
									<input name="ins_id" type="hidden" value="<?=$ins_id;?>">
									<input name="otp" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Are You an Indian Citizen ?</label>
									<input name="is_indian_citizen" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Are You Residing in India ?</label>
									<input name="is_indian_residence" type="text" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Gender</label>
									<input name="gender" type="text" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Date Of Birth</label>
									<label>Date Of Birth</label>
									<input name="dob" type="date" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" id="btn-add-data" class="btn button-md">Proceed</button>
						</div>
						<div class="col-lg-12" style="display:none;">
							<h6>Sign Up with Social media</h6>
							<div class="d-flex">
								<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Account</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url();?><?php echo base_url();?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?><?php echo base_url();?>assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="<?php echo base_url();?>assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo base_url();?>assets/vendors/counter/waypoints-min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/counter/counterup.min.js"></script>
<script src="<?php echo base_url();?><?php echo base_url();?>assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="<?php echo base_url();?>assets/vendors/masonry/masonry.js"></script>
<script src="<?php echo base_url();?>assets/vendors/masonry/filter.js"></script>
<script src="<?php echo base_url();?>assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo base_url();?>assets/js/functions.js"></script>
<script src="<?php echo base_url();?>assets/js/contact.js"></script>
<script src='<?php echo base_url();?>assets/vendors/switcher/switcher.js'></script>
<script src="" data-backup="<?php echo base_url('assets/plugins/sweet-alerts/js/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/sweet-alerts/js/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/sweet-alerts/js/custom-sweetalerts.js')?>"></script>
<script type="text/javascript">
$("#frm-add-data").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-add-data"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Action/updateDetails'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Home/register'); ?>"; 
        },100000000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  }); 
});
</script>
</body>

</html>
