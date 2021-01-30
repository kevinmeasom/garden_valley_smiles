<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Brandworx_Theme
 */

get_header();
?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php if ( have_posts() ) : $current_cat = get_queried_object(); ?>

                <?php 
                $page_for_posts = get_option( 'page_for_posts' );
                    
                if(has_post_thumbnail()){ $overlay = (get_field('quote', $page_for_posts)) ? 'overlay' : ''; ?>
                    <div class="page-banner <?php echo $overlay; ?>" data-bgratio="0.44" style="background: url(<?php echo get_the_post_thumbnail_url($page_for_posts, 'url'); ?>) no-repeat center/cover;">
                        <?php if ( get_field('quote', $page_for_posts) && get_field('quote_by', $page_for_posts) ) : ?>
                            <div class="page-quote">
                                <div class="quote-text"><?php echo get_field('quote', $page_for_posts); ?></div>
                                <div class="quote-by"><?php echo '-'.get_field('quote_by', $page_for_posts); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php } else { ?>
                    <div class="page-space"></div>
                <?php } ?>
                    
                <div id="archive_page" class="content-wrapper">
                    <header class="container-xl page-header">
                        <?php the_archive_title( '<h1 class="page-title cat-title">', '</h1>' ); ?>
                    </header><!-- .page-header -->
        
                    <div class="archive-bg">
        
                        <div class="archive-items">
        
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="archive-item">
                                    <a href="<?php the_permalink(); ?>" class="archive-item-thumb" data-bgratio="0.66" style="background: url(<?php the_post_thumbnail_url('large'); ?>) no-repeat center/cover;"></a>
                                    <div class="archive-item-body">
                                        <h3 class="archive-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="archive-item-excerpt">
                                            <?php $e = get_the_excerpt();
                                            echo wp_trim_words($e, 60); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
        
                        </div>
        
                        <!-- Load More -->
                        <?php echo do_shortcode('[ajax_load_more container_type="div" css_classes="archive-items" post_type="post" category="'.$current_cat->slug.'" posts_per_page="4" offset="4" pause="true" scroll="false" transition_container="true" button_label="Load More..."]'); ?>
                    </div>
                </div>

            <?php else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
