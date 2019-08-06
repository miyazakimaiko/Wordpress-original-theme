<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colors
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic:400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<?php wp_head(); ?>

<!--[if lt IE 9]>
	<script href="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script href="https://oss/maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'colors' ); ?></a>

	<!--=========================================
	HEADER
	==========================================-->
	<header itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <div class="header-container">
            <h1 class="main-title"><a href="https://miyazakimaiko.com"><?php bloginfo('name'); ?></a></h1>
            
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'container'       => 'div',
					'container_class' => 'nav-bar nav-bar-fixed-top',
					'menu_class'      => 'nav-bar nav-bar-fixed-top'
				));
			?>

            <div class="header-bottom-line"></div>
        </div>
    </header>
