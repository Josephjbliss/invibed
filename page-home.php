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
	                        <h2 class="featured-title"><?php if (strlen($post->post_title) > 50) {
                        echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; } else {
                        the_title();
                        } ?></h2>
	                    </article>
	                    </a>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); ?>
					<?php endif; ?>

                </div>
            </div>
        </section>

        <div class="tagline">Know More. Spend Less. Live Better.</div>

        <section class="clearfix wrap" id="cards-main">
		<?php
		$args = array( 'posts_per_page' => 12, 'category' => 'explore' );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>


        <?php 
        $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
        ?>


		            <a href="<?php the_permalink(); ?>">
		                <article class="cards">
		                    <div class="cards-img" style="background-image: url(<?php echo $post_thumbnail_url;?>)"></div>
		                    <header class="cards-header">
		                        <h4><span class="fa fa-diamond"></span><?php ?></h4>
		                        <h3><?php if (strlen($post->post_title) > 50) {
		                        echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; } else {
		                        the_title();
		                        } ?></h3>
		                    </header>
		                </article>
		            </a>


		<?php endforeach; 
		wp_reset_postdata();?>
        </section>
<?php get_footer(); ?>