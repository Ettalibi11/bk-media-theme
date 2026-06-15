<?php
/**
 * Returns the CF7 shortcode for the correct language.
 * Usage in front-page.php: echo bk_contact_form();
 */
function bk_contact_form() {
    $forms = array(
        'en' => '7371011',
        'ar' => '9f4bcdc',
        'fr' => '1a2d0c2',
    );
 
    $lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
    $id   = isset($forms[$lang]) ? $forms[$lang] : $forms['en'];
 
    return do_shortcode('[contact-form-7 id="' . esc_attr($id) . '"]');
}
 
// ─────────────────────────────────────────────────────────────────────────────
// 2. SERVICES — one array drives the entire services grid
// ─────────────────────────────────────────────────────────────────────────────
 
/**
 * Service definitions. To add/remove a service, just add/remove an entry here.
 * 'large' => true  makes the card span the full row (like card 07).
 */
function bk_get_services() {
    return array(
        array(
            'no'    => '01',
            'title' => 'S1 Title',
            'desc'  => 'S1 Desc',
            'image' => 'https://images.unsplash.com/photo-1542038784456-1ea8e935640e?auto=format&fit=crop&w=800&q=80',
        ),
        array(
            'no'    => '02',
            'title' => 'S2 Title',
            'desc'  => 'S2 Desc',
            'image' => 'https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?auto=format&fit=crop&w=800&q=80',
        ),
        array(
            'no'    => '03',
            'title' => 'S3 Title',
            'desc'  => 'S3 Desc',
            'image' => 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=800&q=80',
        ),
        array(
            'no'    => '04',
            'title' => 'S4 Title',
            'desc'  => 'S4 Desc',
            'image' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?auto=format&fit=crop&w=800&q=80',
        ),
        array(
            'no'    => '05',
            'title' => 'S5 Title',
            'desc'  => 'S5 Desc',
            'image' => 'https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=800&q=80',
        ),
        array(
            'no'    => '06',
            'title' => 'S6 Title',
            'desc'  => 'S6 Desc',
            'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=800&q=80',
        ),
        array(
            'no'    => '07',
            'title' => 'S7 Title',
            'desc'  => 'S7 Desc',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
            'large' => true,
        ),
    );
}

/**
 * Renders the services visual grid.
 * Usage in front-page.php: bk_render_services();
 */
function bk_render_services() {
    foreach (bk_get_services() as $s) {
        $extra_class = !empty($s['large']) ? ' large-card' : '';
        $image_url   = esc_url($s['image']);
        $card_no     = esc_html($s['no']);
        $title_key   = $s['title'];
        $desc_key    = $s['desc'];
        ?>
        <div class="service-visual-card<?php echo $extra_class; ?>" 
             style="background-image: url('<?php echo $image_url; ?>');">
            <div class="card-overlay">
                <span class="card-no"><?php echo $card_no; ?></span>
                <h3><?php pll_e($title_key); ?></h3>
                <p><?php pll_e($desc_key); ?></p>
            </div>
        </div>
        <?php
    }
}

// ─────────────────────────────────────────────────────────────────────────────
// 3. PORTFOLIO — one array drives the entire portfolio grid
// ─────────────────────────────────────────────────────────────────────────────
 
/**
 * Portfolio item definitions.
 * 'hidden' => true  means the item is hidden until "See More" is clicked.
 * To add a video: add an entry and drop the .mp4 in /assets/.
 */
function bk_get_portfolio_items() {
    $base = get_template_directory_uri() . '/assets/';
    $items = array();
 
    for ($i = 1; $i <= 10; $i++) {
        $num = str_pad($i, 2, '0', STR_PAD_LEFT); // "01", "02", ...
        $items[] = array(
            'id'     => 'work-' . $num,
            'src'    => $base . 'v' . $i . '.mp4',
            'title'  => 'Work ' . $i . ' Title',
            'cat'    => 'Work ' . $i . ' Cat',
            'hidden' => ($i > 3), // first 3 visible, rest hidden
        );
    }
 
    return $items;
}

/**
 * Renders the portfolio grid.
 * Usage in front-page.php: bk_render_portfolio();
 */
function bk_render_portfolio() {
    foreach (bk_get_portfolio_items() as $item) {
        $hidden_class = $item['hidden'] ? ' hidden-item' : '';
        $hidden_style = $item['hidden'] ? ' style="display: none;"' : '';
        ?>
        <div class="portfolio-item<?php echo $hidden_class; ?>"
             id="<?php echo esc_attr($item['id']); ?>"
             <?php echo $hidden_style; ?>>
            <video autoplay loop muted playsinline class="work-video">
                <source src="<?php echo esc_url($item['src']); ?>" type="video/mp4">
            </video>
            <div class="work-info">
                <h4><?php pll_e($item['title']); ?></h4>
                <span><?php pll_e($item['cat']); ?></span>
            </div>
        </div>
        <?php
    }
}

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
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.3' );
}
add_action( 'wp_enqueue_scripts', 'bk_media_scripts' );



// Register our custom text for translation
add_action('init', function() {
  if (function_exists('pll_register_string')) {
    pll_register_string('BK Media', 'Hero Title', 'Home');
    pll_register_string('BK Media', 'Hero Subtitle', 'Home');
    pll_register_string('BK Media', 'Hero Button', 'Home');
    pll_register_string('BK Media', 'experience Button', 'Home');

    pll_register_string('BK-Media', 'Results Found', 'Search');
    pll_register_string('BK-Media', 'Search:', 'Search');
    pll_register_string('BK-Media', 'No results found for', 'Search');
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
    for ($i = 1; $i <= 7; $i++) {
    pll_register_string('BK-Media', "S$i Desc", 'Services');
    }

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
    pll_register_string('BK-Media', 'Back to Home', 'Search');
   
  }
});