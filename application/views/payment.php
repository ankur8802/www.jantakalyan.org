<!doctype html>
<?php
   error_reporting(0);
?>
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
     table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid black;

}

th, td {
  text-align: left;
  padding: 8px;
}

tr
{
	background-color:#fff;
}
th
{
	background-color: #ffb451;
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

  <div class="row form-group" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);padding:30px;border-radius:4px;">

<div class="col-md-12 text-center">
	 <h2>Payment Detail</h2> 
	 <br>
</div>
 
<div class="col-md-12">
	<div style="overflow-x:auto;">
  <table class="table table-bordered" style="margin-bottom: 0;">
    <tr>
      <th>Scheme Type Name</th>
      <th>Certificate No./ band No./Policy No./ Account No.</th>
      <th>Maturity Amount</th>
    </tr>

<?php
   
   if (!$this->session->userdata('donate')) {
         $donate['amount']=100;
         $this->session->set_userdata('donate',$donate);
   }
   $donate=$this->session->userdata('donate');
   $sahara_fee=$donate['amount'];
   foreach ($sahara as $sahara) {
?>
    <tr>
      <td><?= $sahara->schemetype?></td>
      <td><?= $sahara->certificateno?></td>
      <td><?= $sahara->maturityamount?></td>
    </tr>
  <?php
   } ?>
  </table>

<div class="pay" style="background:#fff;padding:10px;margin-right:1px;">
	<div class="border border-secondary rounded">
 
 <div class="col-md-6 offset-md-6 text-right">
     <div class="row">
       <div class="col-md-6 text-right"></div>

             <div class="col-md-6">
              <p style="margin-bottom:0;">Do You Want To Donate</p>
          <div class="form-group">
            <form action="#">
              <div class="form-check form-check-inline">
                 <label class="form-check-label">
                  
                 <input class="form-check-input donateinput" type="radio" name="donate" <?php  if ($donate['amount']!=0) {echo 'checked'; } ?> required value="yes">
                 Yes</label>
              </div>
              
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                <input class="form-check-input donateinput" type="radio" name="donate" <?php  if ($donate['amount']==0) {echo 'checked'; } ?> required value="no">
                No</label>
              </div>

            </form>
        </div>
      </div>
     </div>
      

 </div>

 <?php
    if ($donate['amount']!=0)
    {
 ?>

    <div class="col-md-8 offset-md-4">
        <div class="row">
           <div class="col-md-6 offset-md-4 text-right" style="padding-top:10px;">
        <p>Select Donate Amount </p>
           </div>
      <div class="col-md-2 text-left" style="padding-top:10px;">
        <div class="form-group">
          <select class="form-control donateanount">
               <option> 100 </option>
               <option> 200 </option>
               <option> 500 </option>
               <option> 1000 </option>
          </select>
        </div>

      </div>
        </div>
    </div>

<?php
}
?>



  <div class="col-md-6 offset-md-6 text-center" style="background:#fff;">
 
    <div class="row">

    	<div class="col-md-6 offset-md-4 text-right">
    		<p>Membership Fee </p>
    	</div>
    	<div class="col-md-2 text-left">
    		<p>&#8377; 
              <?php 
                   if($userstatus=="normal")
                   {
                     $application_fee=101;
                   }
                   elseif($userstatus=="plus")
                   {
                    $application_fee=0;
                   }
                   
                   echo $application_fee;
              ?>
    		</p>
    	</div>

    	<div class="col-md-6 offset-md-4 text-right">
    		<p>Total </p>
    	</div>
    	<div class="col-md-2 text-left">
    		<p>&#8377; 

    		 <?php
           $total_fee=$sahara_fee+$application_fee;

           if ($coupon)
           {
             if($coupon->amount>=$total_fee)
             {
              $total_fee=0;
             }
             else
             {
              $total_fee=$total_fee-$coupon->amount;
             }
           }
         
                echo $total_fee;
    		 ?>

    	    </p>

          
          
    	</div>
<?php
  if(!$coupon->coupon_code)
  {
?>
      <div class="col-md-12 text-right">

      <form action="<?= base_url('Ngologin/applycoupon')?>" method="post">
        <div class="row">

          <div class="col-md-8">
            <input type="text" name="coupon_code" class="form-control" placeholder="Enter Coupon Code" required>
         </div>

         <div class="col-md-4">
          <button class="btn btn-primary">Apply Coupon</button>
         </div>

        </div>  

      </form>
        
      </div>
  <?php
}
else
{
?>
      <div class="col-md-12 text-right">

        <div class="row">

          <div class="col-md-8">
            <p style="font-size:20px;text-transform:uppercase;"> <?= $coupon->coupon_code?> </p>
         </div>

         <div class="col-md-4">
          <a href="<?= base_url('payment')?>"><button class="btn btn-danger">Remove</button></a>
         </div>

        </div>  

        
      </div>
  <?php
}
?>


    	<div class="col-md-12 text-right" style="padding:10px;">  
             <a href="<?= base_url("Ngologin/processpayment/$total_fee")?>"> <button type="button" class="btn btn-success" style="border-radius:32px;">PROCEED TO PAYMENT</button> </a>
    	</div>

    </div>


  </div>
 </div>
</div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
  $('.donateanount').change(function(){
     var amount= $('.donateanount').val();

            $.ajax({
        url: "<?= base_url("index.php/Ngologin/ajaxdonateamount")?>",
        type: "POST",
        data: { amount: amount },
        success: function (response) {
             // alert(response);
           location.reload();
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>

<script>
  <?php
      if ($this->session->userdata('donate')) 
  ?>
     $('.donateanount').val("<?= $donate['amount']?>");
</script>

<script>
  $('.donateinput').click(function()
  {
    var donateinput=$(this).val();

                $.ajax({
        url: "<?= base_url("index.php/Ngologin/ajaxdonateamount2")?>",
        type: "POST",
        data: { amount: donateinput },
        success: function (response) {
             // alert(response);
           location.reload();
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>




</body>

</html>