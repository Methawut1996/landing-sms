<?php
/*
* Template Name: Blank Page
* This Template Use for the Page just need Header & Footer Only
*/
get_header();
?>

<?php while(have_posts()) : the_post(); ?>
    <?php
        /*
        * Get Default Content
        */
    ?>
    <?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>