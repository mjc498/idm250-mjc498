<?php
/**
 * Front Page Template
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>

<section class="hero-section">
    <?php get_template_part('components/hero-home'); ?> 
</section>

<section class="projects-section">
    <?php get_template_part('components/latest-projects'); ?> 
</section>

<?php get_footer(); ?>