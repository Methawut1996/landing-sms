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
                    <?php woocommerce_content(); ?>

                    <?php endwhile; ?>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->


    <?php get_footer(); ?>