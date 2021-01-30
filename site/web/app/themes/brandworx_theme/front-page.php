<?php
/**
 * Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Brandworx_Theme
 */

get_header();
?>

    <!-- Hero -->
    <?php brandworx_section_hero(['title' => get_field('hero_title_pre_text','option'), 'labels' => get_field('hero_title_rotating_text','option'), 'image' => get_field('hero_image','option')]); ?>

    <!-- Content Rows -->
    <?php brandworx_section_content_rows(['rows' => get_field('content_rows','option')]); ?>
        
<?php
get_footer();
