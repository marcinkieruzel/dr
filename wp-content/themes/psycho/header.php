<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if 9]><meta content='IE=edge' http-equiv='X-UA-Compatible'/><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title('-'); ?></title>
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/fav.png" sizes="16x16" />

		<link rel="apple-touch-icon" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/fav.png" />
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
    <header id="mainHeader">
        <div class="container">


        <nav id="mainNav">
            <figure id="logoNav">
                <a href="<?php echo site_url('/'); ?>">
                    <img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Dobre rozmowy">
                </a>
            </figure>

            <nav id="fixNavs" class="container">
                <a id="toggleMenu" href="#">Menu</a>
                <a href="<?php echo site_url('/'); ?>">
                    <img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Dobre rozmowy">
                </a>
                <?php wp_nav_menu(array("theme_location" => "header-menu", "container" => "")); ?>
            </nav>


            <div class="clearfix" id="fixme">

            </div>

        </nav>

        </div>
    </header>
