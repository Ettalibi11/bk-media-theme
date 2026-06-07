<footer class="main-footer">
        <div class="container footer-grid">
            
            <!-- Column 1: Brand -->
            <div class="footer-column brand-col">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <?php 
                    $logo_id = get_theme_mod('custom_logo');
                    if ($logo_id) {
                        echo wp_get_attachment_image($logo_id, 'full');
                    } else { ?>
                        BK<span>MEDIA</span>
                    <?php } ?>
                </a>
                <p><?php pll_e('Footer text'); ?></p>
                <div class="social-links">
                    <a href="https://wa.me/212600179992" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/bkmedia_agency" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@bkmediaagency" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.facebook.com/Bkmediaagency" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.tiktok.com/@bkmediaagency" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.linkedin.com/in/bk-media-agency-25280b399" target="_blank"><i class="fab fa-linkedin"></i></a>

                </div>
            </div>

            <!-- Column 2: Navigation -->
            <div class="footer-column links-col">
                <h5>Quick Links</h5>
                <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'footer-menu' 
                ) ); 
                ?>
            </div>

            <!-- Column 3: Contact -->
            <div class="footer-column contact-col">
                <h5><?php pll_e('Footer Contact Title'); ?></h5>
                <p><?php pll_e('Footer Contact mail'); ?> <span>bkmediaagency2025@gmail.com</span></p>
                <p><?php pll_e('Footer Contact city'); ?></p>
                <a href="#contact" class="footer-cta"><?php pll_e('Footer Work With Us'); ?>&rarr;</a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> BK MEDIA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
     
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // --- 1. SEE MORE BUTTON LOGIC ---
        const seeMoreBtn = document.getElementById('see-more-btn');
        if (seeMoreBtn) {
            seeMoreBtn.addEventListener('click', function() {
                const hiddenItems = document.querySelectorAll('.hidden-item');
                hiddenItems.forEach(item => {
                    item.style.display = 'block';
                });
                this.style.display = 'none';
            });
        }

        // --- 2. MOBILE MENU LOGIC ---
        const toggle = document.getElementById('mobile-menu-toggle');
        const header = document.querySelector('header');
        if (toggle) {
            toggle.addEventListener('click', function() {
                header.classList.toggle('nav-active');
                toggle.classList.toggle('is-active');
            });
        }

        // --- 3. VIDEO POPUP (MODAL) LOGIC ---
        const modal = document.getElementById('videoModal');
        const modalVideo = document.getElementById('modalVideo');
        const closeModal = document.querySelector('.close-modal');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        if (modal && modalVideo) {
            portfolioItems.forEach(item => {
                item.addEventListener('click', function() {
                    const videoSource = this.querySelector('video source');
                    if (videoSource) {
                        modalVideo.src = videoSource.src;
                        modal.style.display = 'flex';
                        modalVideo.load();
                        modalVideo.play();
                    }
                });
            });

            if (closeModal) {
                closeModal.addEventListener('click', function() {
                    modal.style.display = 'none';
                    modalVideo.pause();
                    modalVideo.src = ""; 
                });
            }

            window.addEventListener('click', function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                    modalVideo.pause();
                    modalVideo.src = "";
                }
            });
        }
    });
    </script>   
</body>
</html>