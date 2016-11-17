<?php get_header(); /* Template Name: Страница Каталог */ ?>
<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($page->ID) ); ?>
<section class="katalog-page">
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
            <aside class="katalog-filter col-1-6">
                <div class="filter-list wow hide fadeInLeft">
                    <?php dynamic_sidebar('shop-sidebar'); ?>
                </div> 
            </aside>
            <div class="katalog-wrapper col-5-6">
                <?php woocommerce_content(); ?> 
            </div>
            <div class="katalog-text-content">
                <?php category_description(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>