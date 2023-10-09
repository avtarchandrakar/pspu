<?php
$contribution=0;
$total=0;
$mobileno='';
$id=0;
$email='';
$date_time=date('Y-m-d H:i:s');
  if (!empty($details)) {
    foreach ($details as $key => $object) {
        // echo '<option value="'.$object->state.'">'.$object->state.'</option>';
        $contribution=$object->contribution;
        $total=$object->contribution;
        $mobileno=$object->mobileno;
        $id=$object->id;
        $email=$object->email;
    }
}
// echo $mobileno;die();
?>
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
    <style type="text/css">
        select.bs-select-hidden, select.selectpicker {
             display: inline !important; 
        }
        .btn.dropdown-toggle.btn-default{
            display: none !important;
        }
        .btn-group.bootstrap-select.input-group-btn.form-control{
            display: none !important;
        }
    </style>
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
                    <h4 class="title-head">Payment </h4>
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- External JavaScripts -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="<?php echo base_url();?>assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo base_url();?>assets/vendors/counter/waypoints-min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/counter/counterup.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="<?php echo base_url();?>assets/vendors/masonry/masonry.js"></script>
<script src="<?php echo base_url();?>assets/vendors/masonry/filter.js"></script>
<script src="<?php echo base_url();?>assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo base_url();?>assets/js/functions.js"></script>
<script src="<?php echo base_url();?>assets/js/contact.js"></script>
<script src='<?php echo base_url();?>assets/vendors/switcher/switcher.js'></script>
<script src="" data-backup="<?php echo base_url('assets/plugins/sweet-alerts/js/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/sweet-alerts/js/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/sweet-alerts/js/custom-sweetalerts.js')?>"></script>
       
<script src="<?php echo base_url();?>assets/checkout.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    // alert('Hii');
    var date_time='<?php echo $date_time; ?>';
    var contribution = <?php echo $total; ?>;
    var mobileno = <?php  echo $mobileno; ?>;
    var email = "<?php  echo $email; ?>";

    var id = <?php  echo $id; ?>;
        jQuery.ajax({
                type:'post',
                url: '<?php echo site_url('Action/payment_process'); ?>',
                data: "&contribution="+contribution+"&mobileno="+mobileno+"&date_time="+date_time+"&id="+id,
                success:function(result){
                        console.log(result);
                        var options = {
                            "key": "rzp_test_8F4fasaOCTMnoF",
                            "amount": contribution*100,
                            "currency": "INR",
                            "name": "PSPU",
                            "description": "PSPU Contribution",
                            "image": "https://pspu.in/assets/images/logo.png",
                            "handler": function (response){
                                jQuery.ajax({
                                    type:'post',
                                    url: '<?php echo site_url('Action/payment_process_response'); ?>',
                                    data: "payment_id="+response.razorpay_payment_id+"&id="+id,
                                    success:function(result){
                                            jQuery.ajax({
                                                    type:'post',
                                                    url: 'sendtransaction.php',
                                                    data: {
                                                        mobileno:mobileno
                                                    },
                                                    success:function(result){
                                                        // console.log(result);
                                                    }
                                            });
                                            setTimeout(function(){
                                                swal("Transaction Successfuly.", {icon: "success", timer: 2000, });
                                                window.location = "<?php echo site_url('Home/dashboard')?>";
                                            },2000);
                                            // alert("Transaction Successfuly.");
                                            // alert("Your Order is Processing..");
                                            
                                    }
                                });
                            },
                            "prefill": {
                                "email": "<?=$email?>",
                                "contact": <?=$mobileno?>,

                            },
                            "notes": {
                                "address": " मढ़रिया काम्पलेक्स ,महाराजा चौक,मुक्त नगर, जिला- दुर्ग (छत्तीसगढ़ ) पिन - 491001 सम्पर्क मोबाइल - 9425234990,9303650593"
                            },
                            "theme": {
                                "color": "#3399cc"
                            }
                        };
                        var rzp1 = new Razorpay(options);
                        rzp1.on('payment.failed', function (response){
                            jQuery.ajax({
                                    type:'post',
                                    url: '<?php echo site_url('Action/sendtransaction'); ?>',
                                    data: {
                                        mobileno:mobileno
                                    },
                                    success:function(result){
                                        console.log(result);
                                    }
                            });
                                    setTimeout(function(){
                                        swal("Transaction Failed Please.", {icon: "success", timer: 2000, });
                                    },2000);
                                    setTimeout(function(){
                                        swal("Try To Payment Again...", {icon: "success", timer: 2000, });
                                        window.location = "<?php echo site_url('Home/dashboard')?>";
                                    },2000);
                                    
                        });
                          rzp1.open();            }
            });
                $("#modal-close").click(function(){
                setTimeout(function(){
                    swal("Transaction Failed Please.", {icon: "success", timer: 2000, });
                },2000);
                setTimeout(function(){
                    swal("Try To Payment Again...", {icon: "success", timer: 2000, });
                    window.location = "<?php echo site_url('Home/payment').'/'; ?>"+id;
                },2000);

            });
});
</script>
</body>

</html>
