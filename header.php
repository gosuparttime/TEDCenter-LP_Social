<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
			echo bloginfo( 'name' ); echo ' - '; bloginfo( 'description', 'display' );  ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- icons & favicons -->
<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<!-- media-queries.js (fallback) -->
<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

<!-- html5.js -->
<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!-- wordpress head functions -->
<?php wp_head(); ?>
<!-- end of wordpress head -->
<!--[if lt IE 9]>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/dumbo.css">
<![endif]-->

</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]><div class="alert"><button type="button" class="close" data-dismiss="alert">×</button>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->
<a href="#content" tabindex="1" class="off-screen">skip navigation</a>
<div class="container-fluid gray-bg">
  <div class="container" id="header-wrap">
    <div class="row-fluid">
      <div id="university" role="banner" class="clearfix pad-one-tb">
        <div class="span4"><a href="http://www.syr.edu" target="_blank"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/SU-logo.gif" alt="Syracuse University" /><span class="hide">Syracuse University</span></a></div>
      </div>
    </div>
    <header role="banner" id="top-header" class="row-fluid"> 
      
      <div class="siteinfo" id="page-title"><a class="brand" id="logo"></a>
        <h2>
          <?php echo get_field('site_title', 'option'); ?>
        </h2>
        <h1>
          <?php echo get_field('program_type', 'option'); ?>
        </h1>
        <div id="icon-item">
        <?php  
      $banner_id = get_field('header_image', 'option');
      $banner_size = "square-logo";
      $banner_image = wp_get_attachment_image_src( $banner_id, $banner_size );
      echo '<img src="';
      echo $banner_image[0];
      echo '" alt="';
      the_title();
      echo '"/>'; ?>
      </div>
      </div>
      
    </header>
    <!-- end header --> 
  </div>
</div>
<div class="container">
<div class="row-fluid">
