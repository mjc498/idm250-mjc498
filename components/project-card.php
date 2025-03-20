<article class="project-card">
    <?php if (has_post_thumbnail()) : ?>
        <div class="project-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="project-content">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn">View Project</a>
    </div>
</article>