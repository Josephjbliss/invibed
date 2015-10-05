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

					<?php $post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );?>

					<div class="slide" style="background-image: url(<?php echo $post_thumbnail_url;?>)"></div>

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

					    <?php 
	                    if (get_field("short_title")){
	                        $title = get_field("short_title");
	                    }
	                    else {
	                        if (strlen(get_the_title()) > 45) {
	                            $title = substr(the_title($before = '', $after = '', FALSE), 0, 45) . '...'; 
	                        } 
	                        else {
	                            $title = get_the_title();
	                        }
	                    }

				 		$thecategory = get_the_category();
						$category = $thecategory[0]->slug;
						if ($category == "explore"){
							$category = $thecategory[1]->slug;
				        }
					    ?>

						<a href="<?php the_permalink(); ?>">
	                    <article class="featured-article clearfix">
	                        <h4><span class="fa <?php echo $category; ?>"></span><?php echo $category; ?></h4>
	                        <h2 class="featured-title"><?php echo $title; ?></h2>
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

        <?php echo do_shortcode( '[ajax_load_more post_type="post" category="explore" posts_per_page="12" max_pages="0" button_label="more invibed comin\' at ya" images_loaded="true"] ' ); ?> 

        </section>

<?php get_footer(); ?>