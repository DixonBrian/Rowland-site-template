<?php 
$image_id = get_sub_field('section_1_image');
$image_1 = wp_get_attachment_image($image_id,'','',array('sizes' => '(max-width: 524px) 300px, 768px' ));
$image_id_2 = get_sub_field('section_2_image');
$image_2 = wp_get_attachment_image($image_id_2,'','',array('sizes' => '(max-width: 524px) 300px, 768px' ));
$button_link_1 = get_sub_field('section_1_link');
$button_link_2 = get_sub_field('section_2_link');
?>
<div class='_50-50-stripe'>
    <div class='grid-container '> 
        <?php if(get_sub_field('show_stripe') == True ) { ?>
            <hr class='stripe-rule'>        
        <?php }; ?>        
        <div class='grid-x grid-margin-x'> 
            <div class='cell large-12'> 
                <?php if(get_sub_field('header_title') !== null) { ?><h2 class='section-header-title'><?php echo get_sub_field('header_title'); ?></h2><?php }; ?>
                <?php if(get_sub_field('header_subtitle') !== null) { ?><span class="section-sub-title"><?php echo get_sub_field('header_subtitle'); ?></span><?php }; ?>
            </div>
            <div class='cell large-5 medium-9 _50-50-section left-block'> 
                <?php echo $image_1; ?>
                <h3 class='copy-title'><?php echo get_sub_field('section_1_title'); ?></h3>
               <?php if(get_sub_field('section_1_title') ){ ?> <hr class="_5050-tile"><?php } else {}; ?>
                <?php if(get_sub_field('section_1_subtitle') !== null) { ?><h4 class='copy-sub-title'> <?php echo get_sub_field('section_1_subtitle'); ?></h4><?php }; ?>
                <?php if(get_sub_field('section_1_content') !== null) { ?><span class='copy-content'><?php echo get_sub_field('section_1_content'); ?></span><?php }; ?>
                 <?php if($button_link_1){ ?><a href="<?php echo $button_link_1['url']; ?>" class='copy-image-link button' target='<?php echo $button_link_1['target']; ?>'><span><?php echo $button_link_1['title']; ?></span></a><?php } else {}; ?>
            </div>
            <div class='cell large-5 medium-9 _50-50-section right-block'> 
                <?php echo $image_2; ?>
                <h3 class='copy-title'><?php echo get_sub_field('section_2_title'); ?></h3>
                <?php if(get_sub_field('section_2_title') ){ ?> <hr class="_5050-tile"><?php } else {}; ?>
                <?php if(get_sub_field('section_2_subtitle') !== null) { ?><h4 class='copy-sub-title'> <?php echo get_sub_field('section_2_subtitle'); ?></h4><?php }; ?>
                <?php if(get_sub_field('section_2_content') !== null) { ?><span class='copy-content'><?php echo get_sub_field('section_2_content'); ?></span><?php }; ?>
                 <?php if($button_link_2){ ?><a href="<?php echo $button_link_2['url']; ?>" class='copy-image-link button' target='<?php echo $button_link_2['target']; ?>'><span><?php echo $button_link_2['title']; ?></span></a><?php } else{}; ?>
            </div>
        </div>
    </div>
</div>