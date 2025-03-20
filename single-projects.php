<?php
/**
 * Single Projects Template
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="single-row">
        <div class="wrapper">
            <?php get_template_part('components/hero-home'); ?> 

            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="project-image">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endif; ?>

            <div class="project-meta">
                <p><strong>Client:</strong> <?php echo get_field('client_name'); ?></p>
                <p><strong>Industry:</strong> <?php echo get_field('industry'); ?></p>
                <p><strong>Project Categories:</strong>
                    <?php echo get_the_term_list(
                        get_the_ID(),
                        'project-categories',
                        '',
                        ', ',
                        ''
                    ); ?>
                </p>
            </div>

            <div class="project-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>