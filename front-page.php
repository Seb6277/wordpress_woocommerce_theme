<?php get_header(); ?>

<?php if (get_header_image()) :?>
<div id="hero" style="background: url(<?php header_image();?>); background-size: cover;">
	<div class="container d-flex align-items-center justify-content-center h-100">
		<h1><?php bloginfo('description'); ?></h1>
	</div>
</div>
<?php endif;?>

    <div class="content">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>

<?php get_footer(); ?>