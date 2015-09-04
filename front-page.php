<?php get_header(); ?>
<div id="home-page">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="contain">
		<h2><?php the_field('title_one'); ?></h2>
		<?php the_field('description_one'); ?>
		<a href="<?php the_field('link_one'); ?>" class="button"><?php the_field('link_text_one'); ?></a>
	</div>

	<div class="bricks group">
		<?php

			// check if the repeater field has rows of data
			if( have_rows('blocks') ):

			 	// loop through the rows of data
			    while ( have_rows('blocks') ) : the_row(); ?>

					<div class="grid-25 no-margin block" style="background-image: url('<?php the_sub_field('image'); ?>');">
						<div class="blur">
							<h4><?php the_sub_field('title_two'); ?></h4>
							<hr />
							<?php the_sub_field('content'); ?>
							<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
						</div>
					</div>

			   <?php endwhile;

			else :
			endif;

		?>
	</div>

	<div class="contain">
		<h2><?php the_field('title_two'); ?></h2>
		<?php the_field('description_two'); ?>
		<a href="<?php the_field('link_two'); ?>" class="button"><?php the_field('link_text_two'); ?></a>
	</div>

	<div class="donate">
		<div>
			<h3><?php the_field('title_three'); ?></h3>
			<?php the_field('description_three'); ?>
			<a href="<?php the_field('link_three'); ?>" class="button"><?php the_field('link_text_three'); ?></a>
		</div>
	</div>	


<?php endwhile; wp_reset_query(); ?>
</div>
<?php get_footer(); ?>