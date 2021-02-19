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

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/css/formValidation.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/nivo-slider.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<style>
	label
	{
		margin:0;
		margin-top:10px;
	}
     .blog-section .col-md-6
     {
     	margin-top:20px;
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
<!-- <div class="pager-header">
<div class="container">
<div class="page-content">
<h2>Document Upload</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Document Upload</li>
</ol>
</div>
</div>
</div> -->

<section class="blog-section bg-grey padding" style="background:#105EA7;">
<div class="container">

<form action="<?= base_url('document-uploading')?>" method="post" enctype="multipart/form-data">
<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<div class="col-md-12 text-center">
	  <h2>Upload Your Documents</h2>
	  <p style="color:red;">Document Upload (All document size should be less than > 500kb )</p>
	 <br>
</div>
 
<div class="col-md-6">
	<input type="file" name="photo" class="dropify" required>
</div> 

<div class="col-md-6">
	<input type="file" name="aadhar" class="aadhar" required>
</div> 

<div class="col-md-6">
	<input type="file" name="bank" class="bank" required>
</div>

<div class="col-md-6">
	<input type="file" name="signature" class="signature" required>
</div> 

<div class="col-md-12"  style="margin-top:10px;" >
	<a href="<?= base_url()?>assets/pdf/स्वाप्रमाणित%20%20घोषणा.pdf" download>
	<div class="declaration-div" style="background:linear-gradient(110.24685718007152deg, rgba(224, 247, 135,1) 5.533854166666667%,rgba(78, 227, 250,1) 96.67968749999999%);padding:10px;color:#000;">
		<p style="margin:0;"> <i class="fas fa-download"></i> स्वप्रमाणित घोषणा फ़ार्म डाउनलोड करे | </p>
	</div>
	</a>
</div>

<div class="col-md-6">
	<input type="file" name="declaration" class="declaration" required>
</div> 





<div class="col-md-12 text-center">
	<br>
	  <button class="btn default-btn" style="min-width:150px;">Submit</button> 
	 <a class="btn default-btn" href="<?= base_url('Payment')?>" style="min-width:150px;"> Next </a>
	 <br>
</div>



</div>
</form>


<?php  if($document) { ?>

<div class="row" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">
	<div class="col-md-12">
	 <center> <h2>My Uploaded Documents</h2> </center>
	 <br>
    </div>

    <div class="col-md-3">
	  <div class="profile-img">
	  	   <a href="<?= base_url()?>uploads/user/profileimage/<?= $document->photo?>" target="_blank" style="cursor:pointer;">
	  	   	<button class="btn-block default-btn">View Photo</button>
	  	   </a>
	  </div>

	 </div> 

	 <div class="col-md-3">

	   <div class="aadhar-img">

	  	   <a href="<?= base_url()?>uploads/user/aadhar/<?= $document->aadhar?>"  target="_blank" style="cursor:pointer;">
	  	   	<button class="btn-block default-btn">View Aadhar Detail</button>
	  	   </a>
	  </div>

	  </div>

	  <div class="col-md-3">

	   <div class="bank-img">

	  	    <a href="<?= base_url()?>uploads/user/bank/<?= $document->bank?>"  target="_blank" style="cursor:pointer;">
	  	   	<button class="btn-block default-btn">View Bank Detail</button>
	  	   </a>

	  </div>

	  </div>

	  <div class="col-md-3">

	   <div class="stugature-img">

	  	   <a href="<?= base_url()?>uploads/user/signature/<?= $document->signature?>"  target="_blank" style="cursor:pointer;">
	  	   	<button class="btn-block default-btn">View Signature</button>
	  	   </a>
	  	   
	  </div>

	  </div>


	  <div class="col-md-3" style="margin-top:10px;">

	   <div class="stugature-img">

	  	   <a href="<?= base_url()?>uploads/user/declaration/<?= $document->declaration?>"  target="_blank" style="cursor:pointer;">
	  	   	<button class="btn-block default-btn">View Declaration</button>
	  	   </a>
	  	   
	  </div>

	  </div>

    

</div>

<?php } ?>

</div>
</section>


<?php include('footer.php')?>

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                        default: 'Upload Profile Photo',
                    }
		});

		$('.aadhar').dropify({
			messages: {
                        default: 'Upload Aadhar Card',
                    }
		});

		$('.bank').dropify({
			messages: {
                        default: 'Upload Bank Passbook',
                    }
		});
        
        $('.signature').dropify({
			messages: {
                        default: 'Upload Signature',
                    }
		});

		$('.declaration').dropify({
			messages: {
                        default: 'स्वाप्रमाणित  घोषणा',
                    }
		});
		

	})
</script>



</body>

</html>