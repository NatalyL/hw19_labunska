<!-- /content -->
</div>

<footer class="site-footer">
    <div class="container clearfix">
        <div class="logo-wrap pull-left clearfix">
            <a class="clearfix" href="<?php echo home_url(); ?>"><img
                    src="<?php bloginfo('template_url'); ?>/images/foot-logo.png" alt=""></a>
            <?php wp_nav_menu(array(
                'theme_location' => 'social',
                'menu' => 'Social Menu',
                'container' => 'false',
                'menu_class' => 'social clearfix',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            )); ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum
                placerat.
                Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.</p>
        </div>
        <div class="footer-widgets clearfix">
            <div class="footer-widget-area">
                <?php dynamic_sidebar("Footer1"); ?>
            </div>
            <div class="footer-widget-area">
                <?php dynamic_sidebar("Footer2"); ?>
            </div>
            <div class="footer-widget-area">
                <?php dynamic_sidebar("Footer3"); ?>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="line"></div>
            <p class="pull-left">Copyright 2013 <span>Deliver</span>. All Rights Reserved.</p>

        </div>
    </div>
</footer>
<!-- /wrapper -->
</div>
<?php wp_footer(); ?>
</body>
</html>