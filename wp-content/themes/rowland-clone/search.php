<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Rowland-Clone
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>
		<div class='grid-container search-results'> 
			<div class='grid-x'> 
				<header class="page-header">
					<span class="page-title"><?php printf( esc_html__( 'Results for: %s', 'palmer_museum' ), '<span>' . get_search_query() . '</span>' ); ?></span>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;
                echo '<hr class="_5050-tile">';
				the_posts_navigation( array(
                        'next_text' => __( 'Previous' ),					
                        'prev_text' => __( 'More' ),
                        'screen_reader_text' => __( 'More Search Results' ),
                        'aria_label'         => __( 'search-results' ),
                        'class'         => __('cell')
                    ) );

				else :
				get_template_part( 'template-parts/content', 'none' );

				endif; ?>
				    </div>				
				</div><!------------------------ closes .grid-x ------------------------>
			</div><!------------------------ closes .grid-container ------------------------>
		</div><!------------------------ closes .stripe ------------------------>
	</main><!-- #main -->
<?php
get_footer();
