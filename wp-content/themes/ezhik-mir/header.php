<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="yandex-verification" content="ac85ef401c21509e" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<meta name="keywords" content="<?php the_field('ключевые_слова'); ?>">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:700|PT+Sans&amp;subset=cyrillic" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="wrap hor-wrap dis-flex align-items-center justify-content-start">
            <div class="header-logo col-1-8">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.jpg" width="100">
            </div>
             <div class="col-7-8 text-right">
                <div class="header-top dis-flex justify-content-between">
                    <div class="header-top-contacts col-4-8">
                        +7 925 152-92-23
                    </div>
                    <div class="header-top-search col-4-8">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/search.svg">
                    </div>
                </div>
                <div class="header-bottom dis-flex justify-content-between">
                    <nav class="header-bottom-menu">
                        <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
                    </nav>
                    <nav class="header-bottom-cat">
                        <div class="header-bottom-cat-title dis-flex align-items-center">
                            <span>рубрики</span> 
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/list.svg">
                        </div>
                        <menu class="header-bottom-cat-menu">
                            <?php echo do_shortcode('[widget id="nav_menu-3"]'); ?>
                        </menu>
                    </nav>
                </div>
            </div>
        </div>
    </header>