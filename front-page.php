<?php get_header(); ?>

<!-- SECTION 1: HERO -->
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

<!-- SECTION 2: SERVICES -->
<section id="services" class="services-section">
    <div class="container">
        <div class="section-header">
            <span class="subtitle"><?php pll_e('Expertise Subtitle'); ?></span>
            <h2 class="section-title"><?php pll_e('Expertise Title'); ?></h2>
        </div>
        
        <div class="services-visual-grid">
            <!-- Photography -->
            <div class="service-visual-card" style="background-image: url('https://images.unsplash.com/photo-1542038784456-1ea8e935640e?auto=format&fit=crop&w=800&q=80');">
                <div class="card-overlay">
                    <span class="card-no">01</span>
                    <h3><?php pll_e('S1 Title'); ?></h3>
                </div>
            </div>
           <!-- 02: Video Editing -->
            <div class="service-visual-card" style="background-image: url('https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?auto=format&fit=crop&w=800&q=80');">
                <div class="card-overlay">
                    <span class="card-no">02</span>
                    <h3><?php pll_e('S2 Title'); ?></h3>
                    <!-- <p>Bringing rhythm and narrative flow to your raw footage.</p> -->
                </div>
            </div>
            <!-- 03: Voice Over -->
            <div class="service-visual-card" style="background-image: url('https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=800&q=80');">
                <div class="card-overlay">
                    <span class="card-no">03</span>
                    <h3><?php pll_e('S3 Title'); ?></h3>
                    <!-- <p>Professional narration to give your project a unique identity.</p> -->
                </div>
            </div>
            <!-- 04: Drone -->
        <div class="service-visual-card" style="background-image: url('https://images.unsplash.com/photo-1508614589041-895b88991e3e?auto=format&fit=crop&w=800&q=80');">
            <div class="card-overlay">
                <span class="card-no">04</span>
                <h3><?php pll_e('S4 Title'); ?></h3>
                <!-- <p>Breathtaking aerial perspectives for a cinematic edge.</p> -->
            </div>
        </div>

        <!-- 05: Content Creation -->
        <div class="service-visual-card" style="background-image: url('https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=800&q=80');">
            <div class="card-overlay">
                <span class="card-no">05</span>
                <h3><?php pll_e('S5 Title'); ?></h3>
                <!-- <p>Strategic storytelling designed for social engagement.</p> -->
            </div>
        </div>

        <!-- 06: Motion Graphics -->
        <div class="service-visual-card" style="background-image: url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=800&q=80');">
            <div class="card-overlay">
                <span class="card-no">06</span>
                <h3><?php pll_e('S6 Title'); ?></h3>
                <!-- <p>Dynamic animations that bring your graphic data to life.</p> -->
            </div>
        </div>

        <!-- 07: Web Dev (Large Card) -->
        <div class="service-visual-card large-card" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80');">
            <div class="card-overlay">
                <span class="card-no">07</span>
                <h3><?php pll_e('S7 Title'); ?></h3>
                <!-- <p>Building high-performance digital platforms for premium brands.</p> -->
            </div>
        </div>

        </div>
    </div>
</section>

<!-- SECTION 3: CONTACT -->
<section class="contact-section" id="contact">
    <div class="container contact-grid">
        
        <!-- Côté Gauche : Le Message de l'Owner -->
        <div class="contact-info">
            <span class="subtitle"><?php pll_e('Contact subtitle'); ?></span>
            <h2><?php pll_e('Contact Title1'); ?><br><span><?php pll_e('Contact Title2'); ?></span></h2> 
            
            <div class="devis-box">
                <h3><?php pll_e('Devis Box Title'); ?></h3>
                <p><?php pll_e('Devis Box Text'); ?></p>
            </div>

            <div class="direct-contact">
                <div class="contact-item">
                    <i class="fab fa-whatsapp"></i>
                    <span>(+212) 06 97-933388</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>bkmediaagency2025@gmail.com</span>
                </div>
            </div>
        </div>
           

        <!-- Côté    Droit : Le Formulaire (Moteur PHP) -->
        <div class="contact-form-container">
            <?php 
            $id_en = '7371011';
            $id_ar = '9f4bcdc'; 
            $id_fr = '1a2d0c2';
            
            $current_form_id = $id_en;

            if(function_exists('pll_current_language')){
                $lang = pll_current_language();
                 if($lang == 'ar') {
                    $current_form_id = $id_ar;
                } elseif($lang == 'fr') {
                    $current_form_id = $id_fr;
                } else {
                    $current_form_id = $id_en;
                }
            }
            
            echo do_shortcode('[contact-form-7 id="' . $current_form_id . '"]'); 
            ?>
        </div>  

    </div>
    
</section>

<!-- SECTION 4: PORTFOLIO TEASER -->
<section id="portfolio" class="portfolio-teaser">
    <div class="container">
        <h2 class="section-title" style="color: white;"><?php pll_e('Portfolio Title'); ?></h2>
        <div class="portfolio-grid" id="portfolio-grid">
            <div class="portfolio-item">
                <div class="work-thumb" style="background:#222; height: 300px;"></div>
                <div class="work-info">
                    <h4><?php pll_e('Work 1 Title'); ?></h4>
                    <span><?php pll_e('Work 1 Cat'); ?></span>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="work-thumb" style="background:#222; height: 300px;"></div>
                <div class="work-info">
                    <h4><?php pll_e('Work 2 Title'); ?></h4>
                    <span><?php pll_e('Work 2 Cat'); ?></span>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="work-thumb" style="background:#222; height: 300px;"></div>
                <div class="work-info">
                    <h4><?php pll_e('Work 3 Title'); ?></h4>
                    <span><?php pll_e('Work 3 Cat'); ?></span>
                </div>
            </div>
            <!-- Hidden items (Will show on click) -->
            <div class="portfolio-item hidden-item" style="display: none;">
                <div class="work-thumb" style="background:#333; height: 300px;"></div>
                <div class="work-info"><h4><?php pll_e('Work 4 Title'); ?></h4><span>Category</span></div>
            </div>
            <div class="portfolio-item hidden-item" style="display: none;">
                <div class="work-thumb" style="background:#333; height: 300px;"></div>
                <div class="work-info"><h4><?php pll_e('Work 5 Title'); ?></h4><span>Category</span></div>
            </div>
        </div>
        <button id="see-more-btn" class="btn" style="margin-top:50px; cursor: pointer;">
            <?php pll_e('Portfolio Button'); ?>
        </button>
    </div>
</section>

<?php get_footer(); ?>