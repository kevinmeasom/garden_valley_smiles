<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Brandworx_Theme
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

        <?php if ( have_posts() ) : ?>

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
                    <h1 class="page-title cat-title">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'brandworx_theme' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
                </header><!-- .page-header -->

                <?php 
                $search_refer = $_GET['site_section'];
                if ($search_refer == 'product-search') { 
                    get_template_part( 'template-parts/search', 'shop' );
                } elseif ($search_refer == 'site-search') { 
                    get_template_part( 'template-parts/search', 'site' ); 
                } ?>
            </div>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
