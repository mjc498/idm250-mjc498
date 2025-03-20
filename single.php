<?php
/**
 * Single Post Template
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="single-post-container">
        <article class="post-content">
            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-image">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endif; ?>

            <div class="post-body">
                <?php the_content(); ?>
            </div>

            <div class="post-navigation">
                <div class="prev"><?php previous_post_link(); ?></div>
                <div class="next"><?php next_post_link(); ?></div>
            </div>
        </article>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
