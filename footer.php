<?php
/**
 * Footer Template
 */
?>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>

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
                <a href="https://github.com" target="_blank">GitHub</a> |
                <a href="https://linkedin.com" target="_blank">LinkedIn</a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
