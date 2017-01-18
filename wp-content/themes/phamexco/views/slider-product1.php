<div class="slider-product1">
    <div class="col-lg-12">
        <div class="product-title">
            <span>sản phẩm nổi bật</span>
        </div>
    </div>
    <div id="list-of-products" class="owl-carousel owl-theme">
        <?php
            $query = new WP_Query([
               'post_type' => 'product',
                'numberposts' => 8,
                'meta_query'  =>  [
                    [
                        'key' => '_featured',
                        'value' => 'yes'
                    ]
                ]
            ]);
            while($query->have_posts()) : $query->the_post();
                $product = wc_get_product($post->ID);
        ?>
                <div class="item">
                    <div class="product-border">
                        <span>Giảm: <?php echo number_format($product->get_regular_price() - $product->get_sale_price(), 0, ',', '.') . ' đ'?></span>

                        <div class="porduct-img">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                            </a>
                            <div class="product-hover">
                                <div class="product-bg"></div>
                                <div class="product-look">
                                    <i class="icon-search" aria-hidden="true"></i>
                                    <span>
                                        <a href="<?php the_permalink() ?>">Xem chi tiết</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p><?php the_title() ?></p>
                        <p>
                            <strong><?php echo number_format($product->get_sale_price(), 0, ',', '.') . 'đ' ?></strong>
                        </p>
                        <p class="old-price"><?php echo number_format($product->get_regular_price(), 0, ',', '.') . 'đ' ?></p>
                    </div>
                </div>

        <?php endwhile; ?>
    </div>
</div>