<section class="widget-section padding">
<div class="container">
<div class="widget-wrap row">
<div class="col-md-4 xs-padding">
<div class="widget-content">
<img src="<?= base_url()?>assets/img/logo/logo.png" alt="logo">
<p>Kshetriya Janata Kalyan and Kriyanvan Samiti is a momentum NGO which has been in continuous service since 2006, run by a group of professionals and social workers.</p>
<ul class="social-icon">
<li><a href="https://www.facebook.com/jantakalyan.org/" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="col-md-4 xs-padding">
<div class="widget-content">
<h3>Menu</h3>
<ul class="widget-link">
<li><a href="<?= base_url()?>">Home</a></li>
<li><a href="<?= base_url('about-us')?>">About Us</a></li>
<li><a href="<?= base_url('services')?>">Services</a></li>
<li><a href="<?= base_url('gallery')?>">Gallery</a></li>
<li><a href="<?= base_url('contact-us')?>">Contact</a></li>
</ul>
</div>
</div>
<div class="col-md-4 xs-padding">
<div class="widget-content">
<h3>Contact Us</h3>
<ul class="address">
<li><i class="ti-email"></i> <a href="mailto:info@jantakalyan.org">info@jantakalyan.org</a></li>
<li><i class="ti-mobile"></i>+91 9555677250, 9792470532</li>
<li><i class="ti-world"></i>www.jantakalyan.org</li>
<li><i class="ti-location-pin"></i>1st Floor, APIT Institute Building, Maskanwa Babhnan Road, District Gonda, Uttar Pradesh ,Pin Code - 271305</li>

</ul>
</div>
</div>
</div>
</div>
</section>

<footer class="footer-section">
<div class="container">
<div class="row">
<div class="col-md-6 sm-padding">
<div class="copyright">&copy; Copyright www.jantakalyan.org 2020 </div>
</div>
<div class="col-md-6 sm-padding">
<ul class="footer-social">
<li><a href="#">Terms</a></li>
<li><a href="#">Privacy Policy</a></li>

</ul>
</div>
</div>
</div>
</footer>

<div id="CounterVisitor">
          <span class="counter-item">0</span>
          <span class="counter-item">1</span>
          <span class="counter-item">0</span>
          <span class="counter-item">1</span>
          <span class="counter-item">8</span>
          <span class="counter-item">4</span>
</div>

<style>
  .fixedicon {
    position: fixed;
    bottom: 50px;
    right: 100px;
    background: #0F5DA7;
    color:#fff;
    padding: 10px 15px;
    border-radius: 50%;
    transition:all 1s;
  }

  .fixedicon i
  {
    color:#fff;
    font-size:25px;
  }

.fixedicon:hover
  {
    background-color: #ffb451;
    color:#fff;
  }
  .fixedicon2
  {
    bottom: 50px;
    right: 160px;
    background: #0F5DA7;
    color:#fff;
    padding: 10px 15px;
    border-radius: 50%;
    transition:all 1s;
  }
</style>

      <a href="https://api.whatsapp.com/send?phone=+919792470532" class="fixedicon" target="_blank" class="utube" style="z-index:999;"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>


      <a href="<?= base_url('donate')?>" class="fixedicon fixedicon2" class="utube" style="z-index:999;">Join Us</a>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/e6726924f5.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>



<script>
	$(document).ready(function(){
		$('.preloader').hide();
	})
</script>

 <?php  if($this->session->flashdata('success')) { ?>
 <script>
 	swal(" ", "<?= $this->session->flashdata('success');?>", "success");
 </script>
 <?php } ?>


 <?php  if($this->session->flashdata('error')) { ?>
 <script>
 	swal(" ", "<?= $this->session->flashdata('error');?>", "error");
 </script>
 <?php } ?>

  <?php  if($this->session->flashdata('warning')) { ?>
 <script>
 	swal(" ", "<?= $this->session->flashdata('warning');?>", "warning");
 </script>
 <?php } ?>

