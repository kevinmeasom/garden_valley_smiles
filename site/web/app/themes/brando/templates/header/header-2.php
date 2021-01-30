<?php
/**
 * Displaying menu section for header type 2
 *
 * @package Brando
 */
?>
<?php
global $brando_theme_settings;

$brando_enable_header = brando_option('brando_enable_header');
if($brando_enable_header == 1 || $brando_enable_header == '2'){

    $brando_options = get_option( 'brando_theme_setting' );
    if($brando_enable_header == '2'){
        $brando_enable_header = (isset($brando_options['brando_enable_header'])) ? $brando_options['brando_enable_header'] : '';
        if($brando_enable_header == 0)
            return;
    }
    $brando_enable_menu = brando_option('brando_enable_menu');
    $brando_header_layout = brando_option('brando_header_layout');
    $brando_header_logo = brando_option('brando_header_logo');
    if(is_array($brando_header_logo))
        $brando_header_logo =  $brando_header_logo['url'];

    $brando_retina = brando_option('brando_retina_logo');
    if(is_array($brando_retina))
        $brando_retina =  $brando_retina['url'];

    $brando_logo_url = brando_option('brando_logo_url');

    $brando_header_menu = brando_option('brando_header_menu');
    if(empty($brando_header_menu))
        $brando_header_menu = (isset($brando_theme_settings['brando_header_menu'])) ? $brando_theme_settings['brando_header_menu'] : '';

    $brando_header_text_color = ' '.brando_option('brando_header_text_color');
    $brando_header_sidebar = brando_option('brando_header_sidebar');
    $brando_hide_menu_onclick = ( brando_option('brando_hide_menu_onclick') == 1 ) ? ' pull-menu-hide': '';
    $enable_h1_in_front_page = ( isset( $brando_theme_settings['enable_h1_in_front_page'] ) && $brando_theme_settings['enable_h1_in_front_page'] ) ? $brando_theme_settings['enable_h1_in_front_page'] : '';
    $brando_header_top_offset = ( isset( $brando_theme_settings['brando_header_top_offset'] ) && !empty( $brando_theme_settings['brando_header_top_offset'] ) ) ? ' data-offset='.$brando_theme_settings['brando_header_top_offset'] : ' data-offset=-59';
?>
    <div class="menu-wrap pull-menu<?php echo esc_attr($brando_hide_menu_onclick); ?>"<?php echo esc_html( $brando_header_top_offset ); ?>>
        <nav class="menu navigation-menu<?php echo esc_attr($brando_header_text_color);?>">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="col-md-12 navbar-header no-padding clearfix">
                        
                        <?php
                        $brando_retina_width = (isset($brando_theme_settings['brando_retina_logo_width']) && !empty($brando_theme_settings['brando_retina_logo_width'])) ? 'max-width:'.esc_attr($brando_theme_settings['brando_retina_logo_width']).'; ' : '';
                        $brando_retina_height = (isset($brando_theme_settings['brando_retina_logo_height']) && !empty($brando_theme_settings['brando_retina_logo_height'])) ? 'height:'.esc_attr($brando_theme_settings['brando_retina_logo_height']).'' : '';
                        $brando_r_style  = '';
                        if( ( is_front_page() || is_home() ) && $enable_h1_in_front_page == '1' ) {
                            echo '<h1>';
                        }
                        ?>
                        <?php if(!empty($brando_header_logo) || $brando_retina){ ?>
                                <a class="navbar-brand no-padding section-link" href="<?php echo esc_url($brando_logo_url); ?>">
                                    <?php
                                    if($brando_header_logo):
                                    ?>
                                        <img alt="<?php echo get_bloginfo('name') ?>" src="<?php echo esc_url($brando_header_logo); ?>" class="logo" />
                                    <?php
                                    endif;
                                    if($brando_retina):
                                        if($brando_retina_width || $brando_retina_height):
                                            $brando_r_style = 'style="'.$brando_retina_width.$brando_retina_height.'"';
                                        endif;
                                        ?>
                                        <img alt="<?php echo get_bloginfo('name') ?>" src="<?php echo esc_url($brando_retina); ?>" class="retina-logo" <?php echo wp_kses($brando_r_style, wp_kses_allowed_html( 'post' )); ?> />
                                        <?php
                                    endif;
                                    ?>
                                </a>
                        <?php }else{
                                ?>
                                <span class="brando-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                                <?php
                            }
                        if( ( is_front_page() || is_home() ) && $enable_h1_in_front_page == '1' ) {
                            echo '</h1>';
                        }
                        ?>
                    </div>
                    <div class="col-md-12 no-padding-lr border-bottom border-top wrap-menu-content accordion-menu clearfix" id="bs-example-navbar-collapse-1">
                        <?php
                            $brando_defaults = $one_theme_location_no_menus = '';
                            $nav_menus = wp_get_nav_menus();
                            $menu_count = count( $nav_menus );
                            $add_new_screen = ( isset( $_GET['menu'] ) && 0 == $_GET['menu'] ) ? true : false;
                            $locations_screen = ( isset( $_GET['action'] ) && 'locations' == $_GET['action'] ) ? true : false;
                            $page_count = wp_count_posts( 'page' );
                            $one_theme_location_no_menus = ( 1 == count( get_registered_nav_menus() ) && ! $add_new_screen && empty( $nav_menus ) && ! empty( $page_count->publish ) ) ? true : false;
                            if (!empty($brando_header_menu) && $one_theme_location_no_menus != 1):
                                $brando_defaults = array(
                                    'menu'            => $brando_header_menu,
                                    'menu_class'      => 'nav navbar-nav alt-font main-menu-height',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'walker'          => new Brando_Nav_Menu,
                                );
                            elseif( has_nav_menu('brandomenu') ):
                                $brando_defaults = array(
                                    'theme_location'  => 'brandomenu',
                                    'menu_class'      => 'nav navbar-nav alt-font main-menu-height',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'walker'          => new Brando_Nav_Menu,
                                );
                            else:
                                $brando_defaults = array(
                                    'container'       => 'ul',
                                    'menu_class'      => 'nav navbar-nav alt-font main-menu-height',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                );
                            endif;
                            if( $brando_enable_menu == 1 ){
                                wp_nav_menu( $brando_defaults );
                            }
                        ?>
                    </div>
                    <?php
                    if( is_active_sidebar( $brando_header_sidebar ) ){
                    ?>
                        <div class="col-md-12 no-padding clearfix pullmenu-header-bottom">
                            <?php dynamic_sidebar($brando_header_sidebar) ?>
                        </div>
                    <?php
                    }
                    ?>
        </nav>
        <button class="close-button" id="close-button"><?php echo esc_html('Close Menu','brando') ?></button>
    </div>
    <button class="menu-button" id="open-button"><?php echo esc_html('Open Menu','brando') ?></button>
<?php } ?>
<?php if ( get_header_image() ) : ?>
    <?php
        $custom_header_sizes = apply_filters( 'brando_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
    ?>
    <div class="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>