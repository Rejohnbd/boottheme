<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>
<section class="page-wrap">
	<div class="container">
		<h2><?php the_title();?></h2>
		<div class="row">
			<div class="col-lg-6">
				This is where the contact form goes
			</div>
			<div class="col-lg-6">
				<?php get_template_part('includes/section','content'); ?>	
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>