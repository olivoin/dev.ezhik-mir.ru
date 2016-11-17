<?php get_header(); /* Template Name: Страница Корзина */ ?>
<section class="katalog-page page-cart">
    <header class="katalog-page-header wow hide fadeIn">
        <div class="wrap hor-wrap">
            <div class="section-title wow hide fadeInUp" data-wow-delay="0.2s">
                <h1><?php woocommerce_page_title(); ?></h1>
            </div>
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                 yoast_breadcrumb('<p id="breadcrumbs" class="wow hide fadeInUp" data-wow-delay="0.3s">','</p>');
            }
            ?> 
        </div>
    </header>
    <div class="wrap hor-wrap">
        <div class="dis-flex">
            <div class="katalog-wrapper wow hide fadeIn">
                <?php the_content(); ?> 
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>