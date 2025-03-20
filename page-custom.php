<?php
/**
 * Template Name: Custom Template
 *
 * A uniquely designed template for special pages.
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>

<?php get_template_part('components/hero-home'); ?>

<main class="custom-page">

    <article class="custom-content">
        <?php the_content(); ?>
    </article>
</main>

<?php get_footer(); ?>
