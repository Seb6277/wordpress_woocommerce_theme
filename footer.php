<footer>
    <div class="container">
        <div class="row footer-row">
            <div class="col-md-4 col-sm-12 footer-logo">
                <?php the_custom_logo();?>
            </div>
            <div class="col-md-4 col-sm-12 copyright">
                <p>©<?php bloginfo('name');?> - <?php echo date('Y')?></p>
            </div>
            <div class="col-md-4 col-sm-12 div-footer-menu">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-menu'
                    )
                )?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>