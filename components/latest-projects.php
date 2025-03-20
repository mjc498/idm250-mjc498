<?php
/**
 * Latest Projects Section
 * 
 * This template displays the latest projects dynamically.
 * 
 * @package IDM250
 */

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,        
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$projects_query = new WP_Query($args);

if ($projects_query->have_posts()) : ?>
    <section class="latest-projects">
        <h2>Latest Projects</h2>
        <div class="projects-grid">
            <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
                <article class="project-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="project-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h3 class="project-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <div class="project-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 50, ' [...]'); ?>
                    </div>


                    <a href="<?php the_permalink(); ?>" class="project-read-more">View Project →</a>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <section class="latest-projects no-projects">
        <h2>Latest Projects</h2>
        <p>No projects found. Please check back later.</p>
    </section>
<?php endif; ?>