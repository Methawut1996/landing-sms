<?php
/*
* Template Name: Full Width Page
* This Template Use for the Full Width Page
*/
get_header();
?>

<?php while(have_posts()) : the_post(); ?>
    <?php
        /*
        * Get Default Content
        */
    ?>

    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>