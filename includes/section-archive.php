<?php 
	if( have_posts() ):
		while( have_posts() ): the_post() ?>
			<div class="card mb-3">
				<div class="card-body d-flex justify-content-center align-item-center">
					<?php if(has_post_thumbnail()): ?>
						<img class="img-fluid img-thumbnail" src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" />
					<?php endif; ?>
					<div class="blog-content ml-4">
						<h2><?php the_title(); ?></h2>
						<?php //the_content(); ?>
						<?php the_excerpt();?>

						<a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
					</div>
				</div>
			</div>
<?php
		endwhile;
	else:
	endif;?>