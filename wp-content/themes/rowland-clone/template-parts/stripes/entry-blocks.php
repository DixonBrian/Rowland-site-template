<?php 
 $threecards = get_sub_field('three_blocks'); 
  $fourcards = get_sub_field('four_blocks'); ?>

<div class='entry-block-stripe'>
    <div class='grid-container '> 
        <?php if(get_sub_field('show_stripe') == True ) { ?>
            <hr class='stripe-rule'>        
        <?php }; ?>       
        <div class='grid-x grid-margin-x'> 
            <div class='cell large-12'> 
               <?php if(get_sub_field('section_header') !== null) { ?> <h2 class='section-header-title'><?php echo get_sub_field('section_header'); ?></h2><?php }; ?>
                <?php if(get_sub_field('section_content') !== null) { ?><span class="section-sub-title"><?php echo get_sub_field('section_content'); ?></span><?php }; ?>
            </div>   
            <?php 
        if (get_sub_field('select_layout') == 'three_blocks') {
                $i = 1;
            foreach ($threecards as $card) {
            $image_id = $card['card_image'];
                $images =  wp_get_attachment_image($image_id,'','',array('sizes' => '(max-width: 524px) 378px, 768px' ));
                $button_link = $card['card_link'];
            ?>
            <div class='cell large-4 entry-<?php echo $i; ?>-card'> 
            <?php if($button_link){ ?>
                <a aria-label="<?php echo $card['card_title'] ?>" href="<?php echo $button_link['url']; ?>" >
                    <?php echo $images; ?>
                </a>
                <?php } else{ ?>
                    <?php echo $images; ?>
               <?php }; ?>
                <h3 class='card-title'><?php echo $card['card_title']; ?></h3>
                <span class="card-content"><?php echo $card['card_content']; ?></span>
                <br>
                <?php if($button_link){ ?>
                <a aria-label="<?php echo $card['card_title'] ?>" href="<?php echo $button_link['url']; ?>" class='copy-image-link button' target='<?php echo $button_link['target']; ?>'><span><?php echo $button_link['title']; ?></span></a>
                <?php }; ?>
            </div>
            <?php };
            } elseif(get_sub_field('select_layout') == 'four_blocks') {
                $i = 1;
            foreach ($fourcards as $card) {
            $image_id = $card['card_image'];
                $images =  wp_get_attachment_image($image_id,'','',array('sizes' => '(max-width: 524px) 378px, 768px' ));
                $button_link = $card['card_link'];
            ?>
            <div class='cell medium-6 large-3 entry-<?php echo $i; ?>-card'> 
            <?php if($button_link){ ?>
                <a aria-label="<?php echo $card['card_title'] ?>" href="<?php echo $button_link['url']; ?>" >
                    <?php echo $images; ?>
                </a>
                <?php } else{ ?>
                    <?php echo $images; ?>
               <?php }; ?>				
                <h3 class='card-title'><?php echo $card['card_title']; ?></h3>
                <span class="card-content"><?php echo $card['card_content']; ?></span>
                <br>
                <?php if($button_link){ ?>
                <a aria-label="<?php echo $card['card_title'] ?>" href="<?php echo $button_link['url']; ?>" class='copy-image-link button' target='<?php echo $button_link['target']; ?>'><span><?php echo $button_link['title']; ?></span></a>
                <?php }; ?>
            </div>
            <?php };
            };
             ?>
        </div>
    </div>
</div>
