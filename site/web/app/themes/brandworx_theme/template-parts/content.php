<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Brandworx_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content container-lg">
        <?php
        the_content( sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'our_family_passport' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        ) );

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'our_family_passport' ),
            'after'  => '</div>',
        ) );
        ?>

        <?php //brandworxsingle_quick_links(['links' => get_field('quick_links')]); ?>
    </div><!-- .entry-content -->

    <div class="entry-footer">
        <div class="container-md">
            <div class="entry-footer-actions flex align-center justify-center">
                <a href="#comments" id="comment-btn" class="comment-btn flex align-center justify-center">Leave A Comment</a>
                <div class="dot-sep"></div>
                <?php brandworx_block_share_icons(['post' => get_the_ID()]); ?>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->