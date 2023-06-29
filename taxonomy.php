<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gds
 */

get_header(); ?>


    <div class="container">
        <div class="post-display">
            <div class="columns">
                <?php
while ( have_posts() ) : the_post(); ?>

                    <div class="column is-4">
                        <?php get_template_part( 'template-parts/content', 'category'); ?>
                    </div>

                    <?php endwhile; // End of the loop.
?>
            </div>
        </div>
    </div>

    <?php
get_footer();

?>