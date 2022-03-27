<?php
/**
 * Base of experimental wordpress theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
	<body style="margin:0px">
		<?php the_content(); ?>
	</body>
	<?php wp_footer(); ?>
</html>
