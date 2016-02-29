<?php
get_header();
if (have_posts()):
    while (have_posts()) : the_post(); ?>
        <div class="page-title">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container clearfix">
            <div class="content-wrap">
                <section class="post page">
                    <?php the_content(); ?>
                </section>
            </div>

        </div>

    <?php endwhile;
else :
endif;
get_footer();
?>