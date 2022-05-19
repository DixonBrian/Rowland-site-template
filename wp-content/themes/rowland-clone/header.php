<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rowland-Clone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rowland-clone' ); ?></a>
	<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'palmer-museum' ); ?></a>
    <header id="header" class="site-header">
          <?php $emergency_banner = get_field('emergency_banner','options');
            if($emergency_banner['show_emergency'] == true): ?>       
        <div id="alerts-wrap" data-closable>
            <div class="alert full non-emergency" role="dialog" aria-labelledby="alert-dialog-title" aria-describedby="alert-dialog-description">
                <div id="alert-dialog-title" class="sr-only"> <?php echo strip_tags($emergency_banner['emergency_message_title']); ?></div>
                <p id="alert-dialog-description" class="sr-only"><?php echo strip_tags($emergency_banner['emergency_message']); ?></p>
                <div class="container">
                    <!--  The following div for the date is optional. -->
                    <div class="date">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="left-angle" viewBox="0 0 51.625 132.493">
                        <path id="Path_4283" data-name="Path 4283" d="M-13525.965,2373.5V2241.005h-51.625l31.835,82.837-22.107,21.054h30.465Z" transform="translate(13577.59 -2241.005)" class="left-angle"/>
                    </svg>
                    <div class="alert-message">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82 82" class="alert-icon"><g transform="translate(-350.099 -428.714)"><g transform="translate(350.099 428.714)" fill="none" stroke-width="6"><circle cx="41" cy="41" r="41" stroke="none"/><circle cx="41" cy="41" r="38" fill="none"/></g><g transform="translate(384.41 448.566)"><rect width="10.381" height="7.786" transform="translate(0.919 34.336)" /><path d="M6520.672,2327.554h-5.854l-3.21-23.669V2299.2h11.81v4.681Z" transform="translate(-6511.607 -2299.203)" /></g></g></svg>
                    <p> <?php echo strip_tags($emergency_banner['emergency_message']); ?><a href="<?php echo $emergency_banner['emergency_message_link'] ?>">MORE INFO ></a></p> 
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="right-angle" viewBox="0 0 51.617 132.499">
                        <path id="Path_4279" data-name="Path 4279" d="M-13342.965,2541.5h-51.617V2409Z" transform="translate(13394.582 -2409)" />
                    </svg>
                    <div class="minimize-alert">
                        <button class="close-button"aria-label="Close alert" type="button" data-close><span></span>Close</button>
                    </div>
                </div>
            </div>
        </div>
            <?php endif; ?><!------------------------ /#emergency-banner ------------------------>
		<div ID='navbar' class="grid-container full"> 
            <div class=' headder__row'> 
                    <?php $header_logo = get_field('header_logo_for_mobile_menu','options') ?>
                <div class='grid-x  '> 
                    <div class="cell large-4 medium-3 small-6 site-branding">
                        <a class="logo" href="/"><?php echo wp_get_attachment_image($header_logo,'',array('sizes' => '(max-width: 524px) 300px, (max-width: 768px) 608px, 1024px' )) ?></a>
                    </div><!-- .site-branding -->
                    <div class='cell site-nav large-8 medium-9 '> 
                        <nav id="site-navigation" class="main-navigation">
                            <button class="button menu-icon" aria-label="Menu Hamburger Icon" type="button"  data-toggle="primary-menu"  >
                                <span class="menu-hamburger-icon">
                                    <span class="hamburger-bar hamburger-bar-1"></span>
                                    <span class="hamburger-bar hamburger-bar-2"></span>
                                    <span class="hamburger-bar hamburger-bar-3"></span>
                                </span>
                            <span class="menu-button-close">Close</span>                                
                            </button>
                            <div ID='primary-menu' data-v-offset="-100"  data-h-offset="-70" data-allow-overlap="true" class="dropdown-pane" data-position="bottom" data-alignment="right" data-dropdown > 
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-1',
                                            'menu_id'        => 'mobile-menu',
                                            'menu_class'    => 'align-right',
                                        )
                                    );
                                    ?>
                                    <div class='super-nav'> 
                                        <?php         
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'extra-menu',
                                                'menu_id'        => 'mobile-super-nav',
                                                'menu_class'    => 'align-right',
                                                )
                                            );
                                        ?>
                                    </div>
                                    <?php
                                    if(wp_is_mobile()){
                                    ?>
                                    <div class="search-icon">
                                        <?php get_search_form(); ?>
                                    </div>
                                    <?php }; ?>
                                </div>
                                <div class='desktop-menu'> 
                                        <div class="search-icon">
                                            <?php get_search_form(); ?>
                                        </div>
                                    <div class='super-nav'> 
                                        <?php         
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'extra-menu',
                                                'menu_id'        => 'super-nav',
                                                'menu_class'    => 'align-right',
                                                )
                                            );
                                        ?>
                                    </div>
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-1',
                                            'menu_id'        => 'desktop-menu',
                                            'menu_class'    => 'align-right',
                                        )
                                    );
                                    ?>
                                </div>                            
                        </nav><!-- #site-navigation -->
                        </nav><!-- #site-navigation -->
                    </div><!------------------------ /site-nav ------------------------>
                </div><!------------------------ /grid-x.grid.margin-x ------------------------>       
            </div><!------------------------ /grid-container ------------------------>
        </div> <!------------------------ /#navbar ------------------------>

	</header><!-- #masthead -->
    <main id="content" class="site-content">