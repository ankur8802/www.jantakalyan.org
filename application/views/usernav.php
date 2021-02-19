
<style>
	

@media only screen and (min-width: 767px) {
    .mobile-version
    {
        display: none!important;
    }
}
</style>
<header id="header" class="header-section">
<div class="top-header">
<div class="container-fluid">
<div class="top-content-wrap row">
<div class="col-sm-8">
<ul class="left-info">
<li><a href="mailto:info@jantakalyan.org"><i class="ti-email"></i>info@jantakalyan.org</a></li>
<li><a href="tel:9555677250"><i class="ti-mobile"></i>+91 9792470532</a></li>
</ul>
</div>
<div class="col-sm-4 d-none d-md-block">
<ul class="right-info">
<li><a href="https://www.facebook.com/jantakalyan.org/" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="bottom-header">
<div class="container-fluid">
<div class="bottom-content-wrap row">
<div class="col-sm-4">
<div class="site-branding">
<a href="<?= base_url()?>"><img src="<?= base_url()?>assets/img/logo/logo.png" alt="Brand"></a>
</div>
</div>
<div class="col-sm-12 col-md-8 text-right">
<ul id="mainmenu" class="nav navbar-nav nav-menu">
<li class="mobile-version"><a style="cursor:not-allowed;"> <?php $username=$this->session->userdata('ngouser2020login'); echo $username;?> </a></li>
<li><a href="<?= base_url('update-profile')?>">Update Profile</a></li>
<li><a href="<?= base_url('sahara-Details')?>">Sahara Details</a></li>
<li><a href="<?= base_url('bank-detail')?>">Bank Detail</a></li>
<li><a href="<?= base_url('document-upload')?>">Upload Documents</a></li>
<li><a href="<?= base_url('Payment')?>">Payment</a></li>
<li><a>User <i class="fas fa-user"></i></a>
<ul style="padding:0;">
<li style="background:#0F5DA7;"><a style="cursor:not-allowed;color:#fff;"> <?php $username=$this->session->userdata('ngouser2020login'); echo $username;?> </a></li>
<li><a href="<?= base_url('history')?>">Payment History</a></li>
<li><a href="<?= base_url('print')?>">Print</a></li>
<li><a href="<?= base_url('change-password')?>">Change Password</a></li>
</ul> </li>



<li class="mobile-version"><a href="<?= base_url('logout')?>">Logout</a></li>
</ul>


<a href="<?= base_url('logout')?>" class="default-btn">Logout</a>

</div>
</div>
</div>
</div>
</header>