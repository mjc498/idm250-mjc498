<?php
/**
 * Page Template
 *
 * This template is used for rendering static pages in WordPress.
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>
<?php get_template_part('components/hero-home'); ?>

<main class="page-content">
    <article class="page-body">
        <?php the_content(); ?>
    </article>

    <section class="styled-components">
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>

        <h2>Lists</h2>
        <ul>
            <li>Unordered List 1</li>
            <li>Unordered List 2</li>
        </ul>
        <ol>
            <li>Ordered List 1</li>
            <li>Ordered List 2</li>
        </ol>

        <h2>Table</h2>
        <table>
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                </tr>
                <tr>
                    <td>Data 3</td>
                    <td>Data 4</td>
                </tr>
            </tbody>
        </table>

        <h2>Buttons</h2>
        <a href="#" class="btn">Button</a>

        <h2>Pull Quotes</h2>
        <blockquote class="pull-quote">
            "This is a pull quote."
        </blockquote>

        <h2>Links</h2>
        <p>Visit <a href="#">this link</a> for more details.</p>

        <h2>Image with Caption</h2>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/default-hero.jpg" alt="Example">
            <figcaption>This is a caption.</figcaption>
        </figure>

        <h2>Video Embed</h2>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
</main>

<?php get_footer(); ?>
