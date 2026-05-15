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
            
            ORDER BY 
            CASE WHEN lang = %s THEN 0 ELSE 1 END,
                title ASC
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
                            <?php
                            $result_lang = $row->lang;
                            $target_home = pll_home_url($result_lang);
                            ?>
                            <a href="<?php echo $target_home . $row->url; ?>">
                                <?php echo esc_html($row->title); ?>
                            </a>
                        </h3>
                        <p class="result-snippet"><?php echo $row->description; ?></p>
                        <div class="result-meta">
                            <span class="result-tag"><?php echo esc_html($row->type); ?></span>
                            <span class="lang-tag"><?php echo strtoupper($row->lang); ?></span>
                        </div>
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