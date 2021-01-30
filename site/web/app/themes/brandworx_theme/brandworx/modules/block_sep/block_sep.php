<?php

function brandworx_block_sep($args = null) { 
    $align = (!empty($args['align'])) ? $args['align'] : 'center';
    ?>
    <div class="diamonds-sep align-<?php echo $align; ?>">
        <div class="diamonds-before"></div>
        <svg class="icon"><use xlink:href="#diamonds" /></svg>
        <div class="diamonds-after"></div>
    </div>
<?php }