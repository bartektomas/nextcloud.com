<!DOCTYPE html>
<html class="no-js" itemscope itemtype="http://schema.org/Organization" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('-', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta itemprop="name" content="Nextcloud">
	<meta itemprop="description" content="Nextcloud is an open source, self-hosted file sync and share and communication app platform. Access  &amp; sync your files, contacts, calendars  &amp; communicate and collaborate across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta name="description" content="Nextcloud is an open source, self-hosted file sync and share and communication app platform. Access  &amp; sync your files, contacts, calendars  &amp; communicate and collaborate across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta itemprop="image" content="https://nextcloud.com/wp-content/themes/nextcloudorgnew/assets/img/home/ncsplash.png">
	<meta name="theme-color" content="#0082c9">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />

	<!-- New styles -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css" rel="stylesheet">

	<!-- Fixes for the new style on legacy pages -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/legacy-fixes.css" rel="stylesheet">


	<!-- New JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bodymovin.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>

	<!-- Old styles below -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/old/main.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/old/font-awesome.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/old/styles.css"/>
	<script type="text/javascript">
		var templateUrl = '<?= get_bloginfo('template_url'); ?>';
	</script>

	<?php wp_head(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/scripts.min.js"></script>
	<?php if(is_page('news')) { ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/vendor/jquery.infinitescroll.min.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/old/vendor/jquery.masonry.min.js"></script>
	<?php } ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/navigation.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>



