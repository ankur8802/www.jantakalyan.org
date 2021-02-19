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

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
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
<h2>Bank Detail</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Bank Detail</li>
</ol>
</div>
</div>
</div>

<section class="blog-section bg-grey padding" style="background:#105EA7;padding-bottom: 5px">
<div class="container">


<form action="<?= base_url('Ngologin/bankdetailinst')?>" method="post" enctype="multipart/form-data">
<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<div class="col-md-12">
	 <center> <h2>Your Bank Details</h2> </center>
     <center><p style="color:red;font-weight:bold;">NOTE : ACCOURDING TO SAHARA RECORD MENTION BLEW DETAILS</p></center>
	 <br>
</div>
 


<div class="col-md-6">
	<label>Account No</label>
	<input type="number" class="form-control accountnoalt" name="accountno" min="0" placeholder="Enter Account No.." required>
</div> 

<div class="col-md-6">
    <label>Bank Name</label>
    <input type="text" class="form-control banknamealt" name="bankname" placeholder="Enter Bank Name.." required>
</div> 

<div class="col-md-6">
    <label>Branch name</label>
    <input type="text" class="form-control branchnamealt" name="branchname" placeholder="Enter Branch name.." required>
</div> 

<div class="col-md-6">
    <label>IFSC CODE</label>
    <input type="text" class="form-control ifscalt" name="ifsc" placeholder="Enter IFSC CODE" required>
</div> 




<div class="col-md-12 text-center">
	<br>
  <a data-toggle="modal" data-target="#exampleModal"><button class="btn default-btn"  style="min-width:150px;">Preview</button></a>
	  <button type="submit" class="btn default-btn"  style="min-width:150px;">Submit</button>
    <a class="btn default-btn" href="<?= base_url('document-upload')?>" style="min-width:150px;"> Next </a>
	 <br>
</div>



</div>
</form>
</div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#0F5DA7;">
        <h2 class="modal-title" id="exampleModalLabel" style="color:#fff;">Your Bank Details</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
           <div class="col-md-12 text-center">
                <p style="color:red;">Account No <span class="accountno" style="color:#000;"></span></p>
                <p style="color:red;">Bank Name <span class="bankname" style="color:#000;"></span></p>
                <p style="color:red;"> Branch name <span class="branchname" style="color:#000;"></span></p>
                <p style="color:red;"> IFSC CODE <span class="ifsccode" style="color:#000;"></span></p>
           </div>
         </div>
      </div>
      <div class="modal-footer" style="background:#0F5DA7;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal end -->

<section class="blog-section bg-grey padding" style="background:#105EA7;padding-top: 0;">
<div class="container">


<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<div class="col-md-12">
     <center> <h2>Your Bank Details</h2> </center>
</div>
 
 <table style="width:100%;background:#fff;text-align:center;border-radius:8px;">
  <tr>
    <th>Account No.</th>
    <th>Bank Name</th>
    <th>Branch Name</th>
    <th>IFSC Code</th>
  </tr>
  <tr>
    <?php 
        if ($bankdetail) {
    ?>
    <td><?= $bankdetail->accountno?></td>
    <td><?= $bankdetail->bankname?></td>
    <td><?= $bankdetail->branchname?></td>
    <td><?= $bankdetail->ifsc?></td>
    <?php
}
?>
  </tr>

</table>

</div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script type="text/javascript">
  $('.accountnoalt').keyup(function()
  {
   var account=$(this).val();
   $('.accountno').text(account);
  });

   $('.banknamealt').keyup(function()
  {
   var banknamealt=$(this).val();
   $('.bankname').text(banknamealt);
  });

   $('.branchnamealt').keyup(function()
  {
   var branchnamealt=$(this).val();
   $('.branchname').text(branchnamealt);
  });

   $('.ifscalt').keyup(function()
  {
   var ifscalt=$(this).val();
   $('.ifsccode').text(ifscalt);
  });
</script>







</body>

</html>