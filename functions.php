<?php
function bk_media_setup() {
    // Adds the site title to the browser tab automatically
    add_theme_support( 'title-tag' );
    // Enables Featured Images for posts
    add_theme_support( 'post-thumbnails' );
    // Registers the main menu
    register_nav_menus( array(
        'primary' => 'Primary Menu',
    ) );
    add_theme_support( 'custom-logo' );
    load_theme_textdomain( 'bk-media', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'bk_media_setup' );

// Enqueue Google Fonts (Optional but recommended for creative sites)
function bk_media_scripts() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );
    
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Poppins:wght@600;800&display=swap' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'bk_media_scripts' );

// Register our custom text for translation
add_action('init', function() {
  if (function_exists('pll_register_string')) {
    pll_register_string('BK Media', 'Hero Title', 'Home');
    pll_register_string('BK Media', 'Hero Subtitle', 'Home');
    pll_register_string('BK Media', 'Hero Button', 'Home');
    pll_register_string('BK Media', 'experience Button', 'Home');
    // Expertise Section
    pll_register_string('BK-Media', 'Expertise Title', 'Services');
    pll_register_string('BK-Media', 'Expertise Subtitle', 'Services');
    
        
    // The 7 Services (Titles)
    pll_register_string('BK-Media', 'S1 Title', 'Services');
    pll_register_string('BK-Media', 'S2 Title', 'Services');
    pll_register_string('BK-Media', 'S3 Title', 'Services');
    pll_register_string('BK-Media', 'S4 Title', 'Services');
    pll_register_string('BK-Media', 'S5 Title', 'Services');
    pll_register_string('BK-Media', 'S6 Title', 'Services');
    pll_register_string('BK-Media', 'S7 Title', 'Services');

    // Contact Section
    pll_register_string('BK-Media', 'Contact Title1', 'Contact');
    pll_register_string('BK-Media', 'Contact Title2', 'Contact');
    pll_register_string('BK-Media', 'Contact subtitle', 'Contact');
    pll_register_string('BK-Media', 'Devis Box Title', 'Contact');
    pll_register_string('BK-Media', 'Devis Box Text', 'Contact');
    
    // Portfolio Section
    pll_register_string('BK-Media', 'the_title()', 'Portfolio');
    pll_register_string('BK-Media', 'Portfolio Title', 'Portfolio');
    pll_register_string('BK-Media', 'Portfolio Button', 'Portfolio');
    // Portfolio Works (1-10)
    for ($i = 1; $i <= 10; $i++) {
        pll_register_string('BK-Media', "Work $i Title", 'Portfolio');
        pll_register_string('BK-Media', "Work $i Cat", 'Portfolio');
    }
    // pll_register_string('BK-Media', 'Work 1 Title', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 1 Cat', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 2 Title', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 2 Cat', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 3 Title', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 3 Cat', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 4 Title', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 4 Cat', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 5 Title', 'Portfolio');
    // pll_register_string('BK-Media', 'Work 5 Cat', 'Portfolio');


    // Footer Section
    pll_register_string('BK-Media', 'Footer Contact Title', 'Footer');
    pll_register_string('BK-Media', 'Footer Links Title', 'Footer');
    pll_register_string('BK-Media', 'Footer text', 'Footer');
    pll_register_string('BK-Media', 'Footer Work With Us', 'Footer');
    pll_register_string('BK-Media', 'Footer Contact mail', 'Footer');
    pll_register_string('BK-Media', 'Footer Contact city', 'Footer');

    pll_register_string('BK-Media', 'Results Found', 'Search');
    pll_register_string('BK-Media', 'Search:', 'Search');
    pll_register_string('BK-Media', 'No results found for', 'Search');
   
  }
});