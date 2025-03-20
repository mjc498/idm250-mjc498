<?php
/**
 * 404 Page Template
 *
 * @package IDM250
 */
?>

<?php get_header(); ?>

<main class="error-page">
    <div class="container">
        <h1>404 - Page Not Found</h1>
        <p class="error-message">
            Oops! The page you’re looking for doesn’t exist.
        </p>

        <div class="error-options">
            <a href="<?php echo home_url(); ?>" class="btn">Return to Homepage</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
