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
               <a href="#page-top"><img src="<?php echo base_url(); ?>assets/img/Blooms_logo_yellow.png"  alt=""></a>
            </div>
         </div>
		 
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-brand-centered">
   		  <div class="container">
                  <ul class="nav navbar-nav page-scroll navbar-left">
                     <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                     <!-- Dropdown -->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
                           <li><a href="<?php echo base_url('policy'); ?>">Our Policy</a></li>
                        </ul>
                     </li>
                     <li><a href="#gallery">Testimonials</a></li>                  
                     <li><a href="#activities">Activities</a></li>
                  </ul>
                  <ul class="nav navbar-nav page-scroll navbar-right">
                     <li><a href="<?php echo base_url('photos'); ?>">Gallery</a></li>
                     <!-- Dropdown -->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="#latestblog">Latest Blog Posts</a></li>
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
                           <li><a href="#contact">Contact Us</a></li>
                           <li><a href="<?php echo base_url('jobs'); ?>">Vacancies</a></li>
                        </ul>
                     </li>
                     <li><a href="#">Shop</a></li>
                  </ul>
   			  </div>
			 </div>
			 <!-- /.navbar-collapse -->
		  </nav>
		  <!-- /navbar ends -->