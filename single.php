<?php get_header(); ?>

<div class="content">
	<div class="container">


		<div class="row">
			<div class="col-lg-3">
				<div class="sticky-top" style="top: 50px;">
					<?php dynamic_sidebar('blog-sidebar'); ?>
				</div>
			</div>

			<div class="col-lg-9">

				<?php if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-5">
				<?php endif; ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="post-meta">
                        le <?php the_time('j F Y à H:i'); ?> par
                        <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
							<?php the_author();?>
                        </a>
                    </div>

                    <h1><?php the_title(); ?></h1>

					<?php the_content(); ?>
				<?php endwhile; endif; ?>

                <?php the_tags(); ?>

			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>