<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header() ?>
<body>

	<div class="main">

	<?php 
		get_template_part('views/top' , 'header');
		get_template_part('views/home' , 'header');
		get_template_part('views/slider' , 'header');
	 ?>
	<section id="product-detail">
        <div class="container">
            <div class="row">
                <?php get_sidebar() ?>
                <div class="col-md-6">
                    <?php do_action( 'woocommerce_before_main_content' ); ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php wc_get_template_part( 'content', 'single-product' ); ?>

                        <?php endwhile;?>
                    <?php do_action( 'woocommerce_after_main_content' ); ?>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-title">
                        <img src="<?php echo get_template_directory_uri() . '/images/thamkhao.png' ?>" alt="">
                        <span>thông tin tham khảo</span>
                    </div>
                    <ul class="product-post">
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/images/Group4.png' ?>" alt="">
                            <p>Các loại rau xanh cực tốt cho sức khỏe của bạn</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/images/khoai.png' ?>" alt="">
                            <p>Khoai lang là một loại củ giàu chất ding dưỡng</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/images/carot.png' ?>" alt="">
                            <p>Cà rốt là thực phẩm cực tốt cho đôi mắt của bạn</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/images/bigo.png' ?>" alt="">
                            <p>quả bí ngô là nguồn cung cấp lớn vitamin C, chất sơ, magie , kali</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/images/honhop.png' ?>" alt="">
                            <p>quả bí ngô là nguồn cung cấp lớn vitamin C, chất sơ, magie , kali</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section id="slider-product">
            <div class="container">
                <div class="row">
                    <?php get_template_part('views/slider' , 'product1'); ?>
                </div>
            </div>
        </section>
    </section>
<?php get_footer(); ?>
