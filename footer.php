<?php
/**
 * Footer Template
 */
?>
    <footer class="footer">
        <div class="container">
            <div class="footer-left">
                <p class="footer-copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>

            <div class="footer-right">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container'      => 'ul',
                        'menu_class'     => 'footer-nav',
                    ));
                    ?>
                </nav>

                <div class="social-links">
                    <a href="https://github.com/mjc498" target="_blank">GitHub</a> |
                    <a href="https://www.linkedin.com/in/maria-louisa-ching/" target="_blank">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
