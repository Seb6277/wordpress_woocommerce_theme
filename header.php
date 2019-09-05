<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('test'); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="container">

        <div class="row">
            <div class="col d-flex align-items-center justify-content-between">
                <?php if (has_custom_logo()) :?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                <a href="<?php bloginfo('url'); ?>">
                    <h1 class="logo"><?php bloginfo('name');?></h1>
                </a>
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php endif; ?>
                        <?php
                        wp_nav_menu(
                                array(
                                        'theme_location' => 'top-menu',
                                        'menu_class' => 'top-menu'
                                )
                        );
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>