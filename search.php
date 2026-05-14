<?php get_header(); ?>

<section class="search-results-page">
    <div class="container">
        
        <?php 
        global $wpdb; 
        $search_query = get_search_query();
        $current_lang = pll_current_language();

        // 1. FETCH DATA FROM DATABASE
        $results = $wpdb->get_results( $wpdb->prepare("
            SELECT * FROM bk_master_data 
            WHERE (title LIKE %s OR description LIKE %s)
            AND lang = %s
            ORDER BY title ASC
        ", '%' . $wpdb->esc_like($search_query) . '%', '%' . $wpdb->esc_like($search_query) . '%', $current_lang) );

        // 2. CALCULATE COUNT
        $count = count($results);
        ?>

        <!-- HEADER: Shows the number of results found -->
        <header class="search-header-pro">
            <span class="results-count"><?php echo $count; ?> <?php pll_e('Results Found'); ?></span>
            <h1><?php pll_e('Search:'); ?> "<?php echo esc_html($search_query); ?>"</h1>
        </header>

        <div class="results-list-pro">
            <?php if ( $count > 0 ) : ?>
                <?php foreach ( $results as $row ) : ?>
                    
                    <article class="search-result-entry">
                        <!-- THE HEADING AS A CLICKABLE LINK  -->
                        <h3 class="result-title">
                            <a href="<?php echo home_url() . '/' . $row->url; ?>">
                                <?php echo $row->title; ?>
                            </a>
                        </h3>
                        <p class="result-snippet"><?php echo $row->description; ?></p>
                        <span class="result-tag"><?php echo $row->type; ?></span>
                    </article>

                <?php endforeach; ?>
            <?php else : ?>
                <div class="no-results-msg">
                    <p><?php pll_e('No results found for'); ?> "<strong><?php echo esc_html($search_query); ?></strong>".</p>
                    <a href="<?php echo home_url(); ?>" class="btn-back">&larr; <?php pll_e('Back to Home'); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>