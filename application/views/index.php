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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" />


<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">
<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<style>
	.swal-text
	{
		text-align: center;
	}
</style>
<style>
	.preloader
	{
		position: fixed;
		width: 100%;
		height:100vh;
		background:#fff url(<?= base_url()?>assets/img/pre/1.gif) no-repeat center;
		z-index:999999;
	}
	.promo-section
	{
		min-height:82px;
	}
</style>

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

<section class="slider-section">
<div class="slider-wrapper">

<div id="main-slider" class="nivoSlider">
<?php
$bannercapcount=1;
foreach ($banner as $banner) {
?>

<img src="<?= base_url()?>uploads/banner/<?= $banner->image?>" alt="" title="#slider-caption-<?= $bannercapcount;?>" />
<?php
$bannercapcount++;
}
?>

</div>

<?php
$bannercap=1;
foreach ($banner as $banner) {
?>

<div id="slider-caption-<?= $bannercap;?>" class="nivo-html-caption slider-caption">
<div class="display-table">
<div class="table-cell">
<div class="container">
<div class="slider-text">
<h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
<h1 class="wow cssanimation leFadeInRight sequence">Kshetriya Janta Kalyan And Kriyanvan Samiti</h1>
</div>
</div>
</div>
</div>
</div> 

<?php
$bannercap++;
}
?>



</div>
</section>


<!-- <section class="promo-section bd-bottom">
<div class="promo-wrap">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-6 xs-padding">
<div class="promo-content">

<marquee>

 <h3> Welcome to Kshetriya Janta Kalyan And Kriyanvan Samiti</h3>

</marquee>
</div>
</div>

</div>
</div>
</div>
</section> -->

<style>
	.underlineonhover:hover
	{
		text-decoration: underline;
	}
</style>

<section style="border:1px solid #0F5DA7;">
	<div class="row">
		<div class="col-md-2 newsupdate text-center" style="background:#0F5DA7;">
			<h2 style="margin:0;padding:10px;color:#fff;">News Update</h2>
		</div>

		<div class="col-md-10" style="background:linear-gradient(111.95647678511193deg, rgba(86, 216, 228,1) 5.533854166666667%,rgba(159, 1, 234,1) 96.67968749999999%);">
			<div class="news" style="padding:10px;">
				<marquee direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                  
                  <?php
                       foreach ($news as $news) {
                  ?>
                  <a href="<?= $news->link?>" class="underlineonhover" style="margin:0;color:#fff;font-size:17px;"><?= $news->title?> , </a>
                  
                  <?php } ?>
		       </marquee>
			</div>
		</div>
	</div>
</section>


<section class="about-section bd-bottom shape circle padding">
<div class="container">

<div class="section-heading text-center mb-40" style="margin-bottom:50px;">
<h2>Purpose</h2>
<span class="heading-border"></span>
<p>Caltural heritage, cultural issues, general social welfare, human development, right, law, local administration, NGO management, population, pollution, public administration, research,
Environment, health, rural development, training,
Self help groups, social awareness, society and economy, right to information, women development/ welfare, women issues.</p>
<p>
	Aim/Objective/Mission: Kshetriya Janata Kalyan and Kriyanvan Samiti is a momentum NGO which has been in continuous service since 2006, run by a group of professionals and social workers. This organization seeks to provide legal solutions to the tribal, laborers, social oppression, exploited persons and help to free people from their neighborhood from exploitation.क्षेत्रिए जनता कल्याण एवं क्रियानवान समिति एक गतिशील NGO जो 2006 से निरंतर सेवा रत है, जो पेशेवरों और सामाजिक कार्यकर्ताओं के समूह द्वारा बनाई गई है। यह संस्था गरीब, मजदूर, सामाजिक उत्तपीड़न, शोषण हो रहे व्यक्तियों को विधिक समाधान प्रदान करने और अपने पास-पड़ोस में रहने वाले लोगों का हो रहे शोषण से मुक्त कराने का और मदद करने का प्रयास करता है।
</p>
</div>

<div class="row">
<div class="col-md-4 xs-padding">
<div class="profile-wrap">
<img class="profile" src="<?= base_url()?>assets/img/index/cfo.jpeg" alt="profile">
<h3> Mr. Shyambabu Gupta <span>Chairman  </span></h3>
<p>Mr. Shyambabu Gupta has been nurturing this Foundation like a baby, discharging his moral and social responsibilities as Patron in the true spirit of the words of Mahatma Gandhi. </p>
</div>
</div>
<div class="col-md-8 xs-padding">
<div class="about-wrap row">
<div class="col-md-12 xs-padding">

<h3>Chairman Message</h3>
<p style="text-align:justify;">Since its formation, Mr. Shyambabu Gupta has been nurturing this Foundation like a baby, discharging his moral and social responsibilities as Patron in the true spirit of the words of Mahatma Gandhi. By dint of hard work, unshakeable commitment and love for humanity, the Foundation has steadfastly pursued its avowed objectives and has moved forward in leaps and bounds in fulfilling the aims for which the Foundation was originally set up. Believing in the adage "every single paisa of the Foundation is God's money" Mr. Gupta has been taking utmost care in ensuring that maximum benefit is given to the deserving mankind/institutions, while maintaining absolute simplicity without any pomp and show. APIT Computer Institute, of which Mr. Gupta is the sole Founder, Chairman and Managing Director, has been contributing substantially to the Foundation for discharging its social responsibilities towards the society at large. In the process, Kalikaperfumary&Agarbatti Company, Ganesh Auto Part as well as various other related Societies / Trusts / Institutions/Companies are running hospitals/ schools, vocational training centres, mobile dispensaries, awarding scholarships to poor students and donations to other charitable institutions.</p>
<a href="<?= base_url('about-us')?>" class="default-btn">Read More</a>

</div>
</div>
</div>
</div>

<br>

<div class="row">

<div class="col-md-4 xs-padding">
<div class="profile-wrap">
<img class="profile" src="<?= base_url()?>assets/img/index/abdul.jpeg" alt="profile">
<h3> Abdul <span>vice chairman  </span></h3>
<p>Abdul joined the KshetriyeJanataKalyanEvamKriyanvanSamiti in 2010 as a literacy volunteer.`</p>
<p>
	
</p>
</div>
</div>


<div class="col-md-8 xs-padding">
<div class="about-wrap row">
<div class="col-md-12 xs-padding">

<h3>Vice Chairman Message</h3>
<p style="text-align:justify;">Abdul joined the KshetriyeJanataKalyanEvamKriyanvanSamiti in 2010 as a literacy volunteer. He launched the organization in 2010 when he was a College student and joined the Kshetriye public welfare professional course to promote social workers. His expression and continuity for the socially connected economically weaker sections of the society inspired him to lead Kshatriya public welfare through various stages of development.
Currently, Manager in APIT Institute and also working as Secretary in Kshetriye jantaKalyanevamKriyanvanSamiti.
अब्दुल 2010 में एक साक्षरता स्वयंसेवक के रूप में क्षेत्रीय जनता कल्याण एवं क्रियान्वयन समिति में शामिल हुए। उन्होंने 2010 में संगठन का शुभारंभ किया जब वह एक कॉलेज के छात्र थे और सामाजिक कार्यकर्ताओं को बढ़ावा देने के लिए क्षेत्रीय लोक कल्याण पेशेवर पाठ्यक्रम में शामिल हुए। सामाजिक रूप से जुड़े आर्थिक रूप से कमजोर वर्गों के लिए उनकी अभिव्यक्ति और निरंतरता ने उन्हें विकास के विभिन्न चरणों के माध्यम से क्षेत्रीय लोक कल्याण का नेतृत्व करने के लिए प्रेरित किया।
वर्तमान में, APIT संस्थान में प्रबंधक और क्षेत्रीय जनता कल्याण एवं क्रियान्वयन समिति में सेक्रेटरी के रूप में भी काम कर रहे हैं।
</p>
<a href="<?= base_url('about-us')?>" class="default-btn">Read More</a>

</div>
</div>
</div>


</div>

</div>
</section>

<!-- 
<section class="team-section bg-grey bd-bottom circle shape padding">
<div class="container">
<div class="section-heading text-center mb-40">
<h2>Meet our Members</h2>
<span class="heading-border"></span>
</div>
<div class="team-wrapper row">
<div class="col-lg-6 sm-padding">
<div class="team-wrap row"> -->
<!-- <div class="col-md-6">
<div class="team-details">
<img uk-toggle="target: #Sunil-modal"  src="<?= base_url()?>assets/img/index/Sunil Verma.jpeg" alt="team" style="cursor:pointer;">
<div class="hover">
<h3>Sunil Verma </h3>
</div>
</div>
</div> -->
<!-- <div class="col-md-6">
<div class="team-details">
<img uk-toggle="target: #abdul-modal" src="<?= base_url()?>assets/img/index/abdul.jpeg" alt="team" style="cursor:pointer;">
<div class="hover">
<h3>Abdul</h3>
</div>
</div>
</div>
 -->

<!-- This is the modal -->
<!-- <div id="abdul-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title text-center" style="margin-bottom:0;">ABDUL HAKEEM ANSARI</h2>
        <h5 class="text-center" style="margin-top:0;">Sr. Vice President</h5>
        <p class="justify" style="letter-spacing:1px;font-size:16px;">Abdul joined the KshetriyeJanataKalyanEvamKriyanvanSamiti in 2010 as a literacy volunteer. He launched the organization in 2010 when he was a College student and joined the Kshetriye public welfare professional course to promote social workers. His expression and continuity for the socially connected economically weaker sections of the society inspired him to lead Kshatriya public welfare through various stages of development.
Currently, Manager in APIT Institute and also working as Secretary in Kshetriye jantaKalyanevamKriyanvanSamiti.
<br>
अब्दुल 2010 में एक साक्षरता स्वयंसेवक के रूप में क्षेत्रीय जनता कल्याण एवं क्रियान्वयन समिति में शामिल हुए। उन्होंने 2010 में संगठन का शुभारंभ किया जब वह एक कॉलेज के छात्र थे और सामाजिक कार्यकर्ताओं को बढ़ावा देने के लिए क्षेत्रीय लोक कल्याण पेशेवर पाठ्यक्रम में शामिल हुए। सामाजिक रूप से जुड़े आर्थिक रूप से कमजोर वर्गों के लिए उनकी अभिव्यक्ति और निरंतरता ने उन्हें विकास के विभिन्न चरणों के माध्यम से क्षेत्रीय लोक कल्याण का नेतृत्व करने के लिए प्रेरित किया।
वर्तमान में, APIT संस्थान में प्रबंधक और क्षेत्रीय जनता कल्याण एवं क्रियान्वयन समिति में सेक्रेटरी के रूप में भी काम कर रहे हैं।
</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
        </p>
    </div>
</div>


<div id="Sunil-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title text-center" style="margin-bottom:0;">SUNIL KUMAR VERMA</h2>
        <h5 class="text-center" style="margin-top:0;">Sr. General Secretary</h5>
        <p class="justify" style="letter-spacing:1px;font-size:16px;">
A graduate in agriculture from Gorakhpur University (2011), Sunil Verma earned a BA in Journalism from Himalayan University in 2017. In 2014, Sunil resumed her life with the grace of Mata Rani by getting a kidney transplant and since then has spent her life in service to others with full heart. In 2019, Regional People's Welfare and Implementation Committee joined hands unselfishly in the service of people.
In addition to his professional work, social work, catering to Vedic, destitute and sick people were given citation by 2020.

<br>
गोरखपुर विश्वविद्यालय (2011) से कृषि में स्नातक सुनील वर्मा ने 2017 में हिमालयन विश्वविद्यालय से पत्रकारिता में डिप्लोमा हासिल किया। 2014 मे, सुनील ने kidney transplant कराकर अपने जीवन को माता रानी की कृपा से दोबारा शुरू किया और उसके बाद से ही अपने जीवन को दूसरों की सेवा मे तन मन धन के साथ लगा दिया।2019 मे, क्षेत्रीय जनता कल्याण एवं क्रियान्वयन समिति मेशामिल हो कर लोगो की सेवा मे निस्वार्थ जुड़ गए। अपने पेशेवर काम के अलावा, सामाजिक कार्यों, गरीब, बेसहारा और बीमार लोगो की सेवा करने से 2020 में प्रशस्ति पत्र देकर सम्मानित किया गया ।
</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
        </p>
    </div>
</div>
 -->

<!-- <div class="col-md-6">
<div class="team-details">
<img src="<?= base_url()?>assets/img/index/default.png" alt="team">
<div class="hover">
</div>
</div>
</div>
<div class="col-md-6">
<div class="team-details">
<img src="<?= base_url()?>assets/img/index/default.png" alt="team">
<div class="hover">
</div>
</div>
</div> -->
<!-- 
</div>
</div>
<div class="col-lg-6 sm-padding">
<div class="team-content">
<h2>Meet our Members</h2>
<h3>Join your hand with us for a better life and beautiful future.</h3>
<ul class="check-list">
<li><i class="fa fa-check"></i>We are friendly to each other.</li>
<li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
<li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
<li><i class="fa fa-check"></i>No goal requirements.</li>
<li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li>
</ul>
</div>
</div>
</div>
</div>
 </section> -->

<!-- <section id="counter" class="counter-section">
<div class="container">
<ul class="row counters">
<li class="col-md-3 col-sm-6 sm-padding">
<div class="counter-content">
<i class="ti-money"></i>
<h3 class="counter">85389</h3>
<h4 class="text-white">Money Donated</h4>
</div>
</li>
<li class="col-md-3 col-sm-6 sm-padding">
<div class="counter-content">
<i class="ti-face-smile"></i>
<h3 class="counter">10693</h3>
<h4 class="text-white">Volunteer Around The World</h4>
</div>
</li>
<li class="col-md-3 col-sm-6 sm-padding">
<div class="counter-content">
<i class="ti-user"></i>
<h3 class="counter">50177</h3>
<h4 class="text-white">People Impacted</h4>
</div>
</li>
<li class="col-md-3 col-sm-6 sm-padding">
<div class="counter-content">
<i class="ti-comments"></i>
<h3 class="counter">669</h3>
<h4 class="text-white">Positive Feedbacks</h4>
</div>
</li>
</ul>
</div>
</section> -->

<section class="events-section bg-grey bd-bottom padding">
<div class="container">
<div class="section-heading text-center mb-40">
<h2>Our Mission</h2>
<span class="heading-border"></span>
<p>Caltural heritage, cultural issues, general social welfare, human development, right, law, local administration, NGO management, population, pollution, public administration, research, Environment, health, rural development, training, Self help groups, social awareness, society and economy, right to information, women development/ welfare, women issues.
</p>
</div>

<div id="event-carousel" class="events-wrap owl-Carousel">


<?php
foreach ($events as $events) {
?>

<div class="events-item">
 <div class="event-thumb">
<img src="<?= base_url()?>uploads/events/<?= $events->image?>" alt="events">
</div>
<div class="event-details">
<h3><?= $events->title?></h3>
<div class="event-info">
<!-- <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
<p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p> -->
</div>
<p><?= $events->eventsdetail?></p>
<!-- <a href="#" class="default-btn">Read More</a> -->
</div>
</div>

<?php
}
?>

</div>
</div>
</section>


<section class="testimonial-section bd-bottom padding">
<div class="container">

<div class="section-heading text-center mb-40">
<h2>What People Say</h2>
<span class="heading-border"></span>
</div>

<div id="testimonial-carousel" class="testimonial-carousel owl-carousel">

<?php
foreach ($testimonials as $testimonials) {
?>

<div class="testimonial-item">
<p> <?= $testimonials->review1?> </p>
<div class="testi-footer">
<img src="<?= base_url()?>uploads/testimonials/<?= $testimonials->testimonial_image?>" alt="profile">
<h4> <?= $testimonials->name?> </h4>
</div>
</div>

<?php
}
?>

</div>

</div>
</section>


<!-- <section class="blog-section bg-grey bd-bottom padding">
<div class="container">

<div class="section-heading text-center mb-40">
<h2>Recent Stories</h2>
<span class="heading-border"></span>
</div>

<div class="row">

<div class="col-lg-12 xs-padding">
<div class="blog-items grid-list row">

<?php
foreach ($blog as $blog) {
?>

<div class="col-md-4 padding-15">
<div class="blog-post">
<img src="<?= base_url()?>uploads/blog/<?= $blog->image;?>" alt="blog post">
<div class="blog-content">
<span class="date"><i class="fa fa-clock-o"></i> <?= $blog->date;?></span>
<h3><a href="#">
<?php
    echo character_limiter($blog->title,30);
?>
</a></h3>
<p>
	<?php
    echo character_limiter($blog->blogdetail,120);
?>
</p>
<a href="#" class="post-meta">Read More</a>
</div>
</div>
</div>

<?php
}
?>


</div>

</div>
</div>

</div>
</section>
 -->

<a id="popup" href="<?= base_url()?>assets/img/index/IMPORTANT INSTRUCTIONS TO THE CANDIDATES.pdf" target="_blank" style="display:none;">INSTRUCTIONS </a>

<?php include('footer.php'); ?>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/bootstrap.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/tether.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/imagesloaded.pkgd.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/owl.carousel.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.isotope.v3.0.2.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/smooth-scroll.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/venobox.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.ajaxchimp.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.counterup.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.waypoints.v2.0.3.min.js" type="9bdad57bcf05b3f168c409ldb-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.slicknav.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.nivo.slider.pack.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/letteranimation.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/wow.min.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/contact.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>

<script src="<?= base_url()?>assets/js/main.js" type="9bdad57bcf05b3f168c409db-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="9bdad57bcf05b3f168c409db-|49" defer=""></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>




</body>

</html>