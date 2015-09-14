        <?php get_header(); ?>

        <h1>invibed</h1>

        <?php get_search_form(); ?>

        <ul>
        <?php
        $args = array('posts_per_page' => 5);

        $myposts = get_posts($args);
        foreach ($myposts as $post) : setup_postdata($post); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endforeach; 

        wp_reset_postdata();?>
        </ul>

        <?php get_footer(); ?>