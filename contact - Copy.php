
<?php 
error_reporting(0);
if(isset($_POST['submit']))
{
  
   //$to = "aishspark10@gmail.com";
	$to = "shamaspark21@gmail.com";
	$from = $_POST['email']; 
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $msg_subject = $_POST['msg_subject'];
    $message=$_POST['message'];
    $subject = "Enquiry Form";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . "Name:". $name ."\n\n". "Phone No:". $phone_number ."\n\n". "Email:". $from ."\n\n". "Subject:". $msg_subject. "\n\n"."Message:". $message;
    $message2 = "Here is a copy of your message.You Sent a mail to  VMR APPARELS " . "\n\n" .$message;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);// sends a copy of the message to 
	
	?>
	<script>alert("Thank You..We will contact you soon");</script>
	<?php
    
	echo "<script>window.open('contact.php','_self')</script>";
 
    }
?>
<!doctype html>
<html lang="zxx">


<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/fonts/flaticon.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

<title>Ektha developers</title>

<link rel="icon" type="image/png" href="wp-content/uploads/sites/3/2016/09/logo.png">
<!--nav bar-->

<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='http://www.google.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Property Rent &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Property Rent &raquo; Comments Feed" href="comments/feed/index.html" />
	

<link rel='stylesheet' id='estato-style-css'  href='wp-content/themes/estato/style080f.css?ver=5.8.2' type='text/css' media='all' />

<script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>

<script type='text/javascript' src='wp-content/themes/estato/js/header.misc080f.js?ver=5.8.2' id='estato-header-misc-js'></script>


<!--nav end-->
</head>
<body>

<!--div class="preloader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner">
<div class="circle1"></div>
<div class="circle2"></div>
<div class="circle3"></div>
</div>
</div>
</div>
</div-->

<body class="home page-template-default page page-id-5 theme-estato bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuCenterEnabled btStickyEnabled btDarkSkin btBelowMenu btNoSidebar" data-autoplay="0" >



    <div class="grid-lines">
    
    <div class="container">
    
    <div class="row">
    
    <div class="col-xs-3 col"></div>
    
    <div class="col-xs-3 col"></div>
    
    <div class="col-xs-3 col"></div>
    
    <div class="col-xs-3 col"></div>
    
    </div>
    
    </div>
    
    </div>
    
    
    <div class="btPageWrap" id="top">
    
        <header class="mainHeader btClear gutter ">
    
            <div class="port">
    
    <div class="topBar btClear">
    <div class="topBarPort btClear">
    <!--div class="topTools btTopToolsLeft btTextLeft">
    <a href="#slider" target="_self" class="btIconWidget btSpecialHeaderIcon"><span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor" ><span  data-ico-s7="&#xe66b;" class="btIcoHolder"></span></span></span><span class="btIconWidgetContent"><span class="btIconWidgetTitle">Open House</span><span class="btIconWidgetText">June 5th 2016, 12pm</span></span></a> </div><!-- /ttLeft -->
    <!--div class="topTools btTopToolsRight btTextRight">
    <a href="tel:0800-123-45678" target="_self" class="btIconWidget btSpecialHeaderIcon"><span class="btIconWidgetIcon"><span class="btIco btIcoDefaultType btIcoDefaultColor" ><span  data-ico-s7="&#xe670;" class="btIcoHolder"></span></span></span><span class="btIconWidgetContent"><span class="btIconWidgetTitle">Call us now</span><span class="btIconWidgetText">0800-123-45678</span></span></a> </div><!-- /ttRight -->
    </div><!-- /topBarPort -->
    </div><!-- /topBar -->
    
    <div class="btLogoArea menuHolder">
    
    
    <span class="btVerticalMenuTrigger"></span>
    
    <span class="btHorizontalMenuTrigger"></span>
    
    
    <div class="logo">
    
    <span>
    
    <a href="index-4.html"><img  class="btMainLogo" data-hw="7.5681818181818" src="wp-content/uploads/sites/3/2016/09/logo.png" alt="ekthadevelopers"></a>
    </span>
    
    </div><!-- /logo -->
    
    
    <div class="menuPort">
    
    
    <nav>
    
     <ul id="menu-primary-menu" class="menu">
        <li id="menu-item-107" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-107">
            <a href="index.html">Home</a>
        </li>
        <li id="menu-item-108" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-108">
            <a href="about.html">About Us</a>
        </li>
       
        <li id="menu-item-110" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-110">
            <a href="projects.html">Projects</a>
        </li>
        <li id="menu-item-111" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-111">
            <a href="contact.php">Contact</a>
        </li>
       
    </ul>
    </nav>
    
    </div><!-- .menuPort -->
    
    </div><!-- /menuHolder / btBelowLogoArea -->
    
    </div><!-- /port -->
    
     </header>


<!--div class="navbar-area">

    <div class="mobile-nav">
    <a href="index-2.html" class="logo">
    <img src="assets/img/logos/footer-logo.png" alt="Logo">
    </a>
    </div>
    
    <div class="oftop-nav main-nav">
    <div class="container-fluid">
    <nav class="container-max navbar navbar-expand-md navbar-light ">
    <a class="navbar-brand" href="index-4.html">
    <img src="assets/img/logos/logo3.png" alt="Logo">
    </a>
    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
    <li class="nav-item">
    <a href="index-4.html" class="nav-link active">
    Home

    </a>
    
    </li>
    <li class="nav-item">
    <a href="about.html" class="nav-link">
    About Us
    </a>
    </li>

    <li class="nav-item">
    <a href="projects.html" class="nav-link">
    Projects
    </a>
    </li>

    <li class="nav-item">
    <a href="contact.php" class="nav-link">
    Contact
    </a>
    </li>
    </ul>
    <div class="appointment-btn">
    <a href="#" class="default-btn default-hot-toddy">
    Schedule appointment
    <i class='bx bx-right-arrow-alt'></i>
    </a>
    </div>
    </div>
    </nav>
    </div>
    </div>
    </div-->
    


<div class="inner-banner inner-bg1">
<div class="container-fluid">
<div class="container-max">
<div class="inner-title">
 <span>CONTACT US</span>
<h2>We’re Always Helpful <br> To Lend A Hand</h2>
</div>
</div>
</div>
</div>


<!--div class="service-area-four pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="service-card service-card-bg-three section-bg">
<i class='flaticon-bankrupt'></i>
<a href="service-details.html">
<h3>Property Managment</h3>
</a>
<p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
<a href="service-details.html" class="learn-more-btn">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="service-card service-card-bg-three active">
<i class='flaticon-value'></i>
<a href="service-details.html">
<h3>Commercial Development</h3>
</a>
<p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
<a href="service-details.html" class="learn-more-btn">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="service-card service-card-bg-three section-bg">
<i class='flaticon-time-management'></i>
<a href="service-details.html">
<h3>Construction Management</h3>
</a>
<p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
<a href="service-details.html" class="learn-more-btn">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="service-card service-card-bg-three section-bg">
<i class='flaticon-house'></i>
<a href="service-details.html">
<h3>Residentital Development</h3>
</a>
<p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
<a href="service-details.html" class="learn-more-btn">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
</div>
</div>
</div-->

<div class="blank-area pt-200 pb-140">
   
 </div>
    

 <div class="map-area-two">
    <div class="container-fluid m-0 p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.4264629261916!2d74.73509651413933!3d13.385899009275104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcbd03422b23ad%3A0x10786008e3284365!2sEktha%20Heights!5e0!3m2!1sen!2sin!4v1644904222637!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="contact-wrap">
    <div class="contact-form">
    <span>SEND MESSAGE</span>
    <h2>Contact With Us</h2>
    <form id="contactForm">
    <div class="row">
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <i class='bx bx-user'></i>
    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <i class='bx bx-user'></i>
    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <i class='bx bx-phone'></i>
    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <i class='bx bx-file'></i>
    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-12 col-md-12">
    <div class="form-group">
    <i class='bx bx-envelope'></i>
    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-12 col-md-12">
    <button type="submit" name="submit" class="default-btn default-hot-toddy">
    Send Message
    <i class='bx bx-right-arrow-alt'></i>
    </button>
    <div id="msgSubmit" name="msgSubmit" class="h3 text-center hidden"></div>
    <div class="clearfix"></div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>

    <!--div class="newsletter-area pt-100 pb-70">
        <div class="container">
        <div class="row">
        <div class="col-lg-7">
        <div class="newsletter-content">
        <i class='flaticon-email'></i>
        <h2>Join our weekly <b class="section-color">Newsletter</b></h2>
        </div>
        </div>
        <div class="col-lg-5">
        <div class="newsletter-form-area">
        <form class="newsletter-form" data-toggle="validator" method="POST">
        <input type="email" class="form-control" placeholder="Your Email*" name="EMAIL" required autocomplete="off">
        <button class="default-btn default-hot-toddy" type="submit">
        Subscribe
        <i class='bx bx-right-arrow-alt'></i>
        </button>
        <div id="validator-newsletter" class="form-result"></div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div-->

    <footer class="footer-area">
        <div class="footer-top footer-bg2 pt-100 pb-70">
        <div class="container">
        <div class="row">
        <div class="col-lg-4 col-xxl-3 col-md-6">
        <div class="single-footer-widget single-footer-color">
        <a href="index-5.html" class="logo">
        <img src="wp-content/uploads/sites/3/2016/09/logo.png" alt="Logo">
        </a>
        <!--p>
        Lorem ipsum dolor sit ame consectetur adisicing elitsed do eiusmod
        tempor labet dolore magna aliquaUt
        </p-->
        <ul class="social-link">
        <li>
        <a href="https://www.facebook.com/pages/category/Real-Estate-Title---Development/Ektha-Developers-1179705638729168/" target="_blank"><i class='bx bxl-facebook'></i></a>
        </li>
        <!--li>
        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
        </li-->
        <li>
        <a href="https://api.whatsapp.com/send?phone=9845148913" target="_blank"><i class='bx bxl-whatsapp'></i></a>
        </li>
        <!--li>
        <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
        </li>
        <li>
        <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
        </li-->
        </ul>
        </div>
        </div>
        <div class="col-lg-2 col-xxl-3 col-md-6">
        <div class="single-footer-widget single-footer-color pl-70">
        <h3>SERVICES</h3>
        <ul class="footer-list">
        <li>
        <a href="index-4.html">
        <i class='bx bx-plus'></i>
        Home
        </a>
        </li>
        <li>
        <a href="about.html">
        <i class='bx bx-plus'></i>
        About Us
        </a>
        </li>
        <li>
        <a href="projects.html">
        <i class='bx bx-plus'></i>
        Projects
        </a>
        </li>
        <li>
        <a href="contact.php">
        <i class='bx bx-plus'></i>
        Contact
        </a>
        </li>
        <!--li>
        <a href="terms-condition.html" target="_blank">
        <i class='bx bx-plus'></i>
        Terms of Use
        </a>
        </li>
        <li>
        <a href="privacy-policy.html" target="_blank">
        <i class='bx bx-plus'></i>
        Privacy Policy
        </a>
        </li-->
        </ul>
        </div>
        </div>
        <div class="col-lg-3 col-xxl-3 col-md-6">
        <div class="single-footer-widget single-footer-color pl-3">
        <h3> ADDRESS</h3>
        <ul class="footer-contact-list">
        <li>
        <span>Ektha Developers Ektha HeightsCommercial & Residence Building Santhekatte, Udupi – 576 105</span> 
        </li>
        <li>
        <span>Email : ekthadeveloeprs@gmail.com </span> 
        </li>
        <li>
        <span>Website : www.ekthadevelopers.com</span> 
        </li>
        <li>
        <span>Phone : 9845148913 / 7090948913 / 7026048913</span>
        </li>
		<li>
        <span>Whatsapp: 9845148913</span>
        </li>
        </ul>
        </div>
        </div>
        <div class="col-lg-3 col-xxl-3 col-md-6">
            <div class="single-footer-widget single-footer-color pl-5">
            <h3>Gallery</h3>
             <ul class="footer-gallery">
            <li>
            <a href="#">
            <img src="BlockA/image.jpg" alt="image">
            </a>
            </li>
            <li>
            <a href="#">
            <img src="BlockA/2.jpg" alt="image">
            </a>
            </li>
            <li>
            <a href="#">
            <img src="BlockB/4.jpg" alt="image">
            </a>
            </li>
            <li>
            <a href="#">
            <img src="BlockB/image1.jpg" alt="image">
            </a>
            </li>
            <li>
            <a href="#">
            <img src="BlockC/1.jpg" alt="image">
            </a>
            </li>
            <li>
            <a href="#">
            <img src="BlockC/2.jpg" alt="image">
            </a>
            </li>
             </ul>
            </div>
            </div>
        <!--div class="col-lg-3 col-xxl-3 col-md-6">
        <div class="single-footer-widget single-footer-color pl-3">
        <h3>CALL AGENT</h3>
        <ul class="footer-profile">
        <li>
        <div class="profile">
        <img src="assets/img/footer-profile.png" alt="Images">
        </div>
        <div class="name">
        <h3>Jordhan Lows</h3>
        <span>Sales Manager</span>
        </div>
        <div class="content">
        <a href="tel:+1800100900">+1800100900</a>
        <span><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84c5e0e9edeac4ebe2f0ebf4aae7ebe9">[email&#160;protected]</a></span>
        </div-->
        </li>
        </ul>
        </div>
        </div-->
        </div>
        </div>
        </div>
        <div class="footer-bottom">
        <div class="container">
        <div class="bottom-text">
        <p>
        Copyright © 2021 All Rights Reserved | Designed by 
        <a href="http://sparkitsolutions.in" target="_blank">Spark</a>
        </p>
        </div>
        </div>
        </div>
        </footer>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.slim.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/carousel-thumbs.js"></script>

<script src="assets/js/meanmenu.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/custom.js"></script>
</body>


</html>