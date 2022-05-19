<?php 
    $cta = get_sub_field('cta_message');
    $bottom = get_sub_field('margin_bottom');
    $top = get_sub_field('margin-top');
?>


<div class='cta-stripe' style="<?php if ($bottom == 1 ){echo 'margin-bottom:60px;'; } else {}; if ($top == 1){echo 'margin-top:60px;'; } else {}; ?>"> 
    <div class="grid-container">
        <div class=" grid-x">     
            <div class=" cell large-12">
                <?php echo $cta; ?>
            </div>
        </div>
    </div>
</div>