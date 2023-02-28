<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <a href="<?php echo get_bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/site-logo.png" alt="">
                </a>
            </div>
            <nav class="main-nav">
                <?php wp_nav_menu( 'primary' )?>
            </nav>
            <div class="site-search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
