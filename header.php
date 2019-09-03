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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/764611972e.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style>.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute!important;width:1px;word-wrap:normal!important}*{box-sizing:border-box;color:#555}ul{list-style:none;padding:0}body{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;text-rendering:optimizeLegibility;font-family:'Dosis',sans-serif!important;line-height:1.6;color:#555;margin:0 auto!important}main{max-width:1280px;margin:0 auto}p{font-family:'Avenir',sans-serif}.header-container{text-align:center;margin:0;padding-bottom:1rem;color:#555}.main-title{margin:0;padding:2rem 0;font-size:1.5rem;font-weight:600;color:white;background-image:linear-gradient(120deg,#FF9696 0%,#BFBBE8 50%,#B5F7FF 100%)}.main-title a{text-decoration:none!important;color:inherit!important}.nav-bar ul{display:flex;flex-wrap:wrap;justify-content:center;margin-bottom:0}.nav-bar ul li{margin:1rem 2rem;color:#555}.nav-bar ul li a{color:inherit;position:relative;display:inline-block;text-decoration:none}.nav-bar ul li a::after{position:absolute;bottom:0;left:0;content:'';width:100%;height:0.1rem;background:#555;transform:scale(0,1);transform-origin:right top}.header-bottom-line{height:.2rem;width:100%;background-image:linear-gradient(120deg,#FF9696 0%,#BFBBE8 50%,#B5F7FF 100%)}.screen-area{position:relative;z-index:-1;background-size:cover}.screen-area::before{content:'';background-color:rgba(0,0,0,.2);position:absolute;top:0;right:0;bottom:0;left:0;z-index:-1}.screen-text{width:100%;text-align:center;line-height:18rem;color:#fff;z-index:1}.article-container{width:100%;padding:0;font-family:'Avenir',sans-serif}.article-content{margin-top:4.5rem}.article-content p{font-size:1.3rem;margin-bottom:40px}.article-container-topPage{max-width:820px;margin:100px auto 20px auto}.flex-flow1{display:flex;flex-direction:row-reverse}.topPage-wrapper1{padding:70px 35px 0}.img-face-container{box-sizing:border-box;padding:35px 35px 35px 10px}.img-face{width:100%;border-radius:50%}.flex-flow2{display:flex;padding-top:70px}.single-link-container{margin-bottom:40px}.single-link1{padding:10px 20px;color:white;font-size:1.3rem;padding:5px 10px;border-radius:2rem;position:relative;background-image:linear-gradient(120deg,#86DDD0 0%,#C5B3F5 100%);white-space:nowrap;opacity:0.8}@media screen and (max-width:768px){.nav-bar ul li{margin:0.5rem 1.5rem}.article-container-topPage{margin:50px auto 20px auto}.article-content{margin-top:0}.article-content p{font-size:1rem;margin-bottom:20px}.flex-flow1,.flex-flow2{flex-direction:column;padding-top:30px}.topPage-wrapper1{padding:50px 35px 0}.img-face{height:150px;width:150px}.img-face-container{width:150px;margin:0 auto;padding:0}.single-link1{margin:0 auto;display:table}}</style>
	<link rel="preload" href="style.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> 
	<noscript><link rel="stylesheet" href="style.css"></noscript>
	<script>/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
    (function( w ){
	"use strict";
	// rel=preload support test
	if( !w.loadCSS ){
		w.loadCSS = function(){};
	}
	// define on the loadCSS obj
	var rp = loadCSS.relpreload = {};
	// rel=preload feature support test
	// runs once and returns a function for compat purposes
	rp.support = (function(){
		var ret;
		try {
			ret = w.document.createElement( "link" ).relList.supports( "preload" );
		} catch (e) {
			ret = false;
		}
		return function(){
			return ret;
		};
	})();

	// if preload isn't supported, get an asynchronous load by using a non-matching media attribute
	// then change that media back to its intended value on load
	rp.bindMediaToggle = function( link ){
		// remember existing media attr for ultimate state, or default to 'all'
		var finalMedia = link.media || "all";

		function enableStylesheet(){
			// unbind listeners
			if( link.addEventListener ){
				link.removeEventListener( "load", enableStylesheet );
			} else if( link.attachEvent ){
				link.detachEvent( "onload", enableStylesheet );
			}
			link.setAttribute( "onload", null ); 
			link.media = finalMedia;
		}

		// bind load handlers to enable media
		if( link.addEventListener ){
			link.addEventListener( "load", enableStylesheet );
		} else if( link.attachEvent ){
			link.attachEvent( "onload", enableStylesheet );
		}

		// Set rel and non-applicable media type to start an async request
		// note: timeout allows this to happen async to let rendering continue in IE
		setTimeout(function(){
			link.rel = "stylesheet";
			link.media = "only x";
		});
		// also enable media after 3 seconds,
		// which will catch very old browsers (android 2.x, old firefox) that don't support onload on link
		setTimeout( enableStylesheet, 3000 );
	};

	// loop through link elements in DOM
	rp.poly = function(){
		// double check this to prevent external calls from running
		if( rp.support() ){
			return;
		}
		var links = w.document.getElementsByTagName( "link" );
		for( var i = 0; i < links.length; i++ ){
			var link = links[ i ];
			// qualify links to those with rel=preload and as=style attrs
			if( link.rel === "preload" && link.getAttribute( "as" ) === "style" && !link.getAttribute( "data-loadcss" ) ){
				// prevent rerunning on link
				link.setAttribute( "data-loadcss", true );
				// bind listeners to toggle media back
				rp.bindMediaToggle( link );
			}
		}
	};

	// if unsupported, run the polyfill
	if( !rp.support() ){
		// run once at least
		rp.poly();

		// rerun poly on an interval until onload
		var run = w.setInterval( rp.poly, 500 );
		if( w.addEventListener ){
			w.addEventListener( "load", function(){
				rp.poly();
				w.clearInterval( run );
			} );
		} else if( w.attachEvent ){
			w.attachEvent( "onload", function(){
				rp.poly();
				w.clearInterval( run );
			} );
		}
	}


	// commonjs
	if( typeof exports !== "undefined" ){
		exports.loadCSS = loadCSS;
	}
	else {
		w.loadCSS = loadCSS;
	}
	}( typeof global !== "undefined" ? global : this ) );

  	</script>
	<?php wp_head(); ?>

	<!--[if lt IE 9]>
		<script href="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script href="https://oss/maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<meta name="google-site-verification" content="sYBpuNysosio1_pW1SD7Jj22rPhChPM0cH1Jw-I5GtM" />
</head>

<body <?php body_class(); ?>>
<div id="primary" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'colors' ); ?></a>

	<!--=========================================
	HEADER
	==========================================-->
	<header itemscope="itemscope" role="contentinfo" itemtype="http://schema.org/WPHeader">
        <div class="header-container">
            <h1 class="main-title">
				<a href="https://miyazakimaiko.com">
					<? echo get_custom_logo(); ?>
				</a>
			</h1>
            
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'container'       => false,
					'menu_class'      => 'nav-bar nav-bar-fixed-top',
					'items_wrap'      => '<ul>%3$s</ul>',
					'walker'          => new Custom_Walker_Nav_Menu
				));
			?>

            <div class="header-bottom-line"></div>
        </div>
    </header>

	