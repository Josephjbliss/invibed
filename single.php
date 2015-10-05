<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php 
	 	$thecategory = get_the_category();
		$category = $thecategory[0]->slug;
		if ($category == "explore"){
			$category = $thecategory[1]->slug;
        }
	?>
        <div class="wrap clearfix">
            <header>
                    <h1 class="article-title"><?php the_title();?></h1>
                    <ul class="article-tags">
                        <li><a href="<?php echo site_url(); ?>/category/<?php echo $category; ?>/"><h4><span class="fa <?php echo $category; ?>"></span><?php echo $category; ?></h4></a></li>
                        <li><h3 class="author">By <span class="author-name"><?php the_author();?></span></h3></li>
                        <li><h3 class="date"><?php the_date();?></h3></li>
                    </ul>
                </header>
            <article class="article">
                
                <figure id="article-hero">
                    <?php $post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
					<img src="<?php echo $post_thumbnail_url; ?>">
                    <?php if( get_field('photo_caption') ): ?>
                    <figcaption><?php the_field('photo_caption'); ?></figcaption>
                    <?php endif; ?>
                </figure>

                <section class="article-main clearfix">
 					<?php the_content();?>
				</section>

                <section class="article-social clearfix">
                	<h5><span>Share This Article</span></h5>
                    <a href="#" target="blank"><span class="fa fa-facebook social-links"></span></a>
                    <a href="http://twitter.com/home/?status=<?php the_title();?> <?php the_permalink(); ?> - via @invibed" target="blank"><span class="fa fa-twitter social-links"></span></a>
                    <a href="#" target="blank"><span class="fa fa-linkedin-square social-links"></span></a>
                    <a href="mailto:?subject=Check%20out%20this%20article%20on%20invibed.com&body=<?php the_permalink(); ?>" target="blank"><span class="fa fa-envelope-o social-links" target="blank"></span></a>
                </section>


                <?php if( get_field('author_headshot') ): ?>
	                <footer class="about-author clearfix">
	                    <div class="author-img">
	                        <img src="<?php the_field('author_headshot'); ?>" alt="Author Headshot" title="Author Headshot">
	                    </div>
	                    <?php the_field('author_bio');?>
	                </footer>
				<?php endif; ?>

                <section class="comments">
                	<?php comments_template( '', true ); ?>
            	</section>
            </article>

        <?php get_sidebar(); ?>

		</div>

		<?php endwhile; endif; ?>

        <div class="tagline">Know More. Spend Less. Live Better.</div>

        <section class="clearfix wrap" id="cards-main">

        <?php echo do_shortcode( '[ajax_load_more post_type="post" category="explore" posts_per_page="12" max_pages="0" button_label="more invibed comin\' at ya" images_loaded="true"] ' ); ?> 

        </section>

<?php get_footer(); ?>