<?php get_header(); ?>

<main>
    <section class="portfolio">
        <div class="container">
            <h2>My Work</h2>
            <div class="portfolio-grid">
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6,
                ));

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="portfolio-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p>No portfolio items found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
