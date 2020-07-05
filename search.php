<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Mugu
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div class="post-section">
			<main id="main" class="site-main" role="main">
				<div class="row">
				<?php
					if ( have_posts() ) : 
					
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

					else :	

					get_template_part( 'template-parts/content', 'none' );

					endif; 
				?>
				</div>
			</main><!-- #main -->
		</div>
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
