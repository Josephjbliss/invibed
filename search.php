<?php get_header(); ?>
        <h4 class="category-title"><?php printf( __( 'Search Results for: %s', 'invibed' ), get_search_query() ); ?></h4>

		<?php if ( have_posts() ) : ?>
        <section class="clearfix wrap" id="cards-main">
        <?php 
        $searchterm =  get_search_query();
        $shortcode = '[ajax_load_more post_type="post" category="explore" posts_per_page="12" max_pages="0" button_label="more invibed comin\' at ya" images_loaded="true" search="'.$searchterm.'"]';
        echo do_shortcode( $shortcode ); ?> 
		<?php else : ?>
		<section class="wrap"><?php _e( 'Sorry, nothing matched your search. Please try again.', 'invibed' ); ?></section>
		<?php endif; ?>
        </section>
<?php get_footer(); ?>