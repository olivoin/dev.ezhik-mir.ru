<?php get_header(); ?>
<section id="content">
    <div class="wrap hor-wrap">
        <section class="content-wrap dis-flex flex-wrap-wrap justify-content-between"> 
            <div class="content-wrap-posts">
                <div class="content-wrap-posts-single">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="single-post-meta">
                        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('
                        <p id="breadcrumbs">','</p> '); } ?>
                        <div class="single-post-meta-special dis-flex align-items-center">
                            <div class="col-4-8 dis-flex align-items-center">
                                <div class="single-post-meta-special-cat margin-r-6">
                                    <?php the_category(' ') ?>
                                </div>
                                <ul class="post-meta dis-flex align-items-center margin-r-6">
                                    <li class="post-meta-autor dis-flex align-items-center">
                                        <img src="https://pp.vk.me/c630217/v630217774/31930/UrIRx9JzTBA.jpg" class="margin-r-4"><span>Анастасия</span>
                                    </li>
                                    <li class="post-meta-date">
                                        <?php the_date(); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4-8 dis-flex justify-content-end">
                                <ul class="post-meta-stats dis-flex align-items-center">
                                    <li class="post-meta-stats-view">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/view.svg" class="svg"> <?php the_views(); ?>
                                    </li>
                                    <li class="post-meta-stats-comment">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/chat.svg" class="svg"> 54
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="single-post-meta-quote col-5-8">
                            <blockquote><?php the_excerpt(); ?></blockquote>
                        </div>
                    </div>
                    <header class="single-post-image">
                        <?php the_post_thumbnail(); ?>
                    </header>
                    <div class="single-post-content text-block">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile ?>
                    <?php endif; ?>
                </div>
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
                <div class="content-wrap-posts-comments">
                    
                </div>
            </div>
            <?php get_sidebar(); ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>