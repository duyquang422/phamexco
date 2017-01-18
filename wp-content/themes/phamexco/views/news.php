<section id="news">
    <div class="product-content">
        <div class="col-lg-6">
            <div class="introduce-product">
                <span>giới thiệu</span>
            </div>
            <div id="list-news" class="owl-carousel owl-theme">
                <?php
                    $posts = get_posts([
                        'numberposts' => 4,
                        'category' => 19
                    ]);

                    if($posts) :
                        foreach($posts as $post):
                            setup_postdata( $post ); ?>
                            <div class="item">
                                <?php the_post_thumbnail() ?>

                                <div class="introduce-product-content">
                                    <span><?php the_title() ?></span>
                                </div>

                            </div>
                <?php   endforeach;
                    endif;
                ?>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="refer-product">
                <div class="refer-product-title">
                    <span>tham khảo</span>
                </div>
                <?php
                    $posts = get_posts([
                        'numberposts' => 1,
                        'category' => 20
                    ]);

                    if($posts) :
                        foreach($posts as $key => $post):
                            setup_postdata( $post );
                            if(!$key) : ?>
                                <div class="refer-product-img">
                                    <?php the_post_thumbnail() ?>
                                </div>
                                <div class="refer-product-content">
                                    <span><?php the_title() ?></span>
                                    <p><?php echo strip_tags(get_the_excerpt()) ?></p>
                                </div>
                    <?php
                            endif;
                        endforeach;
                    endif; ?>

                <div class="refer-product-content2">
                    <ul>
                <?php
                    $posts = get_posts([
                        'numberposts' => 10,
                        'category' => 20
                    ]);

                    if($posts) :
                        foreach($posts as $key => $post):
                            setup_postdata( $post );
                            if($key) : ?>
                                <li class="refer-product-icon">
                                    <span class="icon-bg"></span>
                                    <span><?php the_title() ?> </span>
                                    <span>(<?php echo date('d-m-Y', strtotime($post->post_date)) ?>)</span>
                                </li>
                    <?php
                            endif;
                        endforeach;
                    endif
                    ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</section>