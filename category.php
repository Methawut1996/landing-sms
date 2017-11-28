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
            <div class="post-display">
                <div class="container">
                    <div class="row">
                        <?php
		while ( have_posts() ) : the_post(); ?>

                            <div class="col-sm-4">
                                <?php get_template_part( 'template-parts/content', 'category'); ?>
                            </div>

                            <?php endwhile; // End of the loop.
		?>
                    </div>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
get_footer();

?>