<!-- Post Item -->
<article class="post-item">
    <figure class="thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumb'); ?>
        </a>
        <figcaption>
            <?php the_category(' / '); ?>
        </figcaption>
    </figure>
    <header class="caption">
        <h3 class="title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <div class="date">
            <?php the_time('j F Y'); ?>
        </div>
        <div class="desc">
            <?php the_excerpt(); ?>
        </div>
    </header>
</article>
<!-- Post Item -->