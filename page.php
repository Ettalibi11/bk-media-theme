<?php get_header(); ?>

<main class="site-main">
    <div class="container" style="padding: 100px 0;">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
                <article>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; 
        endif; ?>
    </div>
</main>

<?php get_footer(); ?>