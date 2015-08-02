<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" media="screen">
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" media="screen">
	<link href="<?php echo get_template_directory_uri(); ?>/css/color.css" rel="stylesheet" media="screen">
	<link href="<?php echo get_template_directory_uri(); ?>/css/transitions.css" rel="stylesheet" media="screen">
	<!-- BOOTSTRAP -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<!-- BX SLIDER-->
	<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" media="screen">
	<!-- OWL CAROUSEL -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<!-- PARALLAX BACKGROUNDS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/parallax.css" rel="stylesheet" type="text/css" />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
	
		
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER START-->
    <header>
    	<div style="height:7px;background-color:#58c0ff;" ></div>
        
        <!--NAVIGATION START-->
        <div class="navigation-bar">
        	<div class="container">
            	<div class="logo">
                	<a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/<?=(qtranxf_getLanguage()=='th'?'banner-icon-th.png':'banner-icon-en.png')?>" alt=""></a>
                </div>
                <div class="navigation">
					<div class="navbar">
					  <div class="navbar-inner" >
						<div class="container">
						  <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="nav-collapse collapse">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
						  </div>
						</div>
					  </div>
					</div>
				</div>
            </div>
        </div>
        <!--NAVIGATION END-->
    </header>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="banner">
        <ul class="bxslider">
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/headslider/20150606-2.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/headslider/20150606-3.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/headslider/20150606-4.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/headslider/20150606-5.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/headslider/20150606-6.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/headslider/20150606-7.jpg" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/headslider/20150606-8.jpg" alt=""></li>
        </ul>
        <div class="newsletters">
        	<p>On March 10th, 2015, Assistant Professor Dr. Suree Khemthong (Ph.D.), Dean of School of Management Science, Sukhothai Thammathirat Open University, Thailand,<br />along with school members visited Wawasan Open University, Malaysia.</p>
        </div>
    </div>
    <!--BANNER END-->
    
</div>

		<div id="main" class="site-main">
