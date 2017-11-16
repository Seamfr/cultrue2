<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              		
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700,900' rel='stylesheet' type='text/css'>
	
		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js" type="text/javascript" charset="utf-8"></script>    
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jcarousel.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/skins/tango/skin.css" />	
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<?php $shortname = "modern"; ?>
	
	<style type="text/css">
	body {
	<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
		background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
	<?php } ?>		
	<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
		background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
	<?php } ?>	
	}
	</style>		
	
	<script>
	$(document).ready(function() {
		designer_slider('<?php bloginfo('stylesheet_directory'); ?>');
	});
	</script>
	
</head>
<body>
<header id="header">
	<div class="header_top">
		<div class="container">
			<div class="header_menu">
				<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id='); ?>
				<div class="clear"></div>
			</div><!--//header_menu-->
			<div class="header_social">
				<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
				<?php  } ?>
				<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gplus-icon.png" alt="google plus" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_instagram_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_instagram_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-icon.png" alt="instagram" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_tumblr_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_tumblr_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin-icon.png" alt="vimeo" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
				<?php } ?>
				
							
				<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
				<?php } ?>
			</div><!--//header_social-->
			<div class="clear"></div>
		</div><!--//container-->
	</div><!--//header_top-->
	<div class="logo_cont">
		<div class="container">
			<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" alt="logo" class="logo" /></a>
			<?php } else { ?>	
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo" class="logo" /></a>
			<?php } ?>		
			<div class="clear"></div>
		</div><!--//container-->
	</div><!--//logo_cont-->
</header><!--//header-->
<?php if(!is_page() && !is_single() && !is_archive()) { ?>
<?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>

<?php } ?>
<?php } ?>