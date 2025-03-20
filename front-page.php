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

<section class="logo-maria">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-maria.png" alt="Logo">
</section>

<section class="projects-section">
    <?php get_template_part('components/latest-projects'); ?> 
</section>

<?php get_footer(); ?>
