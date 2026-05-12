<!-- The search form template for displaying the search input field.  -->
 


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrapper">
        <input type="search" class="search-field" 
            placeholder="<?php echo esc_attr_x( 'Search projects, services...', 'placeholder', 'bk-media' ); ?>" 
            value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit">
            <i class="fas fa-search"></i> 
        </button>
    </div>
</form>