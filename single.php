<?php get_header(); ?>

<main class="single-post-container">
    <div class="container">
        <h1><?php the_title(); ?></h1>

        <p class="post-meta">
            Published on: <strong><?php echo get_the_date(); ?></strong> |
            By: <strong><?php the_author(); ?></strong>
        </p>

        <?php if (has_post_thumbnail()) : ?>
            <figure class="post-image">
                <?php the_post_thumbnail('large'); ?>
                <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
            </figure>
        <?php endif; ?>

        <div class="post-content">
            <?php the_content(); ?>

<!-- HEADINGS -->
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>

<!-- PARAGRAPHS -->
            <p>
                This is a paragraph with <a href="#">inline link</a>, 
                <strong>bold text</strong>, and <em>italic text</em>.
            </p>

<!-- UNORDERED LIST -->
            <ul>
                <li>Unordered One</li>
                <li>Unordered Two</li>
                <li>Unordered Three</li>
            </ul>

<!-- ORDERED -->
            <ol>
                <li>Ordered One</li>
                <li>Ordered Two</li>
                <li>Ordered Three</li>
            </ol>

<!-- QUOTE -->
            <blockquote class="pull-quote">
                <p>"This is a pull quote."</p>
            </blockquote>

<!-- BUTTON -->
            <div class="button-container">
                <a href="#" class="btn">Click Me</a>
            </div>

<!-- VIDEO -->
            <div class="video-container">
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/b65MoVwANq4" 
                        title="YouTube video"
                        frameborder="0"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
