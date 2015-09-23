<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

		<section id="featured">
            <div id="hero">
				<?php 
				$posts = get_field('showcase');

				if($posts): ?>
				    <?php foreach( $posts as $post): ?>
					<?php the_post_thumbnail(); ?>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); ?>
				<?php endif; ?>
            </div>

            <div class="wrap clearfix" id="latest-wrap">
                <div class="clearfix" id="latest">
                    <h5 id="the-latest"><span>The Latest</span></h5>

					<?php 
					$posts = get_field('showcase');

					if($posts): ?>
					    <?php foreach( $posts as $post): ?>
						<a href="<?php the_permalink(); ?>">
	                    <article class="featured-article clearfix">
	                        <h4><span class="fa fa-usd"></span>Category Name</h4>
	                        <h2 class="featured-title"><?php the_title(); ?></h2>
	                    </article>
	                    </a>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); ?>
					<?php endif; ?>

                </div>
            </div>
        </section>

<section id="content">

</section>
<?php get_footer(); ?>