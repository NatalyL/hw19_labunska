<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>
        <div class="page-title">
            <!--            <div class="container">-->
            <!--                <h2>--><?php //the_title(); ?><!--</h2>-->
            <!--            </div>-->
        </div>
        <div class="container main-page">
            <article class="post-single">

                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </article>
        </div>
    <?php endwhile;

else :?>

    <?php
endif;

get_footer();
?>