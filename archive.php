<?php
/**
 * Archive Projects Template
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>

<div class="wrapper">
    <header class="archive-header">
        <h1>My Projects</h1>
        <p>Browse my latest projects below.</p>
    </header>

    <?php if (have_posts()) : ?>
        <ul class="grid grid-3">
            <?php while (have_posts()) : the_post(); ?>
                <li class="grid-item">
                    <?php get_template_part('components/project-card'); ?>
                </li>
            <?php endwhile; ?>
        </ul>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No projects found.</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>