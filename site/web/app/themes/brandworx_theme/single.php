<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Brandworx_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>
        
            <?php get_template_part( 'template-parts/content', 'banner' ); ?>
            
            <div class="content-wrapper">
                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            </div>

            <?php 
            // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; ?>

		</main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
