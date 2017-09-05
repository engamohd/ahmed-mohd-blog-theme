<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- please IE, do not go into compatibility mode -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- inital zoom and width, to optimize for mobile devices. VERY IMPORTANT! -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <title>
    <?php echo get_bloginfo('name');?>
  </title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
