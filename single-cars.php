<?php get_header(); ?>
<section class="page-wrap">
	<div class="container">
		<h2><?php the_title();?></h2>
		<?php if(has_post_thumbnail()): ?>
			<img class="img-fluid img-thumbnail" src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" />
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-6">
				<?php get_template_part('includes/section','cars'); ?>
				<?php wp_link_pages(); ?>
			</div>
			<div class="col-lg-6"></div>
		</div>
		
	</div>
</section>
<?php get_footer(); ?>