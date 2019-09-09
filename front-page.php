<?php get_header(); ?>

<div id="hero">
	<div class="container d-flex align-items-center justify-content-center h-100">
		<h1><?php bloginfo('description'); ?></h1>
	</div>
</div>

    <div class="content">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>

<?php get_footer(); ?>