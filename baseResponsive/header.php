<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!--[if IE 7 ]><html lang="en" class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie ie9"><![endif]-->

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />


	<?php if (is_search()) { ?>


	<?php } ?>

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />


   <!-- IE Fixes -->

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

<!--[if IE 9]><link href="<?php bloginfo('template_directory'); ?>/css/ie9.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--[if IE 8]><link href="<?php bloginfo('template_directory'); ?>/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--[if IE 7]><link href="<?php bloginfo('template_directory'); ?>/css/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class($class); ?>>

<div class="body">

	<header class="header">

		<?php bloginfo('name'); ?>

		<?php bloginfo('description'); ?>

		<?php wp_nav_menu( array(
			 'theme_location' => 'header-menu',
			 'container' =>false,
			 'menu_class' => 'nav',
			 'echo' => true,
			 'before' => '',
			 'after' => '',
			 'link_before' => '',
			 'link_after' => '',
			 'depth' => 0,
			 'walker' => new description_walker())
		); ?> <!-- WordPress Menu Structure -->

	</header><!-- header -->