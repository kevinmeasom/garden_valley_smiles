<?php
/*****************
*
* Insert into header
*
*****************/
add_action('wp_head', function(){

    require_once( __DIR__ . "/images/icons.svg"); 
    ?>

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		// BRANDWORX CREATIVE TRACKING CODE
		// ga('create', 'UA-000000-00', 'example.com');
		// ga('send', 'pageview');
		// CLIENT TRACKING CODE
		// ga('create', 'UA-000000-00', {'name':'b'});
		// ga('b.send', 'pageview');
    </script>
    <?php
});



/*****************
*
* Theme Nav Menus
*
*****************/
register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'brandworx_theme' ),
    'mobile' => esc_html__( 'Mobile', 'brandworx_theme' ),
    'footer' => esc_html__( 'Footer', 'brandworx_theme' ),
) );


/*****************
*
* content width settings
*
*****************/
add_action( 'after_setup_theme', function(){
    $GLOBALS['content_width'] = apply_filters( 'brandworx_theme_content_width', 2000 );
}, 0 );


/**
* Enqueue scripts and styles.
*/
add_action( 'wp_enqueue_scripts', function(){
	// stylesheets
	wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', false, false );
	wp_enqueue_style( 'slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	
	// javascript
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1', true );
    wp_enqueue_script( 'lazy-script', get_template_directory_uri().'/brandworx/js/lazy/jquery.lazy.min.js', array(), '1', true);
	wp_enqueue_script( 'slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1', true);
	wp_enqueue_script( 'cookie-script', get_template_directory_uri().'/brandworx/js/js-cookie.js', array(), '1', true);
	wp_enqueue_script( 'waypoints-script', get_template_directory_uri().'/brandworx/js/waypoints/jquery.waypoints.js', array(), '1', true);
	wp_enqueue_script( 'social-script', get_template_directory_uri().'/brandworx/js/social/social.min.js', array(), '1', true);
	wp_enqueue_script( 'clipboard-script', get_template_directory_uri().'/brandworx/js/clipboard.js', array(), '1', true);
	
    if(is_singular('post')){
        wp_enqueue_script( 'social-script', get_template_directory_uri().'/brandworx/js/social/social.min.js', array(), '1', true);
    }
	
    wp_enqueue_script( 'brandworx-scripts', get_template_directory_uri() . '/brandworx/js/brandworx-scripts.js', array(), '20151215', true );
    wp_enqueue_script( 'brandworx', get_template_directory_uri() . '/brandworx/js/brandworx.js', array(), '20151215', true );
    wp_enqueue_script( 'brandworx_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'brandworx_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );


/*****************
*
* IMAGE SIZES
*
*****************/
// if ( function_exists( 'add_image_size' ) ) {
//     // archive, dropdown 240x280
// 	add_image_size( 'tall', 425, 500, true );
// }	


/*****************
*
* INCLUDE MODULES
*
*****************/
// BLOCK
require_once('modules/block_custom_search/block_custom_search.php');
require_once('modules/block_flex_row/block_flex_row.php');
require_once('modules/block_popups/block_popups.php');
require_once('modules/block_search/block_search.php');
require_once('modules/block_sep/block_sep.php');
require_once('modules/block_share_icons/block_share_icons.php');
require_once('modules/block_social_icons/block_social_icons.php');

// NAV
require_once('modules/nav_mobile/nav_mobile.php');

// SLIDER
require_once('modules/slider_testimonials/slider_testimonials.php');

// WIDGET

// WALKER

// SINGLE

// LOOP

// SECTION
require_once('modules/section_contact/section_contact.php');
require_once('modules/section_content_rows/section_content_rows.php');
require_once('modules/section_faq/section_faq.php');
require_once('modules/section_hero/section_hero.php');


/*****************
*
* SIGNATURE SHORTCODE
*
*****************/
add_shortcode( 'signature', function( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'text' => 'xo'
    ), $atts);
    return '<div class="signature">'.$a['text'].'</div>';
} );


/*****************
*
* BTN SHORTCODE
*
*****************/
add_shortcode( 'brandworxbtn', function( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'text' => '',
        'link' => '#',
        'class' => 'btn-primary'
    ), $atts);
    return '<a href="'.$a['link'].'" class="btn '.$a['class'].'">'.$a['text'].'</a>';
} );


/*****************
*
* CUSTOMIZE SEARCH FORMS
*
*****************/
function custom_search_form( $form ) {
    $form = '';
    $form .= '<form class="basic-search-form" action="/" method="get">';
        $form .= '<label for="search">';
            $form .= '<span class="screen-reader-text">Search for:</span>';
        $form .= '</label>';
        $form .= '<div class="search-fields">';
            $form .= '<input type="text" name="s" id="search" value="" />';
            $form .= '<input type="hidden" name="site_section" value="site-search" />';
            $form .= '<input class="btn btn-primary" type="submit" value="search the blog">';
        $form .= '</div>';
    $form .= '</form>';
	return $form;
}
add_filter( 'get_search_form', 'custom_search_form' );

function custom_shop_search_form( $form ) {
    $form = '';
    $form .= '<form class="shop-search-form" action="/" method="get">';
        $form .= '<label for="search">';
            $form .= '<span class="screen-reader-text">Search for:</span>';
        $form .= '</label>';
        $form .= '<div class="search-fields">';
            $form .= '<input type="text" name="s" id="search" value="" placeholder="search the shop..." />';
            $form .= '<input type="hidden" name="site_section" value="product-search" />';
            $form .= '<input class="btn btn-primary" type="submit" value="search">';
        $form .= '</div>';
    $form .= '</form>';
	return $form;
}

function custom_search_form_2( $form ) {
	$form = '<form method="get" class="custom-search-form" action="' . esc_url( home_url( '/' ) ) . '">';
	$form .= '<label>';
	$form .= '<span class="screen-reader-text">Search for:</span>';
	$form .= '<div class="search-with-icon"><input type="text" class="search-field" placeholder="search the blog..." value="" name="s" style="background: url(' . get_template_directory_uri() . '/brandworx/modules/block_custom_search/search.png) no-repeat 10px 10px / 12px;"></div>';
	$form .= '</label>';
	$form .= '</form>';
	return $form;
}

function custom_search_form_3( $form ) {
	$form = '<form method="get" class="custom-search-form" action="' . esc_url( home_url( '/' ) ) . '">';
	$form .= '<label>';
	$form .= '<span class="screen-reader-text">Search for:</span>';
	$form .= '<div class="search-with-icon"><input type="text" class="search-field" placeholder="search" value="" name="s" style="background: url(' . get_template_directory_uri() . '/brandworx/modules/block_custom_search/search.png) no-repeat 96% 10px / 12px;"></div>';
	$form .= '</label>';
	$form .= '</form>';
	return $form;
}




/*****************
*
* ACF OPTIONS
*
*****************/
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/brandworx/acf/';
    
    // return
    return $path;
    
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/brandworx/acf/';
    
    // return
    return $dir;
    
}

// add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/brandworx/acf/acf.php' );

// saving json
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/brandworx/acf-json';
    
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
        
    // append path
    $paths[] = get_stylesheet_directory() . '/brandworx/acf-json';

    // return
    return $paths;   
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home',
		'menu_title'	=> 'Home',
		'parent_slug'	=> 'theme-settings',
	));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-settings',
	));
    
}



/*****************
*
* SORT RELATIONSHIP FIELDS BY DATE
*
*****************/
// filter for every field
add_filter('acf/fields/relationship/query', function($args, $field, $post_id){
    $type = (!empty($field['post_type'])) ? $field['post_type'] : 'post';
    $args = array(
        'post_type' => $type,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    return $args;
}, 10, 3);


/*****************
*
* CUSTOMIZED DATETIME
*
*****************/
function brandworxtime_ago() {
    echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}


/*****************
*
* REMOVE JS & CSS Versioning
*
*****************/
// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}


/*****************
*
* Query Posts Per Page
*
*****************/
function my_post_queries( $query ) {
    // do not alter the query on wp-admin pages and only alter it if it's the main query
    if (!is_admin() && $query->is_main_query()){
        
        if(is_archive() || is_category() || is_search()){
            $query->set('posts_per_page', 4);
            // $query->set('category__not_in', get_field('exclude_categories','option'));
        }

        if(is_search()){
            $search_refer = $_GET['site_section'];
            if ($search_refer == 'product-search') { 
                $query->set('post_type', 'product');
            } elseif ($search_refer == 'site-search') { 
                $query->set('post_type', 'post');
            }
        }

    }
}
add_action( 'pre_get_posts', 'my_post_queries' );



/*****************
*
* CUSTOMIZED COMMENTS
*
*****************/
function comments_num() {
    $num_comments = get_comments_number(); // get_comments_number returns only a numeric value

    if ( comments_open() ) {
        if ( $num_comments == 0 ) {
            $comments = __('No Comments');
        } elseif ( $num_comments > 1 ) {
            $comments = $num_comments . __(' Comments');
        } else {
            $comments = __('1 Comment');
        }
        $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
    } else {
        $write_comments =  __('Comments are off for this post.');
    }

    echo $write_comments;
}


/*****************
*
* Move Comments Field to Bottom
*
*****************/
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );



/*****************
*
* EXCERPT EDITS
*
*****************/
/**
* Add class to exceprt.
*
* @param string $more "Read more" excerpt string.
* @return string (Maybe) modified "read more" excerpt string.
*/
function add_excerpt_class( $excerpt )
{
    $excerpt = str_replace( "<p", "<p class=\"excerpt\"", $excerpt );
    return $excerpt;
}

add_filter( "the_excerpt", "add_excerpt_class" );

/**
* Filter the excerpt "read more" string.
*
* @param string $more "Read more" excerpt string.
* @return string (Maybe) modified "read more" excerpt string.
*/
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




/*****************
*
* Archive Title Edits
*
*****************/
/**
* Change the archive title filter.
**/
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});


/*****************
*
* Phone Number Formatting
*
*****************/
function phone_number_format($number) {
    // Allow only Digits, remove all other characters.
    $number = preg_replace("/[^\d]/","",$number);
   
    // get number length.
    $length = strlen($number);
   
    // if number = 10
    if($length == 10) {
        $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1.$2.$3", $number);
    }
    
    return $number;
   
}


/*****************
*
* Numbered Pagination
*
* Usage: brandworxnumbered_pagination($wp_query);
*
*****************/
function brandworxnumbered_pagination($custom_query) {
    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
        echo '<nav class="numbered-pagination">';
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => 'Back',
            'next_text' => 'Next'
        ));
        echo '</nav>';
    }
}


/*****************
 *
* Admin Columns
*
*****************/
add_filter( 'manage_post_posts_columns', 'brandworxfilter_posts_columns' );
function brandworxfilter_posts_columns( $columns ) {
  $columns['template'] = __( 'Template' );
  return $columns;
}
add_action( 'manage_post_posts_custom_column', 'brandworxtemplate_column', 10, 2);
function brandworxtemplate_column( $column, $post_id ) {
    // Template column
    if ( 'template' === $column ) {
        $templates = get_page_templates( null, 'post' );
        foreach ( array_keys( $templates ) as $template ) {
            $selected = selected( get_page_template_slug( $post_id ), $templates[ $template ], false );
            if($selected != ''){
                echo esc_html($template);
            } else {
                echo esc_html('Default');
            }
        }
    }
}


/*****************
*
* Insert into footer
*
*****************/
add_action('wp_footer', function(){
    if(function_exists('brandworxblock_search')){
        brandworxblock_search();
    }
    if(function_exists('brandworxblock_popups')){
        brandworxblock_popups();
    }
});
