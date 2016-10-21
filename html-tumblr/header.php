<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<script src="https://use.typekit.net/bmj0uty.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<link rel="stylesheet" href="../wp-content/themes/Perso simon-harajuku/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../wp-content/themes/Perso simon-harajuku/js/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="../wp-content/themes/Perso simon-harajuku/js/slick/slick-theme.css"/>	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="../wp-content/themes/Perso simon-harajuku/js/slick/slick.min.js"></script>
	<script src="../wp-content/themes/Perso simon-harajuku/js/jquery.tile.min.js" type="text/javascript" charset="utf-8"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

