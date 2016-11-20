<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="yandex-verification" content="ac85ef401c21509e" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<meta name="keywords" content="<?php the_field('ключевые_слова'); ?>">
<link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:900&amp;subset=cyrillic" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="wrap hor-wrap dis-flex align-items-center">
            <div class="header-logo col-2-8">
                <a href="/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png">
                </a>
            </div>
            <div class="header-menu col-4-8 dis-flex justify-content-center">
                <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
            </div>
            <div class="header-search col-2-8 text-right">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/search.svg">
            </div>
        </div>
    </header>