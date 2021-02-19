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
<script src="<?= base_url()?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="3a94c328544c213088d37164-text/javascript"></script>
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

<style>
	.services-image
	{
		box-shadow: 0 16px 28px 0 rgba(0, 0, 0, .15);
		min-height:250px;
		border:1px solid #0F5DA7;
		border-radius:4px;
		padding:5px;
	}
  .purpose h2
  {
      text-align:center;
  }
  .purpose p
  {
    text-align:justify;
  }
</style>




<div class="header-height"></div>
<div class="pager-header">
<div class="container">
<div class="page-content">
<h2>Services</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
<li class="breadcrumb-item active">Services</li>
</ol>
</div>
</div>
</div>

<!-- <section class="about-section bg-grey bd-bottom padding">
<div class="container">
<div class="row about-wrap text-center">
  
  <div class="col-md-3">
  	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/children.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">CHILDREN</h2>
     	</div>
  </div>

  <div class="col-md-3">
  	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/family.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">PARENTS</h2>
  	</div>
  </div>

    <div class="col-md-3">
    	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/school.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">SCHOOLS</h2>
  	</div>
  </div>

  <div class="col-md-3">
  	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/ngo.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">NGO</h2>
  	</div>
  </div>

  <div class="col-md-12" style="margin-top:40px;"></div>

  <div class="col-md-3">
  	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/parents.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">ADULT SURVIVORS</h2>
  	</div>
  </div>

  <div class="col-md-3">
  	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/police.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">GOVERNMENT OFFICIALS</h2>
  	</div>
  </div>

  <div class="col-md-3">
  	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/interview.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">COUNSELORS</h2>
  	</div>
  </div>

  <div class="col-md-3">
  	   <div class="services-image">
  	   <img src="<?= base_url()?>assets/img/services/doctor.png" style="width:128px;height:128px;">
  	   <h2 style="color:#0F5DA7">MEDICAL PROFESSIONAL</h2>
  	</div>
  </div>

</section>
 -->

 <section class="purpose" style="padding:20px;">
       
       <div class="container">

         <div class="row">
        
        <div class="col-md-12 text-center">
          <h2 style="background:#0F5DA7;font-size:35px;color:#fff;padding:20px;border-radius:8px;">Purpose</h2>
        </div>

         <div class="col-md-12 text-center">
           <h2>Cultural Heritage</h2>
           <p style="text-align:justify;">Cultural heritage is the legacy of physical artifacts and intangible attributes of a group or society that are inherited from past generations, maintained in the present and bestowed for the benefit of future generations. Cultural heritage includes tangible culture, intangible culture, and natural heritage. The deliberate act of keeping cultural heritage from the present for the future is known as Preservation or Conservation, though these terms may have more specific or technical meaning in the same contexts in the other dialect. Cultural heritage is unique and irreplaceable, which places the responsibility of preservation on the current generation. Smaller objects such as artworks and other cultural masterpieces are collected in museums and art galleries. Grass roots organizations and political groups, such as the international body UNESCO, have been successful at gaining the necessary support to preserve the heritage of many nations for the future.</p>
         </div>

        <div class="col-md-12">
          <h2> Cultural Issues  </h2>
          <p> Culture is the shared knowledge, behavioral norms, values and beliefs that help people to live in families, groups and communities. Different cultures have different patterns of behaviours and norms of living. Hence, what is acceptable in one culture is not necessarily acceptable in another. This sometimes causes misunderstandings between people of different cultural backgrounds.Culture shock is a phenomenon many people experience when they arrive in a new location. The greater the cultural difference, the more difficult the adjustment may be. This phenomenon is complicated by the fact that for many international students, this is the first time they have left their home country and may be missing that familiar family support. </p>
        </div>

        <div class="col-md-12">
          <h2> Social Welfare  </h2>
          <p> A social welfare system provides assistance to individuals and families in need. The types and amount of welfare available to individuals and families vary depending on the country, state, or region. In the U.S., the federal government provides grants to each state through the Temporary Assistance for Needy Families (TANF) program. </p>

          <p>The benefits that an individual or family receives as part of a social welfare system will vary by state, as will the eligibility requirements. </p>
        </div>


        <div class="col-md-12">
          <h2> How a Social Welfare Works </h2>
          <p> Social welfare systems provide assistance to individuals and families through programs such as health care, food stamps, unemployment compensation, housing assistance, and child care assistance. In the U.S., a caseworker is assigned to each individual or family applying for benefits to determine and confirm the applicant's needs. </p>
          <p>The benefits available to an individual vary by state. Eligibility is determined based on factors surrounding the person’s financial status and how it relates to the minimum acceptable levels within a particular state. The factors involved can include the size of the family unit, current income levels, or an assessed disability.</p>
          <p>Within each state, social welfare systems may go by different names, but they often serve similar functions. This can cause confusion when attempting to compare one state's program to another. Additionally, the requirements to qualify also vary, depending on the poverty line in a particular state. This allows for adjustments based on items such as cost of living that are not standardized across the country.</p>
        </div>

        <div class="col-md-12">
          <h2> Benefits of Social Welfare </h2>
          <p> Available benefits generally cover assistance for food, housing, child care, and medical care. In the case of TANF, federal funds are provided to the states for distribution. These funds may be used for cash assistance, allowing a household to spend the funds as it deems necessary to meet its needs and obligations. </p>
          <p>Some available housing benefits go beyond locating suitable and affordable properties and providing housing cost assistance. A household may qualify for assistance to complete certain energy efficiency upgrades. It may also receive funds to help pay utility bills.</p>
          <p>Benefits around health and nutrition can include access to affordable medical care. Food and nutrition programs may supply funds, often referred to as food stamps or the Supplemental Nutrition Assistance Program (SNAP), to provide easier access to food in general. Additional nutritional assistance through the Women, Infants and Children (WIC) program provides food-specific benefits to ensure pregnant women and young children have access to healthy food options to promote growth and development.</p>
          <p>Other programs that are parts of the social welfare system include disaster relief assistance, educational assistance, agricultural loans, and services specifically for veterans.</p>
        </div>

        <div class="col-md-12">
          <h2> human development </h2>
          <p> In 1990 the first Human Development Report introduced a new approach for advancing human wellbeing. Human development – or the human development approach - is about expanding the richness of human life, rather than simply the richness of the economy in which human beings live. It is an approach that is focused on people and their opportunities and choices.</p>
          <p> <b> People: </b>human development focuses on improving the lives people lead rather than assuming that economic growth will lead, automatically, to greater wellbeing for all. Income growth is seen as a means to development, rather than an end in itself.</p>
          <p> <b> Opportunities: </b> human development is about giving people more freedom to live lives they value. In effect this means developing people’s abilities and giving them a chance to use them. For example, educating a girl would build her skills, but it is of little use if she is denied access to jobs, or does not have the right skills for the local labour market. Three foundations for human development are to live a long, healthy and creative life, to be knowledgeable, and to have access to resources needed for a decent standard of living. Many other things are important too, especially in helping to create the right conditions for human development, and some of these are in the table below. Once the basics of human development are achieved, they open up opportunities for progress in other aspects of life.</p>
          <p><b>Choice:</b> human development is, fundamentally, about more choice. It is about providing people with opportunities, not insisting that they make use of them. No one can guarantee human happiness, and the choices people make are their own concern. The process of development – human development - should at least create an environment for people, individually and collectively, to develop to their full potential and to have a reasonable chance of leading productive and creative lives that they value.</p>
          <p>As the international community moves toward implementing and monitoring the 2030 agenda, the human development approach remains useful to articulating the objectives of development and improving people’s well-being by ensuring an equitable, sustainable and stable planet.</p>
        </div>

        <div class="col-md-12">
          <h2> Rights </h2>
          <p> Rights are legal, social, or ethical principles of freedom or entitlement; that is, rights are the fundamental normative rules about what is allowed of people or owed to people according to some legal system, social convention, or ethical theory. Rights are of essential importance in such disciplines as law and ethics, especially theories of justice and deontology. </p>
          <p>Rights are often considered fundamental to civilization, for they are regarded as established pillars of society and culture, and the history of social conflicts can be found in the history of each right and its development. According to the Stanford Encyclopedia of Philosophy, "rights structure the form of governments, the content of laws, and the shape of morality as it is currently perceived".</p>
        </div>

         <div class="col-md-12">
          <h2> Law </h2>
          <p><b> Law</b> is commonly understood as a system of rules that are created and enforced through social or governmental institutions to regulate behavior, although its precise definition is a matter of longstanding debate. It has been variously described as a science and the art of justice. State-enforced laws can be made by a collective legislature or by a single legislator, resulting in statutes, by the executive through decrees and regulations, or established by judges through precedent, normally in common law jurisdictions. Private individuals can create legally binding contracts, including arbitration agreements that may elect to accept alternative arbitration to the normal court process. The formation of laws themselves may be influenced by a constitution, written or tacit, and the rights encoded therein. The law shapes politics, economics, history and society in various ways and serves as a mediator of relations between people. </p>
          <p>Legal systems vary between countries, with their differences analyzed in comparative law. In civil law jurisdictions, a legislature or other central body codifies and consolidates the law. In common law systems, judges make binding case law through precedent,although on occasion case law may be overturned by a higher court or the legislature.Historically, religious law influenced secular matters, and is still used in some religious communities.Sharia law based on Islamic principles is used as the primary legal system in several countries, including Iran and Saudi Arabia.</p>
          <p>Law's scope can be divided into two domains. Public law concerns government and society, including constitutional law, administrative law, and criminal law. Private law deals with legal disputes between individuals and/or organizations in areas such as contracts, property, torts/delicts and commercial law.This distinction is stronger in civil law countries, particularly those with a separate system of administrative courts; by contrast, the public-private law divide is less pronounced in common law jurisdictions.</p>
          <p>Law provides a source of scholarly inquiry into legal history,philosophy, economic analysisand sociology.Law also raises important and complex issues concerning equality, fairness, and justice.</p>
        </div>

         <div class="col-md-12">
          <h2> Local Government </h2>
          <p> Have you ever received a speeding ticket? If so, then you've dealt with your local government. The police officer was likely a city employee, and you probably appeared in or made a payment to the city court.</p>
          <p>Local government is the public administration of towns, cities, counties and districts. Notice that this type of government includes both county and municipal government structures. It can be challenging, but these entities must work together to administrate a particular geographic area. For example, I grew up in a small town called Pryor. It's located in Mayes County, Oklahoma. My local government therefore included both the administration of Pryor and the organization of Mayes County.</p>
          <p>As citizens, we have much more contact with our local governments than we do with the federal government. This is because local government runs our city utilities, libraries, fire departments, public swimming pools, parks, local law enforcement and many other areas of our everyday lives.</p>
          <p>The organization of local governments varies depending on the state. However, all local governments derive their authority from the state in which they are located. The city of Pryor and Mayes County get their governmental authority from Oklahoma's state constitution.</p>
          <p>As with state governments, the citizens of an area elect most of their local government officials. This includes mayors, county commissioners, city councils, sheriffs and many other local government positions at both the county and city levels.</p>
        </div>

        <div class="col-md-12">
          <h2> Population </h2>
          <p> In statistics, a population is the entire pool from which a statistical sample is drawn. A population may refer to an entire group of people, objects, events, hospital visits, or measurements. A population can thus be said to be an aggregate observation of subjects grouped together by a common feature.</p>
          <p>Unlike a sample, when carrying out statistical analysis on a population, there are no standard errors to report—that is, because such errors inform analysts using a sample how far their estimate may deviate from the true population value. But since you are working with the true population you already know the true value.</p>
        </div>


       <div class="col-md-12">
          <h2> The Basics of Population </h2>
          <p> A population can be defined by any number of characteristics within a group that statisticians use to draw conclusions about the subjects in a study. A population can be vague or specific. Examples of population (defined vaguely) include the number of newborn babies in North America, total number of tech startups in Asia, average height of all CFA exam candidates in the world, mean weight of U.S. taxpayers and so on. </p>

          <p>Population can also be defined more specifically, such as the number of newborn babies in North America with brown eyes, the number of startups in Asia that failed in less than three years, the average height of all female CFA exam candidates, mean weight of all U.S. taxpayers over 30 years of age, among others.</p>
          <p>Most times, statisticians and researchers want to know the characteristics of every entity in a population, so as to draw the most precise conclusion possible. This is impossible or impractical most times, however, since population sets tend to be quite large.</p>
        </div>

         <div class="col-md-12 text-center">
          <h2 style="background:#0F5DA7;font-size:35px;color:#fff;padding:20px;border-radius:8px;">Labours</h2>
        </div>

          <div class="col-md-12">
             <p>The economic and social fallout of COVID 19 is huge on these migrant workers. The immediate wage loss and uncertainty painted by the gloomy economic prospects further worsens their situation </p>

             <img src="<?= base_url()?>assets/img/index/services.jpg" alt="ll" style="width:100%;">
             <p>When India is fighting the ultra-health emergency resulting from COVID 19 pandemic, the economic hardship faced by millions of migrant workers cannot be put aside. Thousands daring to walk miles to reach their home despite all India lockdown shows the level of uncertainty among the workers. Moreover, the recent large congregation of workers at Bandra or violence in Surat are not sporadic incidents rather shows deep sense of anxiety amidst the crisis. Most of the worker are vulnerable who are disproportionately at risk of catching COVID 19 due to unhygienic living conditions, limited access to
             health care and poor working environment. Recently, a lancet report suggests around 150 million migrant workers are there worldwide and most of them face barriers accessing health services in host countries and have a high burden of mental disorder and lower quality of life.
             </p>
             <p>In India, the official statistics on migrant workers is not robust. According to 2011 census, there were 51 million migrant workers and the economic survey 2016-17, GoI estimated this 80 million. Further, this survey using railway data suggested around 9 million workers migrate in a year. Overall, the estimate ranged 51-80 million in 2011 (Fig). During 2001 to 2011 census, the annual growth rate of labour migration was 4.5 %. Applying the labour migration growth rate on the base estimates of 2011, total migrants workers are estimated to be 69-109 million in 2018. This is substantial and does not include intra-state migration which is proliferating in recent years mostly to urban locations.</p>
            
             <img src="<?= base_url()?>assets/img/index/graph.jpg" alt="ll" style="width:100%;">

             <p>The plight of migrant workers is enormous due to absence of legal contracts and social entitlements.
              Despite these hardships, economic opportunities and perspective income drive these humongous inter-
              state migration.
              The economic and social fallout of COVID 19 is huge on these migrant workers. The immediate wage loss and uncertainty painted by the gloomy economic prospects further worsens their situation. With extreme anxiety, no money in hands and no work, the exodus of these people to villages has stepped up causing further distress to the aggravated rural economy. Those who are stuck in different cities have ineffable sufferings because of inadequate food, ration and liquid cash. An immediate cash shortage and low prospect for future earnings multiply their risk.
              The quantum wage loss (assuming 25 days of paid work) in a month with a minimum wage rate of Rs
              300/day varies Rs 51,750-81,651 crore in two scenarios and this loss per month constitutes 0.27-0.43
              % GDP. This will rise to 0.81 to 1.29% of GDP, if the deadlock ceases within three months. Given
              the surge of cases in India, it is unlikely to get rid of the situation in three months. On the contrary, the
              fiscal stimulus program announced for the poor households is less than one percent of GDP and most
              of the migrant workers are deprived of such assistance due to systemic bottlenecks in identification of
              beneficiaries.
              A multi-pronged strategy should be designed to alleviate their pain. Instantly, the employers should be
              instructed to pay all dues to the workers and the state machinery should be vigilant. Community kitchen
              and supply of cooked food though has started; it should be far reaching to prevent nutritional deficiencies so that many of them do not seek medical attention for common preventable diseases. Origin state governments should speak to their counterparts as Odisha has already done and inter-state coordination should be streamlined to pay attention to workers caught in respective states. The urban local bodies should provide a helping hand and start communicating with workers to allay fear. Most of them are psychologically stressed and the social-psychological breakdown should be repaired introducing multi-lingual counselling program in collaboration with NGOs. This may appease their frustration and thwart Bandra or Surat type incident in future. As already expressed, universal distribution rice through PDS without any documentation should be undertaken to avoid starvation deaths. This may not entail large fiscal burden on the government. Moreover, this unforeseen crisis has forced many back home. Can they survive with the dwindling farm income and shrinking opportunities in rural hinterlands? Starting MGNREGA could be a ray of hope in rural areas.In medium term, the
              national portability of ration cards, long due, should be pursued earnestly so that migrant workers have access to subsidized food in any part of India. Stringent enforcement of labour laws through agreement among home, law and labour department is essential to safeguard interest of the workers. Priority should be to restructure rural economy to absorb surplus labour. Lastly, the major problem unfortunately is that we do not have realistic statistical account of number of migrant workers. Reliable estimates should be available in order to design social policies for them.
             </p>

          </div>


       </div>
       </div>

 </section>

<?php include('footer.php'); ?>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url()?>assets/js/vendor/jquery-1.12.4.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/bootstrap.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/tether.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/imagesloaded.pkgd.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/owl.carousel.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.isotope.v3.0.2.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/smooth-scroll.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/venobox.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.ajaxchimp.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.counterup.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.waypoints.v2.0.3.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.slicknav.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/jquery.nivo.slider.pack.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/letteranimation.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/vendor/wow.min.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/contact.js" type="3a94c328544c213088d37164-text/javascript"></script>

<script src="<?= base_url()?>assets/js/main.js" type="3a94c328544c213088d37164-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="3a94c328544c213088d37164-|49" defer=""></script></body>

</html>