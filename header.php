<?php 
	include_once('constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= SITE_TITLE ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="<?=AUTHOR ?>">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
<!--[if IE]>
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link rel="stylesheet" href="styleswitcher/css/styleswitcher.css">
<link id="colours" rel="stylesheet" href="css/colour.css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="css/zocial.css" rel="stylesheet" type="text/css"/>
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<link rel="icon" type="image/png" href="img/favicon.png" sizes="196x196">
<link href="Backend_CSS/developer.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<!--header-->
	<div class="header">
<!--menu-->
    <nav id="main_menu" class="navbar" role="navigation">
      <div class="container">
            <div class="navbar-header">						
        <!--toggle-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				<i class="fa fa-bars"></i>
			</button>
		<!--logo-->
		
			<div class="logo">				
				<a href="index.php"><img src="img/logo.png" alt="Remica Tiles" class="animated bounceInDown" /></a> 
				<div class="caption rev-title-sub logo-text"><?= SITE_TITLE ?></div>
			</div>
		</div>
           
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav pull-right drop_down_nav">
                   			<li class="" id="index"><a href="index.php">Home</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="index-2.html">Slider Revolution</a></li>
                                <li><a href="index2.html">Nerve Slider</a></li>
                                <li><a href="index3.html">NivoSlider</a></li>
                                <li><a href="index4.html">Slides</a></li>
                                <li><a href="index5.html">Html5 Video</a></li>
                            </ul> -->
                        	</li>
                        	 <li class="dropdown page_drop_down" id="about"><a href="about.php">About</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="team.html">The Team</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="full.html">Full Width</a></li>
                                <li><a href="left_sidebar.html">Left Sidebar</a></li>
                                <li><a href="right_sidebar.html">Right Sidebar</a></li>
                            </ul> -->
                        </li>

							<li class="dropdown page_drop_down "><a href="javascript:{}">Works</a>
						<ul class="dropdown-menu">
								<li><a href="portfolio_2columns.html">2 Columns</a></li>
								<li><a href="portfolio_3columns.html">3 Columns</a></li>
								<li><a href="portfolio_4columns.html">4 Columns</a></li>
								<li><a href="portfolio_masonry.html">Masonry</a></li>
								<li><a href="gallery.html">Paginated Gallery</a></li>
								<li><a href="video_gallery.html">Video Gallery</a></li>
								<li><a href="single_portfolio.html">Single Slider</a></li>
								<li><a href="single_video.html">Single Video</a></li>
								<li><a href="single_image.html">Single Image</a></li>
								<li><a href="full_slider.html">Full Slider</a></li>
								<li><a href="full_video.html">Full Video</a></li>
						</ul>
							</li>
							<li class="dropdown "><a href="javascript:{}">Portfolio</a>
						<ul class="dropdown-menu">								
								<li><a href="floor.php">FLOOR</a>

<!--								<ul class="dropdown-menu sub-menu">-->
<!--									<li><a href="#">600x600-mm-digital-glossy-floor-tiles</a></li>-->
<!--									<li><a href="#">600x600-mm-digital-matt-floor-tiles</a></li>-->
<!--									<li><a href="#">600x600-mm-non-digital-floor-tiles</a></li>									-->
<!--								</ul>-->
								<li><a href="wall.php">WALL</a>
<!--								<ul class="dropdown-menu sub-menu">-->
<!--									<li><a href="#">Sub One</a></li>-->
<!--									<li><a href="#">Sub Two</a></li>-->
<!--									<li><a href="#">Sub Three</a></li>-->
<!--									<li><a href="#">Sub Four</a></li>-->
<!--								</ul>-->
						</ul>
							</li>
							<!-- <li class="dropdown"><a href="javascript:{}">Extras</a> -->
						<!-- <ul class="dropdown-menu">
								<li><a href="dribbble_stream.html">Dribbble Stream</a></li>
								<li><a href="alt_footer.html">Alt. Footer & Boxes</a></li>
								<li><a href="pricing_table.html">Pricing Table</a></li>
								<li><a href="404.html">404 Page</a></li>
						</ul> -->
							<!-- </li> -->
							<!-- <li class="dropdown page_drop_down "><a href="javascript:{}">Blog</a> -->
						<!-- <ul class="dropdown-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog_two.html">Blog II</a></li>
								<li><a href="blog_post.html">Blog Post</a></li>
								<li><a href="blog_post2.html">Blog Post II</a></li>
						</ul> -->
							<!-- </li> -->
							<li class="dropdown page_drop_down" id="contact"><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	<!--//header-->