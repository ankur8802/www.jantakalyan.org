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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/css-animation.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/nivo-slider.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<style>
	label
	{
		margin:0;
		margin-top:10px;
	}
	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}

.dropify-wrapper 
{
  margin-top:20px;
}
.ui.default.dropdown:not(.button)>.text, .ui.dropdown:not(.button)>.default.text
{
	color:gray;
}
.dropify-message p
{
    color:red;
}
</style>

</head>

<body>
	<div class="preloader"></div>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
<h2>Print </h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Print </li>
</ol>
</div>
</div>
</div>



<section class="blog-section bg-grey padding" style="background:#105EA7;padding-top:0;padding-top:50px;">
<div class="container">


<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<div class="print" style="border:1px solid #000;padding-top:10px;">
 <div class="col-md-12 text-center">
  
        <div class="logo">
            <img src="<?= base_url()?>assets/img/logo/logo.png" alt="logo">
            <p><span style="border-bottom:1px solid #000;">1st Floor, APIT Institute Building, Maskanwa Babhnan Road, District Gonda, Uttar Pradesh ,Pin Code - 271305 </span> </p>
        </div>  

 </div>


 <div class="col-md-12 text-center">
      <div class="user">
        <p style="margin:0;"><span> Name - </span><?= $userdata->name;?></p>
        <p><span>Membership registration No - </span><?= $userdata->membership_no?></p>
       </div>
 </div>

 <div class="col-md-12">

          <table class="table table-bordered text-center" width="100%" cellspacing="0" style="background:#fff;border-radius:5px;">
                                        <thead>
                                            <tr>
                                                <th>Scheme Type</th>
                                                <th>Policy Holder Name</th>
                                                <th>Certificate No./ band No./Policy No./ Account No. </th>
                                                <th>Policy Opening Date</th>
                                                <th>Date of Maturity</th>
                                                <th>Maturity Amount</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                         <?php
                                           foreach ($saharadetails as $saharadetails) {
                                         ?>
                                            <tr>
                                                <td><?= $saharadetails->schemetype?></td>
                                                <td><?= $saharadetails->policyholdername?></td>
                                                <td><?= $saharadetails->certificateno?></td>
                                                <td><?= $saharadetails->policyopeningdate?></td>
                                                <td><?= $saharadetails->dateofmaturity?></td>
                                                <td><?= $saharadetails->maturityamount?></td>
                                            </tr>

                                          <?php }?>
                                       
                                        </tbody>
        </table>

 </div>

 </div>

<div class="col-md-12 text-center" style="margin-top:10px;">
     <button class="btn btn-danger print-btn">Print</button>
</div>


</div>
</div>
</section>

<?php include('footer.php')?>

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>


<script src="<?= base_url()?>assets/js/vendor/bootstrap.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/tether.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/imagesloaded.pkgd.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/owl.carousel.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.isotope.v3.0.2.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/smooth-scroll.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/venobox.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.ajaxchimp.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.counterup.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.waypoints.v2.0.3.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.slicknav.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.nivo.slider.pack.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/letteranimation.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/wow.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/contact.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="<?= base_url()?>assets/js/main.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="837697bf9c98e2be189a58f5-|49" defer=""></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>

<script>
    $('.print-btn').click(function()
    {
        $('.print').printThis();
    })
</script>



</body>

</html>