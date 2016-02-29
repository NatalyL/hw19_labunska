<?php
get_header();
?>
    <div class="page-title">
        <div class="container">
            <h2><?php single_cat_title(); ?></h2>
        </div>
    </div>

    <div class="main">
        <div class="container clearfix">
            <div class="content-wrap">
                <?php
                if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>

                    <article class="portfolio">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                        <a href=""><?php the_post_thumbnail(); ?></a>
                    </article>

                <?php } ?>
            </div>

            <?php } else { ?>
                <p>Ничего не найдено</p>
                <?php
            }
            wp_reset_postdata(); ?>

        </div>
    </div>
<?php get_footer(); ?>