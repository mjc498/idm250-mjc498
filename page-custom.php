<?php
/**
 * Template Name: Custom Page Template
 */
get_header(); ?>

<main class="custom-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        
        <div class="custom-content">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
