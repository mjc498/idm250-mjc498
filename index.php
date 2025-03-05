<?php get_header(); ?>

<main>
    <section class="portfolio">
        <div class="container">
            <h2>My Work</h2>
            <div class="portfolio-grid">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="portfolio-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p> <!-- Added excerpt for debugging -->
                            </a>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p style="color: red; font-weight: bold;">No posts found. Check if you have published posts.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
