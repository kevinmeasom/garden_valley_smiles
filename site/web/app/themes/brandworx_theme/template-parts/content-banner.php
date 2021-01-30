<?php if(has_post_thumbnail()){ 
    $overlay = (is_single() || get_field('quote')) ? 'overlay' : ''; 
    $align = (is_single()) ? 'text-bottom' : 'text-center'
?>
    <div class="page-banner <?php echo $align .' '. $overlay; ?>" data-bgratio="0.44" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center/cover;">
        <?php if(is_single()){ ?>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="entry-header-inner">
                    <div class="entry-date"><?php echo get_the_date(); ?></div>
                    <?php $cats = get_the_category(); 
                    if($cats) { ?>
                        <?php foreach($cats as $cat) { ?>
                            <div class="dot-sep"></div>
                            <a href="<?php echo get_term_link($cat->term_id); ?>" class="entry-cat"><?php echo $cat->name; ?></a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </header><!-- .entry-header -->
        <?php } ?>
        <?php if ( get_field('quote') || get_field('quote_by') ) : ?>
            <div class="page-quote">
                <?php if(get_field('quote')){ ?>
                    <div class="quote-text"><?php echo get_field('quote'); ?></div>
                <?php } ?>
                <?php if(get_field('quote_by')){ ?>
                    <div class="quote-by"><?php echo '-'.get_field('quote_by'); ?></div>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
<?php } else { ?>
    <div class="page-space"></div>
<?php } ?>
