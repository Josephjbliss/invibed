        <?php get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<?php 
		the_content();
		comments_template();
		?>
		<?php endwhile; // end of the loop. ?>

		<?php get_footer(); ?>	