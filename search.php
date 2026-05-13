<?php get_header(); ?>

<section class="search-results-page">
    <div class="container">
        
        <header class="page-header-search">
            <span><?php pll_e('Search Results for:'); ?></span>
            <h1><?php echo get_search_query(); ?></h1>
        </header>

        <div class="results-grid">
            <?php 
            global $wpdb; 
            
            // 1. On récupère le mot tapé dans la barre
            $search_query = get_search_query();
            $current_lang = pll_current_language(); // On récupère la langue actuelle (en, fr, ar)

            // 2. LA REQUÊTE SQL (Full-Text Search)
            // On cherche dans LA table master_data et on filtre par langue
            $results = $wpdb->get_results( $wpdb->prepare("
                SELECT * FROM bk_master_data 
                WHERE MATCH(title, description) AGAINST(%s)
                AND lang = %s
            ", $search_query, $current_lang) );

            // 3. AFFICHAGE DES RÉSULTATS
            if ( !empty($results) ) :
                foreach ( $results as $row ) : ?>
                    
                    <article class="result-item">
                        <span class="result-cat"><?php echo $row->type; ?></span>
                        <h3><?php echo $row->title; ?></h3>
                        <p><?php echo $row->description; ?></p>
                        <a href="<?php echo home_url() . '/' . $row->url; ?>" class="read-more">
                                <?php pll_e('Learn More'); ?> &rarr;
                        </a>
                    </article>

                <?php endforeach; 
            else : 
                // FALLBACK : Si le Full-Text ne trouve rien, on essaie le LIKE (plus souple)
                $results_like = $wpdb->get_results( $wpdb->prepare("
                    SELECT * FROM bk_master_data 
                    WHERE (title LIKE %s OR description LIKE %s)
                    AND lang = %s
                ", '%' . $wpdb->esc_like($search_query) . '%', '%' . $wpdb->esc_like($search_query) . '%', $current_lang) );

                if ( !empty($results_like) ) :
                    foreach ( $results_like as $row ) : ?>
                        <article class="result-item">
                            <span class="result-cat"><?php echo $row->type; ?></span>
                            <h3><?php echo $row->title; ?></h3>
                            <p><?php echo $row->description; ?></p>
                        </article>
                    <?php endforeach;
                else : ?>
                    <!-- MESSAGE SI RIEN N'EST TROUVÉ -->
                    <div class="no-results">
                        <p>Désolé, aucun résultat pour "<strong><?php echo $search_query; ?></strong>" en [<?php echo strtoupper($current_lang); ?>].</p>
                    </div>
                <?php endif; 
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>