<?php //get_footer(); ?>

<?php get_header(); ?>


<?php
if ( is_home() ) {
    ?>
    <div class="page-title">
        <div class="container">
            <h2>Our portfolio</h2>
        </div>
    </div>
    <?php
}
else {
}
if (have_posts()):?>
<div class="container clearfix main-page">
    <div class="content-wrap">

        <?php
        while (have_posts()) : the_post(); ?>

            <article class="post">
                <h2><?php the_title() ?></h2>
                <p><?php the_excerpt(); ?></p>
                <p><?php the_tags(); ?></p>
                <a href="<?php the_permalink(); ?>" class="button">Continue Reading </a>
                <?php the_post_thumbnail(); ?>
            </article>

        <?php endwhile;
        else :?>

            <?php
        endif; ?>
    </div>

</div>
<?php
get_footer();
?>
