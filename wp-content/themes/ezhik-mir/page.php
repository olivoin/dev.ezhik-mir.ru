<?php get_header(); ?>
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
    <div class="wrap hor-wrap">
        <section class="col-6-6 wow hide fadeIn">
            <?php the_content(); ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>