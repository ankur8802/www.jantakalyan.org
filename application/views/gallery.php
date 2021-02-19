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
<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

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
<div class="pager-header">
<div class="container">
<div class="page-content">
<h2>Image Gallery</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Gallery</li>
</ol>
</div>
</div>
</div>

<section class="gallery-section bg-grey bd-bottom padding">
<div class="container">

<div class="gallery-items row">

<?php
foreach ($gallery as $gallery) {
?>
<div class="col-lg-4 col-sm-6 single-item">
<div class="gallery-wrap">
<img src="<?= base_url()?>uploads/gallery/<?= $gallery->image?>" alt="gallery">
<div class="hover">
<a class="img-popup" data-gall="galleryimg" href="<?= base_url()?>uploads/gallery/<?= $gallery->image?>"><i class="ti-image"></i></a>
</div>
</div>
</div>
<?php
}
?>

</div>
</div>
</section>

<?php include('footer.php')?>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/bootstrap.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/tether.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/imagesloaded.pkgd.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/owl.carousel.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.isotope.v3.0.2.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/smooth-scroll.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/venobox.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.ajaxchimp.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.counterup.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.waypoints.v2.0.3.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.slicknav.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.nivo.slider.pack.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/letteranimation.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/wow.min.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/contact.js" type="4a7665e684d3648c81955898-text/javascript"></script>

<script src="<?= base_url()?>assets/js/main.js" type="4a7665e684d3648c81955898-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4a7665e684d3648c81955898-|49" defer=""></script>
</body>

</html>