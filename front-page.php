<?php get_header(); ?>

<!-- ═══════════════════════════════════════════════════════════════
     SECTION 1: HERO
═══════════════════════════════════════════════════════════════ -->
<section class="hero">
    <div class="container hero-flex">
 
        <div class="hero-content">
            <h1><?php pll_e('Hero Title'); ?></h1>
            <p><?php pll_e('Hero Subtitle'); ?></p>
            <a href="#contact" class="btn"><?php pll_e('Hero Button'); ?></a>
        </div>
 
        <div class="hero-image">
            <div class="image-frame">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/bw (2).jpg" alt="Owner">
                <div class="experience-badge"><?php pll_e('experience Button'); ?></div>
            </div>
        </div>
 
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     SECTION 2: SERVICES
     ═══════════════════════════════════════════════════════════════ -->
<section id="services" class="services-section">
    <div class="container">
 
        <div class="section-header">
            <span class="subtitle"><?php pll_e('Expertise Subtitle'); ?></span>
            <h2 class="section-title"><?php pll_e('Expertise Title'); ?></h2>
        </div>
 
        <div class="services-visual-grid">
            <?php bk_render_services();  ?>
        </div>
 
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3: CONTACT
     ═══════════════════════════════════════════════════════════════ -->
<section class="contact-section" id="contact">
    <div class="container contact-grid">
 
        <!-- Left: Owner message -->
        <div class="contact-info">
            <span class="subtitle"><?php pll_e('Contact subtitle'); ?></span>
            <h2>
                <?php pll_e('Contact Title1'); ?><br>
                <span><?php pll_e('Contact Title2'); ?></span>
            </h2>
 
            <div class="devis-box">
                <h3><?php pll_e('Devis Box Title'); ?></h3>
                <p><?php pll_e('Devis Box Text'); ?></p>
            </div>
 
            <div class="direct-contact">
                <div class="contact-item">
                    <i class="fab fa-whatsapp"></i>
                    <a href="https://wa.me/212600179992" style="color:inherit; text-decoration:none;">
                        06 97-933388
                    </a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:bkmediaagency2025@gmail.com" style="color:inherit; text-decoration:none;">
                        bkmediaagency2025@gmail.com
                    </a>
                </div>
            </div>
        </div>
 
        <!-- Right: CF7 Form (language-aware, logic in bk-helpers.php) -->
        <div class="contact-form-container">
            <?php echo bk_contact_form(); ?>
        </div>
 
    </div>
</section>
<!-- ═══════════════════════════════════════════════════════════════
     SECTION 4: PORTFOLIO
     ═══════════════════════════════════════════════════════════════ -->
<section id="portfolio" class="portfolio-teaser">
    <div class="container">
 
        <h2 class="section-title" style="color: white;">
            <?php pll_e('Portfolio Title'); ?>
        </h2>
 
        <div class="portfolio-grid" id="portfolio-grid">
            <?php bk_render_portfolio(); /* defined in bk-helpers.php */ ?>
        </div>
 
        <button id="see-more-btn" class="btn" style="margin-top: 50px; cursor: pointer;">
            <?php pll_e('Portfolio Button'); ?>
        </button>
 
    </div>
</section>


<!-- Video Modal (Popup) -->
<div id="videoModal" class="video-modal">
    <span class="close-modal">&times;</span>
    <div class="modal-content">
        <video id="modalVideo" controls autoplay>
            <source src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<?php get_footer(); ?>
