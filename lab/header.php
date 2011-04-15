<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Framework CSS -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<!--[if lt IE 8]><link rel="stylesheet" href="http://www.blueprintcss.org/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<div class="container">
<div class="navigation">
<ul>
<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
<li><a href="<?php bloginfo('rss2_url'); ?>">Rss</a></li>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
</ul>
</div>
<hr>
<div class="title">
<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
<h3 class="alt"><?php bloginfo('description'); ?></h3>
</div>
<hr><!-- end of header -->
