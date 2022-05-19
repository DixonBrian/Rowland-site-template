  <?php  $bottom = get_sub_field('margin_bottom');
    $top = get_sub_field('margin-top');
?>

<div class='full-width-image-stripe' style="<?php if ($bottom == 1 ){echo 'margin-bottom:60px;'; } else {}; if ($top == 1){echo 'margin-top:60px;'; } else {}; ?>" >
    <div class='grid-container full'> 
    <?php 
        $image_id = get_sub_field('section_image');
        $image =  wp_get_attachment_image($image_id,'','',array('sizes' => '(max-width: 768px) 768px, (max-width:1600px) 2048px, 3200px' ));
        echo $image;
    ?>
    </div> 

</div>