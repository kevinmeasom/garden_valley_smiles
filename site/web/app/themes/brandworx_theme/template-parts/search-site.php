<div class="archive-bg">
    <div class="site-search">
        <?php brandworx_block_custom_search(['form' => 'custom_search_form']); ?>
    </div>

    
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
    <?php echo do_shortcode('[ajax_load_more container_type="div" css_classes="archive-items" post_type="post" search="'.get_search_query().'" posts_per_page="4" offset="4" pause="true" scroll="false" transition_container="true" button_label="Load More..."]'); ?>
</div>