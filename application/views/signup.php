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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="837697bf9c98e2be189a58f5-text/javascript"></script>

<style>
	label
	{
		margin:0;
		margin-top:10px;
		font-weight: bold;
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
	width:170px;
	height:170px;
	border-radius:50%;
	margin-left: 40%;
}
.ui.default.dropdown:not(.button)>.text, .ui.dropdown:not(.button)>.default.text
{
	color:gray;
}
small
{
   color: red;
} 
.modal-dialog { 
  max-width: 1000px;
}
ul li
{
	margin-top:5px;
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
<h2>Apply For Membership</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Personal Details / व्यक्तिगत विवरण</li>
</ol>
</div>
</div>
</div>


<section class="blog-section bg-grey padding" style="background:#105EA7;">
<div class="container">

<form action="<?= base_url('Ngo/userregistration')?>" method="post" enctype="multipart/form-data">
<div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<div class="col-md-12">
	 <center> <h2>Personal Details / व्यक्तिगत विवरण</h2> </center>
	 <br>
</div>


<div class="col-md-6">
	<label>Name/ नाम *</label> 
	<input type="text" class="form-control" name="name" pattern="[a-zA-Z-\s]+" placeholder="Enter Your Name" required>
	<small>नोट 1 : सहारा प्रमाण-पत्र में दर्ज नाम के अनुसार</small>
	<br> <small>नोट 2 : कृपया नाम के आगे श्री (Mr.) या सुश्री (Ms.) आदि न लगाएं जब तक कि </small>
</div> 

<div class="col-md-6">
	<label> Gender/ लिंग * </label>
	<select class="form-control" name="gender" required>
		<option value="">Select Gender</option>
		<option>Male/पुरुष</option>
		<option>Female/ महिला</option>
		<option>Transgender/ट्रान्सजेंडर</option>
	</select>
</div>


<div class="col-md-6">
	<label> Date of Birth / जन्म तिथि *</label>
	<input class="flatpickr flatpickr-input active form-control" type="text" placeholder="Select Date.." id="dob-reg" name="dob" readonly="readonly" required>
</div>


<div class="col-md-6">
	<label>Father/Husband/Guardian Name (पिता/पति/अभिभावक का नाम) *</label>
	<input type="text" class="form-control" name="fname" pattern="[a-zA-Z-\s]+" placeholder="Enter Your Father/Husband/Guardian Name" required>
	<small>[Please do not use any prefix such as Shri or Dr. etc.]
     <br>[ कृपया नाम के आगे श्री या डा. आदि न लगाएं ]</small>
</div> 

<div class="col-md-6">
	<label>Mother's Name / माता का नाम *</label>
	<input type="text" class="form-control" name="mname" pattern="[a-zA-Z-\s]+" placeholder="Enter Mother's Name / माता का नाम" required>
	<small>[Please do not use any prefix such as Smt or Dr. etc.]
     <br> [ कृपया नाम के आगे श्रीमती या डा. आदि न लगाएं ]</small>
</div> 


<div class="col-md-6">
	<label>Aadhar/Enrollment No (आधार/नामांकन संख्या) *</label>
	<input type="text" class="form-control" name="aadharno" pattern="^[0-9]*$" maxlength="12" placeholder="Enter Your Aadhar No. like 367598346015" required>
</div> 

<div class="col-md-6">
	<label>  Nationality / राष्ट्रीयता *</label>
	<select class="form-control" name="nationality" required>
        <option>Indian/भारतीय</option>
		<option>Other/अन्य</option>
	</select>
</div>


<div class="col-md-6">
	<label> Marital Status / वैवाहिक स्थिति *</label>
	<select class="form-control" name="maritalstatus" required>
		<option value="">Select Marital Status</option>
		<option>Unmarried</option>
		<option>Married</option>
		<option>Window/ Windower</option>
		<option>Divorcee</option>
	</select>
</div>


<div class="col-md-6">
	<label> Mobile No. / मोबाइल नं. *</label>
	<input type="text" class="form-control" name="phone" pattern="[789][0-9]{9}" maxlength="10" placeholder="Enter Mobile No. / मोबाइल नं." required>
</div> 

<div class="col-md-6">
	<label> Confirm Mobile No. / मोबाइल नं.  की पुष्टि करें *</label>
	<input type="text" class="form-control" name="cphone" pattern="[789][0-9]{9}" maxlength="10" placeholder="Enter Confirm Mobile No. / मोबाइल नं.  की पुष्टि करें " required>
</div> 


<div class="col-md-12">
	<br>
	<h2>Address / आवासीय पता</h2>
</div>


<div class="col-md-6">
	<label>State/UT राज्य्/संघ शासित क्षेत्र *</label>
   <select class="form-control ajaxstate" name="state" required>
            <option value="">Choose State</option>
            <?php foreach ($state as $key) { ?>  
               <option><?= $key->state?></option>
             <?php }?>
   </select>
</div>

<div class="col-md-6">
	<label>District/City जिला/शहर *</label>
	<select class="form-control ajaxdistrict" name="district" required>
                <option>Choose District</option>
    </select>
</div>

<div class="col-md-6">
	<label>Tahseel/ तहसील *</label>
	<input type="text" class="form-control" name="tehseel" placeholder="Enter Tahseel/ तहसील" required>
</div>

<div class="col-md-6">
	<label> Block/ ब्लाक *</label>
	<select class="form-control ajaxblock" name="block" required>
                <option>Choose Block</option>
    </select>
</div>

<div class="col-md-6">
	<label>Village/ गाँव *</label>
	<select class="form-control ajaxvillage" name="village" required>
                <option>Choose Village</option>
    </select>
</div>


<div class="col-md-6">
	<label> Line 1 / लाइन 1 *</label>
	<input type="text" class="form-control" name="address" placeholder="Enter Line 1 / लाइन 1" required>
	<small> [Do not enter special characters like ( _ , \ , / etc.) or your name again in the address Line 1.</small>
	<br>
	<small>पते की पंक्ति 1 में विशेष वर्ण जैसे ( _ , \ , / आदि) अथवा अपना नाम दोबारा दर्ज न करे।</small>
</div> 




<div class="col-md-6">
	<label>PIN Code / पिन कोड *</label>
	<input type="text" class="form-control" name="pincode" pattern="[0-9]+" minlength="6" maxlength="6" placeholder="Enter PIN Code / पिन कोड" required>
</div>

<div class="col-md-12">
	<br>
	<h2>Create Your Password / अपना पासवर्ड बनाये</h2>
</div>

<div class="col-md-6">
	<label>Create New Password </label>
	<input type="Password" class="form-control" name="password" placeholder="Create New Password" required>
	<small>To make your password more secure</small>
	<br>
	<small> Use letters and numbers</small>
	<br>
	<small>use special characters (e.g, @)</small>
	<br>
	<small>Mix lower and upercase</small>
</div> 

<div class="col-md-6">
	<label>Create New Confirm Password </label>
	<input type="Password" class="form-control" name="cpassword" placeholder="Enter Confirm Password" required>
</div> 


<div class="col-md-12 text-center">
  
	<div class="form-check">
		  <label class="form-check-label" style="margin-top:0;color:red;font-weight:bold;">
       <input class="form-check-input" type="checkbox" required>
     
            I/We hereby confirm that above-mentioned information is true and correct to the best of my knowledge and belief and I understand and agree that the payment under consideration is contribution for Life Membership or One year ordinary Membership and is non-refundable.
        </label>
   </div>
</div>


<div class="col-md-12 text-center">
	<br>
         <input type="reset" class="btn default-btn" value="Reset" style="background-color: #dc3545;">
	     <button class="btn default-btn">Submit</button>  

	 <br>
</div>



</div>
</form>
</div>
</section>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary instructions" data-toggle="modal" data-target="#exampleModal" style="display:none;"></button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header d-block text-center" style="background:#0F5DA7;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#fff;">INSTRUCTIONS FOR SUBMISSION OF ON-LINE APPLICATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top:-45px;color:#fff;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="text-center" style="background:#0F5DA7;color:#fff;">General Instructions:</p>
         <ul class="text-center" style="list-style-type:decimal;list-style-position:inside;">
         	<li>Read the Instructions carefully and select "I Agree" and Press 'START' button to proceed further.</li>
         	<li>For detailed Notification, click here to Download the Detailed Advertisement. Please read it carefully before filling the on-line application</li>
         	<li>Before start of filling-up of application through on-line mode, the Members should keep ready, the following details/ documents:</li>

         	<ul style="list-style-type:lower-alpha;list-style-position:inside;">
         		<li>Valid Mobile Number&Aadhar Number.</li>
         		<li>Scanned copy of the recent passport size color Photograph.</li>
         		<li>Scanned signature.</li>
         		<li>Scanned Aadhar Card.</li>
         		<li>Scanned Bank Passbook.</li>
         		<li>Scanned Sahara Document.</li>
         	</ul>
         </ul>

         <p class="text-center" style="background:#0F5DA7;color:#fff;">How to Apply:</p>
         <ul class="text-center" style="list-style-type:decimal;list-style-position:inside;">
         	<li>Members should have a valid personal Mobile No.&Aadhar Number and must ensure that it is active during the entire recruitment process. Application sequence number, Membership ID, Password and all other important communication will be sent on the same registered Mobile Number.</li>

         	<li>Members should take utmost care in furnishing/providing the correct details while filling-up the on-line application. YOU CAN EDIT THE INFORMATION BEFORE SUBMISSION OF APPLICATION. Once the form is submitted, it can't be edited.</li>

         	<li>Application once submitted cannot be edited /withdrawn and fee once paid will neither be refunded nor adjusted.</li>

         	<li>The process for submitting the application is given below:-</li>
         </ul>

         <p class="text-center" style="background:#0F5DA7;color:#fff;">
         	STEP-I Registration
         </p>
         <ul class="text-center" style="list-style-type:decimal;list-style-position:inside;">
         	<li>The Members agreeing to the terms & conditions may proceed further by clicking “I agree” check box given below and press the “Start” button.</li>
         	<li>Sign-up by Members Name, Mother name, DOB, Mobile No. and Aadhar Number.</li>
         	<li>On completion of Step-I Members will receive Membership ID on their registered email ID & Mobile No.</li>
         	<li>After successful registration login with Membership ID & Password.</li>
         </ul>

         <p class="text-center" style="background:#0F5DA7;color:#fff;">
         	STEP-II :Filling-up of Application
         </p>

         <ul class="text-center" style="list-style-type:decimal;list-style-position:inside;">
         	<li>After registration, Members may click on Login icon at top right corner ,Login your ID with Membership ID & Password ,and complete Personal Details, Sahara Details, Upload photo/signature) and submission of Membership Fee through Online mode via Debit card, Credit cards or Internet Banking.</li>

         	<li>Technical queries/ clarifications relating to the filling up of ONLINE APPLICATION, please contact the helpdesk at Email:  helpdeskjantakalyan@gmail.com, +91-9792470532, +91-9555677250</li>
         </ul>


      </div>
      <div class="modal-footer text-center d-block">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:#0F5DA7;color:#fff;">Start</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

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

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                        default: 'Select Profile Image',
                    }
		});
	})
</script>

<script>

$("#dob-reg").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "today"
});

</script>



<script>
  $('.ajaxstate').change(function(){
     var statename= $('.ajaxstate').val();

            $.ajax({
        url: "<?= base_url("index.php/Ngo/fetchdistrictajax")?>",
        type: "POST",
         data: ({ title:statename }),
        success: function (response) {
        // alert(response);
              $(".ajaxdistrict").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>

<script>
  $('.ajaxdistrict').change(function(){
     var district= $('.ajaxdistrict').val();
     var statename= $('.ajaxstate').val();

            $.ajax({
        url: "<?= base_url("index.php/Ngo/fetchblockajax")?>",
        type: "POST",
         data: ({ title:district,state:statename }),
        success: function (response) {
       //  alert(response);
              $(".ajaxblock").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>


<script>
  $('.ajaxblock').change(function(){
  	 var block= $('.ajaxblock').val();
     var district= $('.ajaxdistrict').val();
     var statename= $('.ajaxstate').val();

            $.ajax({
        url: "<?= base_url("index.php/Ngo/fetchvillageajax")?>",
        type: "POST",
        data: { block: block, district: district, state: statename },
        success: function (response) {
           //  alert(response);
            $(".ajaxvillage").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>

<script>
      $(document).ready(function()
      {
      	$('.instructions').click();
      })
</script>

</body>

</html>