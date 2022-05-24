
<?php
    get_header();
?>
<main id="primary" class="site-main">

    <section id="page-content">
    
                <div class='stripes'>
                    <?php 
                    // are there any rows within the flexible content?
                if( have_rows('flexible_content') ): 
                    global $zindex;
                    $zindex = 1000;

                    // loop through all the rows of flexible content
                    while ( have_rows('flexible_content') ) : the_row();

                        // get the row layout
                        $row_layout = get_row_layout();
                        
                        // get template parts based on the row layout
                        switch ($row_layout){
                            // General Content Stripe                           
                            case 'cta_stripe':
                                get_template_part('template-parts/stripes/cta');
                                break;     
                            case '50_50_image':
                                get_template_part('template-parts/stripes/5050');
                                break;       
                            case 'entry_block_stripe':
                                get_template_part('template-parts/stripes/entry-blocks');
                                break;    
                            case 'full_width_image':
                                get_template_part('template-parts/stripes/full-width-image');
                                break;   
                            case 'image_copy':
                                get_template_part('template-parts/stripes/image-copy');
                                break;                                                                                                                                                       
                            }
                        endwhile; // close the loop of flexible content
                    endif; // close flexible content conditional 
                ?>
        </div>
    </section>
</main><!-- #main -->
<?php
get_footer();
