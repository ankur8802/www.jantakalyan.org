<!doctype html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">

<link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/themify-icons.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/elegant-font-icons.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/elegant-line-icons.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/venobox/venobox.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/owl.carousel.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/slicknav.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/css-animation.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/nivo-slider.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">
<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="3a94c328544c213088d37164-text/javascript"></script>
<style type="text/css">

@media only screen and (max-width:768px)
{ 
	.text-small-center
	{
		text-align:center!important;
		margin-top:10px;
	}
}

</style>
</head>
<body>

<div class="preloader"></div>

<?php
if($this->session->userdata('ngouser2020login'))
{
  include('usernav.php');
}
else
{
 include('navbar.php');
}
?>


<div class="header-height"></div>
<!-- <div class="pager-header">
<div class="container">
<div class="page-content">
<h2>Forms</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Forms</li>
</ol>
</div>
</div>
</div> -->


<section class="about-section bg-grey bd-bottom padding" style="background: #105EA7;">
<div class="container">

<div class="row" style="background:linear-gradient(111.95647678511193deg, rgba(6, 227, 250,1) 5.533854166666667%,rgba(80, 119, 144,1) 96.67968749999999%);padding:20px;">
  
  <div class="col-md-8">
  	<h2 style="margin:0;padding-top:12px;color:#000;">Saharayn Universal Multipurpose Society Limited</h2>
  </div>

  <div class="col-md-4 text-right text-small-center">
  	<?php
       if ($userdata->status==5) {
  	?>
  	<a href="#"><button class="default-btn">Apply Now</button> </a>
  	<?php  } else{ ?>
     <button class="default-btn docalt">Apply Now</button> 
  <?php } ?>
  </div>

</div>

<br>

<div class="row" style="background:linear-gradient(111.95647678511193deg, rgba(186, 213, 241,1) 5.533854166666667%,rgba(42, 39, 107,1) 96.67968749999999%);padding:20px;">
  
  <div class="col-md-8">
  	<h2 style="margin:0;padding-top:12px;color:#000;">Sahara Credit Co-operative Society Limited</h2>
  </div>

  <div class="col-md-4 text-right text-small-center">
  	<?php
       if ($userdata->status==5) {
  	?>
  	<a href="#"><button class="default-btn">Apply Now</button> </a>
  	<?php  } else{ ?>
     <button class="default-btn docalt">Apply Now</button> 
  <?php } ?>
  </div>

</div>

<br>

<div class="row" style="background:linear-gradient(111.95647678511193deg, rgba(91, 50, 97,1) 5.533854166666667%,rgba(51, 37, 73,1) 96.67968749999999%);padding:20px;">
  
  <div class="col-md-8">
  	<h2 style="margin:0;padding-top:12px;" class="text-white">Humara India Credit Co-operative Society Limited</h2>
  </div>

  <div class="col-md-4 text-right text-small-center">
  	<?php
       if ($userdata->status==5) {
  	?>
  	<a href="#"><button class="default-btn">Apply Now</button> </a>
  	<?php  } else{ ?>
     <button class="default-btn docalt">Apply Now</button> 
  <?php } ?>
  </div>

</div>

<br>

<div class="row" style="background:linear-gradient(111.95647678511193deg, rgba(136, 156, 118,1) 5.533854166666667%,rgba(6, 94, 96,1) 96.67968749999999%);padding:20px;">
  
  <div class="col-md-8">
  	<h2 style="margin:0;padding-top:12px;" class="text-white">Sahara Q Shop Central</h2>
  </div>

  <div class="col-md-4 text-right text-small-center">
  	<?php
       if ($userdata->status==5) {
  	?>
  	<a href="#"><button class="default-btn">Apply Now</button> </a>
  	<?php  } else{ ?>
     <button class="default-btn docalt">Apply Now</button> 
  <?php } ?>
  </div>

</div>



</div>
</section>



<?php include('footer.php'); ?>





<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/bootstrap.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/tether.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/imagesloaded.pkgd.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/owl.carousel.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.isotope.v3.0.2.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/smooth-scroll.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/venobox.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.ajaxchimp.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.counterup.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.waypoints.v2.0.3.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.slicknav.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.nivo.slider.pack.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/letteranimation.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/wow.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/contact.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/main.js" type="3a94c328544c213088d37164-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="3a94c328544c213088d37164-|49" defer=""></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
      $('.docalt').click(function()
      {
      	swal("", "Upload Your Documents", "error");
      	
      	 setTimeout(function () {
         window.location.href = "http://www.jantakalyan.org/document-upload";
       }, 2000);

      })

    });
</script>
</body>

</html>