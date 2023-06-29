<?php
/*
* Default Page Template
*/
get_header();
?>

<?php while(have_posts()) : the_post(); ?>


<?php endwhile; ?>


    <?php get_footer(); ?>