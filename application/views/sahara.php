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
<h2>Sahara Detail</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Sahara Detail</li>
</ol>
</div>
</div>
</div>

<section class="blog-section bg-grey padding" style="background:#105EA7;">
<div class="container">


<form action="<?= base_url('Ngologin/saharadetailinst')?>" method="post" enctype="multipart/form-data">
<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<div class="col-md-12">
	 <center> <h2>Sahara Detail</h2> </center>
	 <br>
</div>
 


<div class="col-md-6">
	<label>Scheme Type Name</label>
	<select class="form-control scheme_type_name_select" name="schemetype" required>
		<option value="">Choose Scheme Type Name</option>
        <option>Saharayn Universal Multipurpose Society Limited</option>
		<option>Sahara Credit Co-operative Society Limited</option>
		<option>Humara India Credit Co-operative Society Limited</option>
		<option>Sahara Q Shop Central</option>
        <option>Other</option>
	</select>
    <br>
    <input type="text" class="form-control scheme_type_name_input" placeholder="Enter Scheme Type Name" style="display:none;">
</div> 

<div class="col-md-6">
	<label>Account Holder's Name</label>
	<input type="text" class="form-control" name="policyholdername" value="<?= $userdata->name?>" readonly style="cursor:not-allowed;">
</div> 

<div class="col-md-6">
    <label>Certificate No./ band No./Policy No./ Account No. </label>
    <input type="text" class="form-control" name="certificateno" placeholder="Enter Certificate No./ band No./Policy No./ Account No. " required>
</div> 

<div class="col-md-6">
	<label>Policy Opening date/ Date of Issue</label>
	<input type="text" class="form-control" id="dob" name="policyopeningdate" placeholder="Select Policy Holder's Name" required readonly>
</div> 

<div class="col-md-6">
	<label>Date of Maturity</label>
	<input type="text" class="form-control" id="dob2" name="dateofmaturity" placeholder="Select Date of Maturity" required readonly>
</div> 

<div class="col-md-6">
	<label>Maturity Amount</label>
	<input type="number" class="form-control" name="maturityamount" min="0" placeholder="Enter Maturity Amount" required>
</div> 

<div class="col-md-6">
	<label>Maturity Amount (in word)</label>
	<input type="text" class="form-control" name="maturityamountword" placeholder="Enter Maturity Amount (in word)" required>
</div> 



<div class="col-md-12">
	<input type="file" name="policyfile" class="dropify" required>
</div> 



<div class="col-md-12 text-center">
	<br>
     <button class="btn default-btn" style="min-width:200px;">Add</button>
     <a class="btn default-btn" href="<?= base_url('bank-detail')?>" style="min-width:200px;"> Next </a>
	 <br>
</div>



</div>
</form>
</div>
</section>

<section class="blog-section bg-grey padding" style="background:#105EA7;padding-top:0;">
<div class="container">


<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

 <div class="col-md-12">
 	   
 	      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" style="background:#fff;border-radius:5px;">
                                        <thead>
                                            <tr>
                                            	<th>S No.</th>
                                                <th>Scheme Type</th>
                                                <th>Policy Holder Name</th>
                                                <th>Certificate No./ band No./Policy No./ Account No. </th>
                                                <th>Policy Opening Date</th>
                                                <th>Date of Maturity</th>
                                                <th>Maturity Amount</th>
                                                <th>Maturity Amount (in word)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            	<th>S No.</th>
                                                <th>Scheme Type</th>
                                                <th>Policy Holder Name</th>
                                                <th>Certificate No./ band No./Policy No./ Account No. </th>
                                                <th>Policy Opening Date</th>
                                                <th>Date of Maturity</th>
                                                <th>Maturity Amount</th>
                                                <th>Maturity Amount (in word)</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php
                                           $i=1;
                                           foreach ($saharadetails as $saharadetails) {
                                         ?>
                                            <tr>
                                            	<td><?= $i;?></td>
                                            	<td><?= $saharadetails->schemetype?></td>
                                            	<td><?= $saharadetails->policyholdername?></td>
                                                <td><?= $saharadetails->certificateno?></td>
                                            	<td><?= $saharadetails->policyopeningdate?></td>
                                            	<td><?= $saharadetails->dateofmaturity?></td>
                                            	<td><?= $saharadetails->maturityamount?></td>
                                            	<td><?= $saharadetails->maturityamountword?></td>
                                            	<td><a href="<?= base_url("Ngologin/deletesaharadetail/$saharadetails->id")?>">   <i class="fas fa-trash-alt"></i>  </a></td>
                                            </tr>

                                          <?php $i++; }?>
                                       
                                        </tbody>
                                    </table>

 </div>


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

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                        default: 'Select Sahara File',
                    }
		});
	})
</script>

<script>
$("#dob").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "today"
});
</script>

<script>
$("#dob2").flatpickr({
    dateFormat: "d-m-Y",
});
</script>

<script>
	$('.flatpickr-input:visible').on('focus', function () {
    $(this).blur();
});
$('.flatpickr-input:visible').prop('readonly', false);
$('[name=date_open]').next('input').attr("name","date_open");
$('[name=date_close]').next('input').attr("name","date_close");
 $.validator.setDefaults({
        ignore: []
    })
    var valid = {
                rules: { dateyearlevel: {required: true} },
                messages: { dateyearlevel: {required: "The date is required"} }
    };
    $("#myform").validate(valid);

       var valid = {
                rules: { dateyearlevel: {
                  required: function() { return $("#mycheckbox").is(":checked") } 
                } },
                messages: { dateyearlevel: {required: "The date is required"} }
    };
    $("#myform").validate(valid);
</script>
<script type="text/javascript">
	$(document).ready(function() {
  $('#dataTable').DataTable();
});
</script>


<script>
    $('.scheme_type_name_select').change(function()
    {
        var scheme_type_name_select = $(this).val();
        if(scheme_type_name_select=="Other")
        {
           $('.scheme_type_name_input').show();
           $('.scheme_type_name_input').attr("name","schemetype");
           $('.scheme_type_name_input').attr("required","required");
           $('.scheme_type_name_select').removeAttr("name");
           $('.scheme_type_name_select').removeAttr("required");
        }
        else
        {
           $('.scheme_type_name_input').hide();
           $('.scheme_type_name_input').removeAttr("name");
           $('.scheme_type_name_input').removeAttr("required");
           $('.scheme_type_name_select').attr("name","schemetype");
           $('.scheme_type_name_select').attr("required","required");
        }
    })
</script>
</body>

</html>