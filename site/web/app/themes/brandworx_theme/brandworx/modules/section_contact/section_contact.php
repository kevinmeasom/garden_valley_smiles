<?php

function brandworx_section_contact($args = null) {
    $title = (!empty($args['title'])) ? $args['title'] : null;
    $text = (!empty($args['text'])) ? $args['text'] : null;
    $form = (!empty($args['form'])) ? $args['form'] : null;
    
    if($form){ ?>
        <section id="contact_section">
            <div class="contact-container">
                <?php if($title){ ?>
                    <h2 class="contact-title">
                        <span><?php echo $title; ?></span>
                        <?php brandworx_block_sep(['align' => 'center']); ?>
                    </h2>
                <?php } ?>
                <?php if($text){ ?>
                    <div class="contact-text">
                        <?php echo $text; ?>
                    </div>
                <?php } ?>
                <div class="contact-form">
                    <?php echo $form; ?>
                </div>
            </div>
        </section>
    <?php }
}