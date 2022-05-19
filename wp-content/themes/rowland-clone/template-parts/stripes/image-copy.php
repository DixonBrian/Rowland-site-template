<?php 
$image_id = get_sub_field('section_image');
$images = wp_get_attachment_image($image_id,'','',array('sizes' => '(max-width: 524px) 378px, 768px' ));
$button_link = get_sub_field('section_link');
?>

<div class='image-copy-stripe'>
    <div class='grid-container '> 
        <?php if(get_sub_field('show_stripe') == True ) { ?>
            <hr class='stripe-rule'>        
        <?php }; ?>        
        <div class='grid-x grid-margin-x'> 
            <div class='cell large-12'> 
                <?php if(get_sub_field('header_title') !== null) { ?> <h2 class='section-header-title'><?php echo get_sub_field('header_title'); ?></h2><?php }; ?>
                <?php if(get_sub_field('header_subtitle') !== null) { ?><span class="section-sub-title"><?php echo get_sub_field('header_subtitle'); ?></span><?php }; ?>
            </div>
            <div class='cell large-6 image-section'> 
                <?php echo $images; ?>
            </div>
            <div class='cell large-6 copy-section'> 
                <?php if(get_sub_field('section_title') !== null) { ?><h3 class='copy-title'><?php echo get_sub_field('section_title'); ?></h3><?php }; ?>
                <?php if(get_sub_field('section_subtitle') !== null) { ?><h4 class='copy-sub-title'> <?php echo get_sub_field('section_subtitle'); ?></h4><?php }; ?>
                <span class='copy-content'><?php echo get_sub_field('section_content'); ?></span>
                 <?php if (isset($button_link['url'])){ ?><a href="<?php echo $button_link['url']; ?>" class='copy-image-link button' target='<?php echo $button_link['target']; ?>'><span><?php echo $button_link['title']; ?></span></a><?php }; ?>
            </div>
        </div>
    </div>
</div>