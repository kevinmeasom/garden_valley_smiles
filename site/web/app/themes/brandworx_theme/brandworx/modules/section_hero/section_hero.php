<?php
// add_action( 'wp_enqueue_scripts', function(){
//     wp_enqueue_script( 'section_hero_script', get_template_directory_uri() . '/brandworx/modules/section_hero/section_hero.js', array(), '1', true );
// } );

function brandworx_section_hero($args = null) {
    $title = (!empty($args['title'])) ? $args['title'] : null;
    $labels = (!empty($args['labels'])) ? $args['labels'] : null;
    $image = (!empty($args['image'])) ? $args['image'] : null;

    if($image){ ?>
        <div id="hero_section" style="background: url(<?php echo $image['sizes']['large']; ?>) no-repeat center/cover;">
            <?php if($title || $labels){ $count = ($labels) ? count($labels) : 0; ?>
                <div class="hero-title text-anim text-anim_<?php echo $count; ?>">
                    <?php if($title){ ?>
                        <div><?php echo $title; ?></div>
                    <?php } ?>
                    <div class="text-anim__wrapper text-anim_<?php echo $count; ?>">
                        <?php foreach($labels as $label) { ?>
                            <i class="text-anim__word">
                                <?php echo $label['text']; ?>
                            </i>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <svg class="scroll-down icon"><use xlink:href="#down-angle" /></svg>
        </div>
    <?php }
}