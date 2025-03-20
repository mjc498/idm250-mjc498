<?php
/**
 * Header Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
        <?php
        wp_title('|', true, 'right');
        bloginfo('name'); // IDM250
        ?>
    </title>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header"> 
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/favicon.png" 
                    alt="<?php bloginfo('name'); ?>" 
                    class="logo">
            </a>
            
            <nav class="nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'nav-menu',
                ));
                ?>
            </nav>
        </div>
    </header>
