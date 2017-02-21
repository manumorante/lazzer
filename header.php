<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php // google_font 'Istok+Web:400,700','js' ?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" media="screen" />

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/lib/_jquery-1.11.1.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/lib/_bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/lib/modernizr-respond.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/lib/iscroll.js"></script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

  <div class="container">
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Lazzer</a>
      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="lazzer"><a href="/lazzer/">Lazzer</a></li>
          <li class="actividad"><a href="/actividad/">Actividad</a></li>
          <li class="servicios"><a href="/servicios/">Servicios</a></li>
          <li class="trabajos"><a href="/trabajos/">Trabajos</a></li>
          <li class="localizacion"><a href="/localizacion/">Localización</a></li>          
          <li class="contacto"><a href="/contacto/">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="main-wrapper">

