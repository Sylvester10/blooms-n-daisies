<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- <meta name="description" content="<?php echo school_description; ?>"> -->
      <meta name="keyword" content="<?php echo school_keywords; ?>" />
      <!-- Page title -->
      <title><?php echo $title; ?> | <?php echo $school_name; ?></title>
      <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>assets/js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url(); ?>assets/fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url(); ?>assets/fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:700,900' rel='stylesheet' type='text/css'>
      <!-- Theme CSS -->
      <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
      <!-- Color Style CSS -->
      <link href="<?php echo base_url(); ?>assets/styles/funtime.css" rel="stylesheet">
      <!-- Owl Slider & Prettyphoto -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/prettyPhoto.css">
      <!-- LayerSlider stylesheet -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/layerslider/css/layerslider.css">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/apple-touch-icon-114x114.png">
      <link rel="shortcut icon" href="<?php echo school_favicon; ?>" type="image/x-icon">
      
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
   <!-- Page width 'Boxed' of 'Full' -->
   <div class="full">
      <!-- Preloader -->
      <div id="preloader">
         <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
         </div>
      </div>	   
      <!-- Navbar -->
      <nav class="navbar navbar-custom navbar-fixed-top">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-brand-centered page-scroll">
               <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/Blooms_logo_yellow.png"  alt=""></a>
            </div>
         </div>
		 
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-brand-centered">
		  <div class="container">
               <ul class="nav navbar-nav page-scroll navbar-left">
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <!-- Dropdown -->
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
                        <li><a href="<?php echo base_url('policy'); ?>">Our Policy</a></li>
                     </ul>
                  </li>
                  <li><a href="<?php echo base_url(); ?>#gallery">Testimonials</a></li>
                  <li><a href="<?php echo base_url(); ?>#activities">Activities</a></li>
               </ul>
               <ul class="nav navbar-nav page-scroll navbar-right">
                  <li><a href="<?php echo base_url('photos'); ?>">Gallery</a></li>
                     <!-- Dropdown -->
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>#latestblog">Latest Blog Posts</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo base_url('events'); ?>">Events</a></li>
                        <!-- <li><a href="<?php echo base_url('newsletters'); ?>">Newsletters</a></li> -->
                     </ul>
                  </li>
                  <li><a href="<?php echo base_url('admission'); ?>">Admission</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(''); ?>#contact">Contact Us</a></li>
                        <li><a href="<?php echo base_url('jobs'); ?>">Vacancies</a></li>
                     </ul>
                  </li>
                  <li><a href="#">Shop</a></li>
					</li>
               </ul>
			  </div>
			 </div>
			 <!-- /.navbar-collapse -->
		  </nav>
		  <!-- /navbar ends -->


      <!-- /jumbotron -->
      <div class="blog jumbotron">
         <div class="container">
            <div class="col-lg-6 col-centered well text-center" style="background-image: url('assets/img/blogheader.jpg');">
               <h1><?php echo $title; ?></h1>
            </div>
         </div>
         <!-- /.container -->
      </div>
      <!-- /jumbotron -->
     
      <!-- Clouds SVG Divider -->
         <svg id="deco-clouds2" class="head hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M-5 100 Q 0 20 5 100 Z
               M0 100 Q 5 0 10 100
               M5 100 Q 10 30 15 100
               M10 100 Q 15 10 20 100
               M15 100 Q 20 30 25 100
               M20 100 Q 25 -10 30 100
               M25 100 Q 30 10 35 100
               M30 100 Q 35 30 40 100
               M35 100 Q 40 10 45 100
               M40 100 Q 45 50 50 100
               M45 100 Q 50 20 55 100
               M50 100 Q 55 40 60 100
               M55 100 Q 60 60 65 100
               M60 100 Q 65 50 70 100
               M65 100 Q 70 20 75 100
               M70 100 Q 75 45 80 100
               M75 100 Q 80 30 85 100
               M80 100 Q 85 20 90 100
               M85 100 Q 90 50 95 100
               M90 100 Q 95 25 100 100
               M95 100 Q 100 15 105 100 Z">
            </path>
         </svg>