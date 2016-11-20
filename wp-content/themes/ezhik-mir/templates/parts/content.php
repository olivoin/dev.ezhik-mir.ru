<article class="post"> 
    <div class="post-tags">
        <?php the_tags('','',''); ?>
    </div>
    <div class="post-image">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="display:block;" class="full-height">
            <?php the_post_thumbnail(); ?>
        </a>
        <div class="post-cat">
            <?php the_category(', ') ?>
        </div>
    </div>
    <header class="post-header">
        <ul class="post-meta dis-flex align-items-center">
            <li class="post-meta-autor">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="dis-flex align-items-center"><img src="https://pp.vk.me/c630217/v630217774/31930/UrIRx9JzTBA.jpg" class="margin-r-4"> <?php the_author(); ?></a>
            </li>
            <li class="post-meta-date">
                <?php the_date(); ?>
            </li>
        </ul>
        <a href="#">
            <h3 class="post-title"><?php the_title(); ?></h3>
            <div class="text-block">
                <blockquote class="post-quote col-6-8">
                    <?php the_excerpt(); ?>
                </blockquote>
            </div>
        </a>
        <ul class="post-meta-stats dis-flex align-items-center">
            <li class="post-meta-stats-view">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/view.svg" class="svg"> <?php the_views(); ?>
            </li>
            <li class="post-meta-stats-comment">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/chat.svg" class="svg"> 54
            </li>
        </ul>
    </header>
</article>