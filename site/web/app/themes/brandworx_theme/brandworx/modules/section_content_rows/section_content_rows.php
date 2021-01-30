<?php

function brandworx_section_content_rows($args = null) {
    $rows = (!empty($args['rows'])) ? $args['rows'] : null;

    if($rows){ ?>
        <section id="content_rows">
            <div class="content-rows-container">
                <?php foreach($rows as $row) { $image = $row['image']; ?>
                    <div class="content-row">
                        <div class="content-row-inner">
                            <?php if($image){ ?>
                                <div class="content-row-image" data-bgratio="0.56" style="background: url(<?php echo $image['sizes']['large']; ?>) no-repeat center/cover;"></div>
                            <?php } ?>
                            <div class="content-row-body">
                                <?php if($row['title']){ ?>
                                    <h2 class="content-row-title">
                                        <span><?php echo $row['title']; ?></span>
                                        <?php brandworx_block_sep(['align' => 'left']); ?>
                                    </h2>
                                <?php } ?>
                                <?php if($row['text']){ ?>
                                    <div class="content-row-text">
                                        <?php echo $row['text']; ?>
                                    </div>
                                <?php } ?>
                                <?php if($row['cta'] && $row['link']){ ?>
                                    <a href="<?php echo $row['link']; ?>" class="btn btn-secondary"><?php echo $row['cta']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $row['']; ?>
                <?php } ?>
            </div>
        </section>
    <?php }
}