<?php
/*
* Default Content Loop
*/
?>


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
            <?php the_content(); ?>

        </div>

    </article>


    <!-- #post-<?php the_ID(); ?> -->