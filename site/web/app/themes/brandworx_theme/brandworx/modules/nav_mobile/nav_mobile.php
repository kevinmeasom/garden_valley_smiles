<?php
add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_script( 'nav_mobile_script', get_template_directory_uri() . '/brandworx/modules/nav_mobile/nav_mobile.js', array(), '1', true );
} );

function brandworx_nav_mobile() {
    ?>
        <div id="mobile_nav_wrap">
            <svg class="mobile-nav-trigger mobile-nav-trigger-open icon">
                <use xlink:href="#burger" />
            </svg>
            <div id="mobile_nav_bg"></div>
            <div class="mobile-nav-outer">
                <svg class="mobile-nav-trigger mobile-nav-trigger-close icon">
                    <use xlink:href="#close" />
                </svg>
                <div class="mobile-nav-inner flex-col align-center justify-start">
                    <div class="mobile-nav-body flex-col align-center justify-start">
                        <?php if ( get_field('logo','option') ) : $image = get_field('logo','option'); ?>
                            <a id="mobile_logo" class="flex align-center justify-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        <?php endif; ?>
                        
                        <?php if ( get_field('mobile_nav_cta','option') && get_field('mobile_nav_cta_link','option') ) : ?>
                            <a href="<?php echo get_field('mobile_nav_cta_link','option'); ?>" class="mobile-cta shop-btn btn btn-primary"><?php echo get_field('mobile_nav_cta','option'); ?></a>
                        <?php endif; ?>

                        <?php
                            wp_nav_menu( array(
                                'theme_location' 	=> 'mobile',
                                'menu_id'        	=> 'mobile_menu',
                                'menu_class'       	=> 'mobile_menu',
                                'container_id'	    => 'mobile_menu_container',
                                'container_class'	=> 'menu-container flex align-center justify-center',
                            ) );
                        ?>
                        <div id="mobile_search" class="flex align-center justify-center">
                            <svg class="icon"><use xlink:href="#search" /></svg>
                            <?php the_widget( 'WP_Widget_Search'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
}