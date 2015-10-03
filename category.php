<?php get_header(); ?>

	<?php         
	$yourcat = get_category(get_query_var('cat'));
        $category =  $yourcat->slug;
        ?>
        <h4 class="category-title"><span class="fa <?php echo $category;?>"></span><?php single_cat_title();?></h4>

        <?php if ( have_posts() ) : ?>
        <section class="clearfix wrap" id="cards-main">
        <?php 

        $shortcode = '[ajax_load_more post_type="post" category="'.$category.'" posts_per_page="12" max_pages="0" button_label="more invibed comin\' at ya" images_loaded="true"]';

        echo do_shortcode( $shortcode ); ?> 
	
        <?php else : ?>
	<section class="wrap"><?php _e( 'Nothing to see here ... yet.', 'invibed' ); ?></section>
	<?php endif; ?>
        </section>

<?php get_footer(); ?>