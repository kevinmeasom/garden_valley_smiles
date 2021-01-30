<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brandworx_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( get_field('favicon','option') ) : $image = get_field('favicon','option'); ?>
        <link rel="shortcut icon" href="<?php echo $image['url']; ?>" />
    <?php endif; ?>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brandworx_theme' ); ?></a>
    <input type="hidden" name="site_section" value="site-search" />

	<div id="waypoint"></div>

    <header id="masthead" class="site-header">

        <div class="site-navigation-wrap flex align-center justify-center">

            <div class="header-block header-left">
                <div class="header-block-inner flex align-center justify-start">
                    <?php if ( get_field('logo','option') ) : $image = get_field('logo','option'); ?>
                        <div id="logo_wrap">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>


            <nav id="site-navigation" class="main-navigation header-block header-middle flex align-center justify-center">
                <?php
                    wp_nav_menu( array(
                        'theme_location' 	=> 'primary',
                        'menu_id'        	=> 'primary_menu',
                        'menu_class'       	=> 'menu',
                        'container_id'	    => 'primary_menu_container',
                        'container_class'	=> 'menu-container'
                    ) );
                ?>
            </nav><!-- #site-navigation -->

            <div class="header-block header-right">
                <div class="header-block-inner flex align-center justify-end">
                    <?php if ( get_field('phone_number','option') ) : ?>
                        <a href="tel:<?php echo get_field('phone_number','option'); ?>" class="btn btn-primary"><?php echo get_field('phone_number','option'); ?></a>
                    <?php endif; ?>
                    <?php if(function_exists('brandworx_nav_mobile')){
                        brandworx_nav_mobile();
                    } ?>
                </div>
            </div>

        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">