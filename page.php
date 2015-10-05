<?php get_header(); ?>
<section class="wrap">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="article-main clearfix">
			<?php the_content();?>
	</section>
<?php endwhile; endif; ?>

</section>

        <div class="tagline">Know More. Spend Less. Live Better.</div>

        <section class="clearfix wrap" id="cards-main">

        <?php echo do_shortcode( '[ajax_load_more post_type="post" category="explore" posts_per_page="12" max_pages="0" button_label="more invibed comin\' at ya" images_loaded="true"] ' ); ?> 

        </section>

<?php get_footer(); ?>