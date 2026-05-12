<!-- The search template for displaying search results.  -->

<?php get_header(); ?>

<section class="search-results-page">
    <div class="container">
        <header class="page-header">
            <span class="subtitle">Search Results for:</span>
            <h1 class="page-title"><?php echo get_search_query(); ?></h1>
        </header>

        <div class="results-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    
                    <article class="result-item">
                        <div class="result-content">
                            <span class="result-cat">BK Media / <?php echo get_post_type(); ?></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">View Detail &rarr;</a>
                        </div>
                    </article>

                <?php endwhile; ?>
            <?php else : ?>
                <div class="no-results">
                    <p>Sorry, we couldn't find anything matching your search. Try another keyword like "Photography" or "Ads".</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>