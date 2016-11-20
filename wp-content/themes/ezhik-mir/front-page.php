<?php get_header(); ?>
<section id="content">
    <div class="wrap hor-wrap">
        <section class="front-posts dis-flex flex-wrap-wrap">
            <div class="col-5-8 front-posts-main">
                <?php
                    $post_object = get_field('важная_публикация_1');
                    if( $post_object ): 
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                ?>
                <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <article class="post" style="background-image: url(<?php
                        if ( has_post_thumbnail()) {
                        $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        echo ''.$full_image_url[0] . '';
                        }
                    ?>)">
                        <div class="full-height dis-flex align-items-center justify-content-center text-center">
                            <header class="post-header col-5-8">
                                <h3 class="post-title"><?php the_title(); ?></h3>
                                <blockquote class="post-quote">
                                    <?php the_excerpt(); ?>
                                </blockquote>
                            </header>
                        </div>
                    </article>
                </a>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <div class="col-3-8 front-posts-second">
                <?php
                    $post_object = get_field('важная_публикация_2');
                    if( $post_object ): 
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <article class="post" style="background-image: url(<?php
                        if ( has_post_thumbnail()) {
                        $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        echo ''.$full_image_url[0] . '';
                        }
                    ?>)">
                        <div class="full-height dis-flex align-items-center justify-content-start">
                            <header class="post-header col-7-8">
                                <h3 class="post-title"><?php the_title(); ?></h3>
                                <blockquote class="post-quote">
                                    <?php the_excerpt(); ?>
                                </blockquote>
                            </header>
                        </div>
                    </article>
                </a>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <?php
                    $post_object = get_field('важная_публикация_3');
                    if( $post_object ): 
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <article class="post" style="background-image: url(<?php
                        if ( has_post_thumbnail()) {
                        $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        echo ''.$full_image_url[0] . '';
                        }
                    ?>)">
                        <div class="full-height dis-flex align-items-center justify-content-start">
                            <header class="post-header col-7-8">
                                <h3 class="post-title"><?php the_title(); ?></h3>
                                <blockquote class="post-quote">
                                    <?php the_excerpt(); ?>
                                </blockquote>
                            </header>
                        </div>
                    </article>
                </a>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>
        <section class="content-wrap dis-flex flex-wrap-wrap justify-content-between"> 
            <div class="content-wrap-posts">
                <?php
                    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                    $args = array(
                        'post_type'         =>  'post',
                        'posts_per_page'    =>  5,
                        'paged'             =>  $paged,
                        'orderby'           =>  date
                    ); 
                    $my_query = new WP_Query( $args );
                    while( $my_query->have_posts() ) :
                           $my_query->the_post();
                ?>
                <?php get_template_part('templates/parts/content'); ?>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                
                <div class="related-posts">
                    <h2 class="section-title">По этой теме</h2>
                    <div class="row dis-flex flex-wrap-wrap">
                    <?php
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                        $args = array(
                            'post_type'         =>  'post',
                            'posts_per_page'    =>  3,
                            'cat'               =>  get_query_var('cat'),
                            'paged'             =>  $paged,
                            'orderby'           =>  date
                        ); 
                        $my_query = new WP_Query( $args );
                        while( $my_query->have_posts() ) :
                               $my_query->the_post();
                    ?>
                    <article class="post col-2-6"> 
                        <div class="post-image">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="display:block;" class="full-height">
                                <?php the_post_thumbnail(array(300,300)); ?>
                            </a>
                        </div>
                        <header class="post-header">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="display:block;" class="full-height"><h3 class="text-center"><?php the_title(); ?></h3></a>
                        </header>
                    </article>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>