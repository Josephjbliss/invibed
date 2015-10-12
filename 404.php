<?php get_header(); ?>
<section class="wrap">
	<h1 class="entry-title"><?php _e( 'Uh oh, spaghetti-o', 'invibed' ); ?></h1>
    <section class="article-main clearfix">
		<p><?php _e( 'Nothing found for the requested page.', 'invibed' ); ?></p>
		<?php get_search_form(); ?>
	</section>
</section>

        <div class="tagline">Know More. Spend Less. Live Better.</div>

        <section class="clearfix wrap" id="cards-main">

        <?php echo do_shortcode( '[ajax_load_more post_type="post" category="explore" posts_per_page="12" max_pages="0" button_label="more invibed comin\' at ya" images_loaded="true"] ' ); ?> 

        </section>

<?php get_footer(); ?>