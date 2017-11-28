<?php
/*
* Default Page Template
*/
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">

                <?php while(have_posts()) : the_post(); ?>
                <?php
        /*
        * Get Default Content
        */
    ?>
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                    <?php endwhile; ?>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->


    <?php get_footer(); ?>