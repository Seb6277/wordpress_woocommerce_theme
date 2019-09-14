<footer>
    <div class="container">
        <div class="row footer-row">
            <div class="col-md-4">
                <?php the_custom_logo();?>
            </div>
            <div class="col-md-4 copyright">
                <p>©<?php bloginfo('name');?> - <?php echo date('Y')?></p>
            </div>
            <div class="col-md-4 div-footer-menu">
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