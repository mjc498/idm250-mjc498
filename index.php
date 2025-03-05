<?php get_header(); ?>

<main>
    <section class="portfolio">
        <div class="container">
            <h1 class="section-title">My Work</h1>
            <div class="portfolio-grid">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="post-card">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p style="color: red; font-weight: bold;">No portfolio items found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
