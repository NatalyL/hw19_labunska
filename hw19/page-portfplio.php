<?php
/*
Template Name: portfolio
*/
get_header();
?>
    <div class="page-title">
        <div class="container">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="text top">

        <h2>Nothing but the best for our Portfolio</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,
            interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
        <div class="line"></div>
    </div>
<?php
$query = new WP_Query(array(
    'post_type' => 'portfolio',
    'order' => 'ASC',
    'taxonomy' => 'category',
));
?>
    <div class="category-menu">
        <div class="container">
            <?php
            dynamic_sidebar("Category zone");
            ?>
        </div>
    </div>
    <div class="main">
        <div class="container clearfix">
            <div class="content-wrap">

                <?php
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>

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
            wp_reset_postdata();
            ?>

        </div>
    </div>
    <div class="text bottom">
        <div class="container">
            <div class="line bottom"></div>
            <h2>Do you need a Website?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis
                quis,
                interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
            <a href="#" class="btn">Get a Free Quote</a>
        </div>
    </div>
<?php get_footer(); ?>