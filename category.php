<?php get_header(); ?>
        <h4 class="category-title"><span class="fa fa-newspaper-o"></span><?php single_cat_title(); ?></h4>

        <section class="clearfix wrap" id="cards-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php 
        $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
        ?>

            <a href="<?php the_permalink(); ?>">
                <article class="cards">
                    <div class="cards-img" style="background-image: url(<?php echo $post_thumbnail_url;?>)"></div>
                    <header class="cards-header">
                        <h4><span class="fa fa-diamond"></span><?php single_cat_title(); ?></h4>
                        <h3><?php if (strlen($post->post_title) > 50) {
                        echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; } else {
                        the_title();
                        } ?></h3>
                    </header>
                </article>
            </a>
        <?php endwhile; endif; ?>
        </section>

<?php get_footer(); ?>