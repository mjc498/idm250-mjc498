<?php
/**
 * Hero Section Template
 * 
 * Displays a hero banner with a dynamic image and title.
 *
 * @package IDM250
 */
?>

<section class="hero">
    <div class="hero-container">
        <?php if (has_post_thumbnail()) : ?>
            <div class="hero-image">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php else : ?>
            <div class="hero-image default-hero">
                <img src="<?php echo get_template_directory_uri(); ?>/images/default-hero.jpg" alt="Default Hero Image">
            </div>
        <?php endif; ?>

        <h1><?php the_title(); ?></h1>
    </div>
</section>