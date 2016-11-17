<?php get_header(); /* Template Name: Страница - Контакты */ ?>
<section class="producters-page">
    <header class="katalog-page-header wow hide fadeIn">
        <div class="wrap hor-wrap">
            <div class="section-title wow hide fadeInUp" data-wow-delay="0.2s">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                 yoast_breadcrumb('<p id="breadcrumbs" class="wow hide fadeInUp" data-wow-delay="0.3s">','</p>');
            }
            ?> 
        </div>
    </header>
    <div class="wrap hor-wrap dis-flex flex-wrap-wrap wow hide fadeIn">
        <div class="col-2-6 padding-r-24">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum auctor ultricies. Donec et ligula et neque dictum iaculis. Suspendisse aliquet tincidunt ipsum, non sodales metus viverra at. Etiam nec bibendum ligula. Ut pellentesque iaculis porta.</p>
        </div>
        <div class="col-2-6 padding-r-24">
            <ul>
                <li>8 800 123 23 23</li>
                <li>info@fog-hedgehog.ru</li>
            </ul>
        </div>
        <div class="col-2-6">
            <ul>
                <li>Ежедневно, 24 часа.</li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>