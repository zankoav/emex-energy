<footer>
    <div class="container my-5">
        <div class="row my-3">
            <div class="col-md-auto">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'menu_class' => 'nav d-none d-md-flex footer_menu',
                    'menu_id' => '',
                    'depth' => 1
                )); ?>
            </div>
            <div class="col-auto mr-auto px-md-3">
                <!-- Widget place-->
                hello world
            </div>
            <div class="col-auto">
                <?php
                echo '&copy ' . date('Y') . ' ';
                bloginfo();
                ?>
            </div>
        </div>
        <?php if (is_home()) { ?>
            <!-- Theme settings for -->
        <?php } ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>