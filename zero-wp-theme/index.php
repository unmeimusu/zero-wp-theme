<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_url() ); ?>" type="text/css" />
		<?php wp_head(); ?>
	</head>
	<body>
		<?php the_content(); ?>
	</body>
</html>