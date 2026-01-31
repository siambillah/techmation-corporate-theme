<footer class="site-footer">
        <div class="footer-container">
            
            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php endif; ?>
            </div>

            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php endif; ?>
            </div>

            <div class="footer-col">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php endif; ?>
            </div>

        </div>

        <div class="copyright-area">
            <p>&copy; <?php echo date('Y'); ?> Techmation Engineering Limited. All Rights Reserved.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            // মেনু কন্টেইনারটি ধরলাম
            var nav = document.getElementById('site-navigation');
            
            // যদি 'active' ক্লাস থাকে তবে সরাবে, না থাকলে যোগ করবে
            if (nav.classList.contains('active')) {
                nav.classList.remove('active');
            } else {
                nav.classList.add('active');
            }
        });
    </script>
</body>
</html>