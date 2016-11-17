<?php get_header(); ?>
<section id="content">
    <div class="wrap hor-wrap">
        <section class="content-wrap dis-flex flex-wrap-wrap justify-content-between"> 
            <div class="content-wrap-posts">
                <div class="content-wrap-posts-single">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <header class="single-post-header" style="background-image: url(<?php
                            if ( has_post_thumbnail()) {
                            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            echo ''.$full_image_url[0] . '';
                            }
                        ?>)">
                            <div class="full-height full-width dis-flex align-items-center">
                                <h1 class="text-center"><?php the_title(); ?></h1>
                            </div>
                        </header>
                    <div class="single-post-content text-block">
                        <div class="post-tags">
                            <?php the_tags('','',''); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile ?>
                    <?php endif; ?>
                </div>
                <div class="content-wrap-posts-comments">
                    
                </div>
            </div>
            <?php get_sidebar(); ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>