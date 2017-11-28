<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gds
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
		<?php
		while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">

				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php the_post_navigation(); ?>
			</div>
		</div>

			

		<?php endwhile; // End of the loop.?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

?>
