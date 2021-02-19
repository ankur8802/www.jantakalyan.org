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

<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

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

<style>
	.contact-info ul li
	{
		display:block;
	}
</style>



<div class="header-height"></div>
<div class="pager-header">
<div class="container">
<div class="page-content">
<h2>Contact With Us</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Contact</li>
</ol>
</div>
</div>
</div>
<section class="contact-section ">
<div id="google_map"></div>
<div class="container">
<div class="row contact-wrap">
<div class="col-md-12 xs-padding text-center">
<div class="contact-info">
<h3>Get in touch</h3>
<p>Mr. Shyambabu Gupta has been nurturing this Foundation like a baby, discharging his moral and social responsibilities as Patron in the true spirit of the words of Mahatma Gandhi.</p>
<ul>
<li><i class="ti-location-pin"></i> 1st Floor, APIT Institute Building, Maskanwa Babhnan Road, District Gonda, Uttar Pradesh - 271305</li>
<li><i class="ti-mobile"></i>+91 9555677250, 9792470532</li>
<li><i class="ti-email"></i> <a href="mailto:info@jantakalyan.org">info@jantakalyan.org</a></li>
</ul>
</div>
</div>
<!-- <div class="col-md-6 xs-padding">
<div class="contact-form">
<h3>Drop us a line</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<form action="#" method="post" id="ajax_form" class="form-horizontal">
<div class="form-group colum-row row">
<div class="col-sm-6">
<input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
</div>
<div class="col-sm-6">
<input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<button id="submit" class="default-btn" type="submit">Send Message</button>
</div>
</div>
<div id="form-messages" class="alert" role="alert"></div>
</form>
</div>
</div> -->
</div>
</div>
</section>

<?php include('footer.php');?>

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/bootstrap.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/tether.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/imagesloaded.pkgd.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/owl.carousel.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.isotope.v3.0.2.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/smooth-scroll.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/venobox.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.ajaxchimp.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.counterup.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.waypoints.v2.0.3.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.slicknav.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.nivo.slider.pack.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/letteranimation.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/wow.min.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/contact.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGm_weV-pxqGWuW567g78KhUd7n0p97RY" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="<?= base_url()?>assets/js/main.js" type="dbfd5c1ac577c2fb04066a34-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="dbfd5c1ac577c2fb04066a34-|49" defer=""></script></body>

</html>