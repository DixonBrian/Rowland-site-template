<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Palmer-Museum
 */

?>
<div class='bottom-pattern'> 

</div>
    <footer id="colophon" class="site-footer">
        <section id="primary-footer" class="grid-container" >
             <div class='grid-x grid-padding-x '> 
                <div class='cell medium-4 address'> 
                    <?php 
                        $footer = get_field('identity', 'options');
                        $footer_social = get_field('social','options');

                 echo wp_get_attachment_image($footer['psu_logo']['id'], 'large',"", array('class' => 'psu-logo', 'sizes' => '(max-width: 524px) 440px, (max-width: 768px) 608px, 608px' )); 

                 echo wp_get_attachment_image($footer['palmer_logo']['id'], 'large',"", array('class' => 'palmer-logo', 'sizes' => '(max-width: 524px) 440px, (max-width: 768px) 608px, 608px' )); 
                 ?>
                 <address>
                     <?php echo $footer['address']; ?>
                 </address>
                </div>
                <div class='cell medium-6 large-offset-0 medium-offset-2 large-4 hours'> 
                    <h3 class="footer-hours">Hours</h3>
                <?php echo get_field('hours', 'options'); ?>
                </div>
                <div class='cell medium-12 large-3 social'> 
                    <div class='connect'> 
                        <h3>Connect</h3>
                        <?php  $footer_social['social_icons'];
                        if(isset($footer_social['social_icons'])&& is_array($footer_social['social_icons'])):
                        foreach($footer_social['social_icons'] as $tiles):
                        ?>
                        <a   aria-label="Link To <?php echo $tiles['link_title'];?>" target='<?php echo $tiles['media_link']['target'];?>' href="<?php echo $tiles['media_link']['url'];?> "><span class="social-media-title">Link To <?php echo $tiles['link_title'];?></span><?php echo $tiles['font_awesome_icons']; ?></a>
                        <?php endforeach;
                        endif; ?>
                    </div>

                    <div class='contact'> 
                        <?php $footer_contact_us = get_field('contact_us','options'); ?>
                        <h3>Contact</h3>
                        <a aria-label="<?php echo $footer_contact_us['contact_email']; ?>" href="mailto:<?php echo $footer_contact_us['contact_email']; ?>"><i class="fas fa-envelope"></i><span><?php  echo $footer_contact_us['contact_email']; ?></span></a>
 
                        <br/>
                        <a aria-label="Telephone Number" href="tel:<?php echo $footer_contact_us['phone_number']; ?>"><i class="fas fa-phone"></i><span><?php  echo $footer_contact_us['phone_number']; ?></span></a>
                        
                    </div>
                </div>
            </div>
        </section>
        <!---------------- Secondary Footer ---------------->
        <section class="footer-second">
            <div class="grid-container">    
            <div class="psu-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Penn_State_mark_white_text.png" class="logo" alt="Penn State Lion Head Shield Logo">
            </div>
                <ul class="footer-menu-left">
                    <li><a href="http://psu.jobs/">Employment</a></li>
                    <li><a href="http://www.psu.edu/maps">Maps</a></li>
                    <li><a href="http://www.psu.edu/contact-us">Contact Us</a></li>
                    <li><a href="http://www.psu.edu/search/gss">Search</a></li>
                </ul>
                <ul class="footer-menu-right">
                    <li><a href="http://www.psu.edu/web-privacy-statement">Privacy</a></li>
                    <li><a href="http://guru.psu.edu/policies/AD85.html">Non-discrimination</a></li>
                    <li><a href="http://guru.psu.edu/policies/OHR/hr11.html">Equal Opportunity</a></li>
                    <li><a href="http://www.psu.edu/accessibilitystatement">Accessibility</a></li>
                    <li><a href="http://www.psu.edu/copyright-information">Copyright</a></li>
                </ul>
                    <p class="address">201 Old Main, University Park, Pennsylvania 16802  |  814-865-4700</p>
                    <p class="copyright">The Pennsylvania State University &copy; <?php echo date('Y'); ?></p>
            </div> <!-- .grid-container -->
        </section> <!-- /footer-second -->

<?php wp_footer(); ?>
        <!---------------- Jquery scripts ---------------->
      
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <script src="/wp-content/themes/rowland-clone/builds/production/js/foundation.min.js"></script>
            <script type="text/javascript">
        $(document).ready(function() {

            $(document).foundation(); 

            // Get the button, and when the user clicks on it, execute myFunction
            document.getElementById("searchfield").onfocus=function() {showRadio();};
            $(document).on("click",function(e){
                    if ($(e.target).is(".search-field, .search-radio-buttons *, .search-radio-buttons, #searchform") === false){
                            $("#search-radio-buttons").last().removeClass("show");
                           
                    }
                     
            });

            /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
            function showRadio() {
            document.getElementById("search-radio-buttons").classList.add("show");
            $('#search-submit span').html('');
            }

        </script>
</body>
</html>
