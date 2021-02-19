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
<h2>Download</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Download Certificate</li>
</ol>
</div>
</div>
</div>

<style>
    .download
    {
       box-shadow:rgba(0, 0, 0, 0.25) 0px 15px 45px -9px;
       padding:10px;
       background:#e6e6e6;
       border-radius:8px;
       animation: downloadef 5s;
       transition:all 1s;
       margin-bottom:10px;
    }

    @keyframes downloadef{
    0%{
        background:linear-gradient(111.95647678511193deg, rgba(231, 244, 245,1) 5.533854166666667%,rgba(78, 240, 250,1) 96.67968749999999%);
        }
    25%{
        background:linear-gradient(111.95647678511193deg, rgba(226, 235, 239,1) 5.533854166666667%,rgba(208, 218, 224,1) 96.67968749999999%);
        }
    50%{
        background: linear-gradient(111.95647678511193deg, rgba(248, 198, 215,1) 5.533854166666667%,rgba(175, 233, 249,1) 96.67968749999999%);
        }
    75%{
        background: linear-gradient(111.95647678511193deg, rgba(98, 185, 183,1) 5.533854166666667%,rgba(236, 246, 237,1) 96.67968749999999%);
        }
    100%{
        background: linear-gradient(111.95647678511193deg, rgba(234, 172, 137,1) 5.533854166666667%,rgba(238, 226, 205,1) 96.67968749999999%);
        }
}

.download{
    animation: downloadef 3s infinite 0s linear;
}
</style>


<section class="blog-section bg-grey padding" style="background:#105EA7;padding-top:0;padding-top:50px;">
<div class="container">


<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<?php
    foreach ($download as $download) {
?>

<div class="col-md-4 text-center">
    <div class="download">
        <h2><?= $download->document_name;?></h2>
       <a href="<?= base_url()?>uploads/download/<?= $download->image?>" download>  <button class="btn btn-success">Download</button> </a>
       <a href="<?= base_url()?>uploads/download/<?= $download->image?>" target="_blank"> <button class="btn btn-warning">View</button> </a>
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

</body>

</html>