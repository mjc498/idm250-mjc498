<?php
/**
 * Index Template (Fallback)
 *
 * This file is used as a last-resort fallback when no other template matches.
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>

<main class="my-work-container">
    <header class="page-header">
        <h1>My Work</h1>
    </header>

    <section class="projects-section">
        <?php get_template_part('components/latest-projects'); ?> 
    </section>
</main>

<?php get_footer(); ?>
