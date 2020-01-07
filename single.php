<?php get_header(); ?>
<section class="page-wrap">
	<div class="container">
		<?php if(has_post_thumbnail()): ?>
			<img class="img-fluid img-thumbnail" src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" />
		<?php endif; ?>
		<h2><?php the_title();?></h2>
		<?php get_template_part('includes/section','blogcontent'); ?>
	</div>
</section>
<?php get_footer(); ?>