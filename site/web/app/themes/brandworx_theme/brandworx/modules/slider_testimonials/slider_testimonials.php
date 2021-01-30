<?php
add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_script( 'slider_testimonials_script', get_template_directory_uri() . '/brandworx/modules/slider_testimonials/slider_testimonials.js', array(), '1', true );
} );

function brandworx_slider_testimonials($args = null) {
    $slides = (!empty($args['slides'])) ? $args['slides'] : null;

    if($slides){ ?>
        <section id="testimonials">
            <div class="testimonials-container">
                <div class="testimonials-slider">
                    <?php foreach($slides as $slide) { $image = $slide['image']; ?>
                        <?php if($slide['text']){ ?>
                            <div class="testimonial">
                                <div class="testimonial-inner">
                                    <?php if($image){ ?>
                                        <div class="testimonial-image" data-bgratio="1" style="background: url(<?php echo $image['sizes']['large']; ?>) no-repeat center/cover;"></div>
                                    <?php } ?>
                                    <?php if($slide['title']){ ?>
                                        <div class="testimonial-title">
                                            <?php echo $slide['title']; ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($slide['rating']){ $rating = $slide['rating']; ?>
                                        <div class="testimonial-rating">
                                            <?php for ($i=0; $i < $rating; $i++) { ?>
                                              <svg class="icon"><use xlink:href="#star" /></svg>  
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($slide['cta'] && $slide['link']){ ?>
                                        <a href="<?php echo $slide['link']; ?>" target="_blank" class="testimonial-link"><?php echo $slide['cta']; ?></a>
                                    <?php } ?>
                                    <div class="testimonial-text">
                                        <?php echo $slide['text']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php }
}