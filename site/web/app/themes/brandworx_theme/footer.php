<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brandworx_Theme
 */

?>

    </div><!-- #content -->
    
    <!-- Contact -->
    <?php brandworx_section_contact(['title' => get_field('contact_title','option'), 'text' => get_field('contact_text','option'), 'form' => get_field('contact_form','option')]); ?>
    
    <?php if(is_front_page()){ ?>
        <!-- Testimonials -->
        <?php brandworx_slider_testimonials(['slides' => get_field('testimonials','option')]); ?>
    <?php } ?>

    <?php
        wp_nav_menu( array(
            'theme_location' 	=> 'footer',
            'menu_id'        	=> 'footer_menu',
            'menu_class'       	=> 'menu',
            'container_id'	    => 'footer_menu_container',
            'container_class'	=> 'menu-container'
        ) );
    ?>

    <?php if ( get_field('site_disclaimer','option') ) : ?>
        <div class="site-disclaimer">
            <?php echo get_field('site_disclaimer','option'); ?>
        </div>
    <?php endif; ?>
    

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <div class="site-copy">
                <svg class="icon"><use xlink:href="#diamonds" /></svg> &COPY; <?php bloginfo( 'name' ); ?>. All Rights Reserved.
            </div>

			<div class="site-built flex align-center">
                <!-- <span>Site by <a href="https://brandworx.com/" target="_blank"><img src="<?php //echo bloginfo('stylesheet_directory').'/brandworx/images/brandworx.png'; ?>"></a></span> -->
				<span>Site by <a href="https://brandworx.com/" target="_blank">Brandworx</a></span>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
