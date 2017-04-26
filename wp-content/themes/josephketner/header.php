<?php

/**

 * The Header template for our theme

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Joseph_Ketner

 * @since Joseph Ketner 1.0

 */

?><!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head> 

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

	<![endif]-->

	<?php wp_head(); ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>

$(document).ready(function(){

  $(".clk-here-cntct").click(function(){

    $(".clk-here-form").toggle(4000);

  });

});

</script>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-59340273-1', 'auto');

  ga('send', 'pageview');



</script>

<!-- Hotjar Tracking Code for http://www.josephketnerconstruction.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:437505,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>



<body <?php body_class(); ?>>



	<div class="contact-on-right">

        <div class="contact-div-right">

            <div class="clk-here-cntct">Click here to contact us</div>

            <div class="clk-here-form"><?php echo do_shortcode('[contact_form]'); ?></div>

        </div>

    </div>

		<header id="masthead" class="site-header" role="banner">

            <div class="site-header-top">

                <div class="hfeed site">

                	 <?php dynamic_sidebar('Header Top Area'); ?>

					 <?php dynamic_sidebar('Header Top sociallink'); ?>

                     <?php wp_nav_menu( array( 'theme_location' => 'second', 'menu_class' => 'nav-menu' ) ); ?>

                </div>

            </div>

            <div class="hfeed site">

                <div class="header-left">

                    <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

                        <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Joseph Ketner" >

                    </a> 
                </div>

                <div class="header-right">                    

                    <div id="navbar" class="navbar">

                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">

                            <h3 class="menu-toggle"><?php _e( 'Menu', 'josephketner' ); ?></h3>

                            <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'josephketner' ); ?>"><?php _e( 'Skip to content', 'josephketner' ); ?></a>

                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

                        </nav><!-- #site-navigation -->

                    </div><!-- #navbar -->

                    <div class="header-right-top">

                        <?php dynamic_sidebar('Header Right Top'); ?>

                    </div>

                </div>

            </div>    

		</header><!-- #masthead -->

        <?php if(Is_front_page()) { ?>

			<div class="slider-area">

                <div class="hfeed site">

					<?php dynamic_sidebar('Slider Area'); ?>

                    <div class="site-main-top"></div>         

       			</div>   

        	</div>    

		<? } ?>

		

        	<div id="main" class="site-main">

        		<div class="hfeed site">

