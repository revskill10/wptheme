<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="description" content="A site about foo." />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" />
	</head>
	<body <?php body_class();?>>
		<div id="header">
		<h1><?php bloginfo('name'); ?></h1>
		</div> <!-- #header -->

		<div id="main">
			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<h2>Not Found</h2>
				<p>The posts you were looking for could not be found.</p>
			<?php endif; ?>
		</div> <!-- #main -->

		<div id="sidebar">
			<?php if ( !dynamic_sidebar('Sidebar') ) : endif; ?>
		</div> <!-- #sidebar -->
		
		<div id="footer">
		<p>&copy; 2010 My Site.</p>
		</div> <!-- #footer -->
		<?php wp_footer(); ?>
	</body>
</html>