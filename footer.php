<footer class="main-footer">
        <div class="container footer-grid">
            
            <!-- Column 1: Brand -->
            <div class="footer-column brand-col">
                <a href="<?php echo home_url(); ?>" class="logo">BK<span>MEDIA</span></a>
                <p>Creating cinematic impact through modern content and storytelling. Based in Morocco, working globally.</p>
                <div class="social-links">
                    <a href="#" style="color:white; margin-right:15px; font-size:1.2rem;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="color:white; margin-right:15px; font-size:1.2rem;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color:white; font-size:1.2rem;"><i class="fab fa-youtube"></i></a>
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
                <p><?php pll_e('Footer Contact mail'); ?> <span>contact@bkmedia.com</span></p>
                <p><?php pll_e('Footer Contact city'); ?></p>
                <a href="#contact" class="footer-cta"><?php pll_e('Footer Work With Us'); ?>&rarr;</a>
            </div>
           

        </div>

        <div class="footer-bottom links col">
            <div class="container">
    
                <p>&copy; <?php echo date('Y'); ?> BK MEDIA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script>
        document.getElementById('see-more-btn').addEventListener('click', function() {
            // Select all hidden items
            const hiddenItems = document.querySelectorAll('.hidden-item');
            
            hiddenItems.forEach(item => {
                item.style.display = 'block'; // Show the item
            });

            // Hide the button after showing everything
            this.style.display = 'none';
        });
    </script>
</body>
</html>