<?php
/**
 * Template Name: Sidebar Right
 *
 * The template for displaying the right sidebar page.
 *
 * @package StrapCore
 */

get_header('bootstrap');
?>

	<div id="primary" class="sidebar-content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar('right');
get_footer();
