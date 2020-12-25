<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sunitha's Child Care</title>
    <meta charset="utf-8">
	<meta name="description" content="An online portal for childe care and pre school ">	
	<meta name="keywords" content="child, childcare, pre-school, sunitha, children">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
	<!--<link rel="shortcut icon" href="favicon.ico" />-->
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:800,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>

  <div class="main">
 
  <!--==============================header=================================-->
    <header> 
	<?php if($_SESSION['name']!="" ){ ?><h3 style="color:white;float:right;" ><a href="logout.php" style="color:white;">Logout</a> | <a href="galleryUp.php" style="color:white;">Gallery Page</a></h3> <?php } ?>
        <h1><a href="index.php"><img src="images/logo.png" alt="logo_text"><span style="display:none;">Logo</span></a></h1>
		
        <nav>  
            <!--<div id="slide">		
                <div class="slider">
                    <ul class="items">
                        <li><img src="images/slider-1.jpg" alt="" /></li>
                        <li><img src="images/slider-2.jpg" alt="" /></li>
                        <li><img src="images/slider-3.jpg" alt="" /></li>
                    </ul>
                </div>	
                <a href="#" class="prev"></a><a href="#" class="next"></a>
            </div>-->
            <ul class="menu">
                <li class="current"><a href="index.php" class="clr-1">Home</a></li>
                <li><a href="programs.php" class="clr-2">programs</a></li>
                <!--<li><a href="about.php" class="clr-2">enrollment</a></li>-->
                <li><a href="schedule.php" class="clr-3">Schedule</a></li>
                <li><a href="gallery.php" class="clr-4">Photos</a></li>
                <li><a href="contacts.php" class="clr-5">Contact</a></li>
            </ul>
         </nav>
    </header>  