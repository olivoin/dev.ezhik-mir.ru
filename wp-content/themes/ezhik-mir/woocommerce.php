<?php get_header(); ?>
<section id="content">
    <div class="wrap hor-wrap">
        <section class="content-wrap dis-flex flex-wrap-wrap justify-content-between"> 
            <div class="content-wrap-posts">
                <?php woocommerce_content(); ?>
            </div>
            <?php get_template_part('templates/parts/shop-sidebar'); ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>