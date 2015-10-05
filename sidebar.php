            <aside>
                <h5><span>The Latest</span></h5>
                <div class="aside-wrap clearfix">
                    <?php

                    global $post;
                    $args = array( 'numberposts' => 20 );
                    $posts = get_posts( $args );
                    foreach( $posts as $post ): setup_postdata($post); 

                    if(get_field("thumbnail")) {
                        $post_thumbnail_url = get_field("thumbnail");
                    }
                    else{
                        $post_thumbnail_id = get_post_thumbnail_id();
                        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                    }
                    if (get_field("short_title")){
                        $title = get_field("short_title");
                    }
                    else {
                        if (strlen(get_the_title()) > 80) {
                            $title = substr(the_title($before = '', $after = '', FALSE), 0, 80) . '...'; 
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
                        <article class="aside-cards">
                            <div class="aside-cards-img" style="background-image: url(<?php echo $post_thumbnail_url;?>)"></div>
                            <header class="aside-cards-header">
                                <h4><span class="fa <?php echo $category; ?>"></span><?php echo $category; ?></h4>
                                <h3><?php  echo $title; ?></h3>
                            </header>
                        </article>
                    </a>

                    <?php
                    endforeach;
                    ?>
                </div>
            </aside>