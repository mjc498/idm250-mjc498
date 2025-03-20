<?php
/**
 * Template Name: Project Listing
 *
 * @package IDM250
 */

get_header(); ?>

<section class="hero-section">
    <?php get_template_part('components/hero-home'); ?> 
</section>

<section class="projects-section">
    <?php get_template_part('components/latest-projects'); ?> 
</section>

<?php get_footer(); ?>