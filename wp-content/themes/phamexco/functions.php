<?php
    add_action('widgets_init' , 'theme_widget_init');
    function theme_widget_init(){
        register_sidebar();
    }

    add_action('wp_enqueue_scripts' , 'theme_css');
    function theme_css(){
        $cssUrl = get_template_directory_uri() . '/css';
        wp_register_style('theme_pt_bootstrap' , $cssUrl . '/bootstrap.min.css');
        wp_enqueue_style('theme_pt_bootstrap');
        wp_register_style('theme_pt_font' , $cssUrl . '/font-awesome.min.css');
        wp_enqueue_style('theme_pt_font');
        wp_register_style('theme_pt_carousel' , $cssUrl . '/owl-carousel.css');
        wp_enqueue_style('theme_pt_carousel');
        wp_register_style('theme_pt_style' , $cssUrl . '/style.css');
        wp_enqueue_style('theme_pt_style');
        wp_register_style('theme_pt_reponsive' , $cssUrl . '/reponsive.css');
    }

    add_action('wp_enqueue_scripts', function(){
        $jsUrl = get_template_directory_uri() . '/js';
        wp_register_script('theme_pt_owlcarousel', $jsUrl . '/slider.js', '', false, true);
        wp_enqueue_script('theme_pt_owlcarousel');
        wp_register_script('theme_pt_global', $jsUrl . '/global.js', '', false, true);
        wp_enqueue_script('theme_pt_global');
    });


    if( function_exists('acf_add_options_page') ) {

        $option_page = acf_add_options_page(array(
            'page_title'    => 'Tùy chỉnh giao diện',
            'menu_title'    => 'Tùy chỉnh giao diện',
            'menu_slug'     => 'settings-theme'
        ));
    }
    add_theme_support( 'post-thumbnails' );

    add_action( 'woocommerce_single_product_summary', function(){
        global $product;
        echo '<h2>' . $product->get_attribute('trademark') . '</h2>';
    }, 5 );

    add_action( 'woocommerce_single_product_summary', function(){
        global $product;
        echo '<h3>Thông Tin Sản Phẩm</h3>';

        $trademark = $product->get_attribute('trademark') ? '<li><strong>Thương hiệu: </strong>'. $product->get_attribute('trademark') .'</li>' : '';
        $weight = $product->get_attribute('weight') ? '<li><strong>Trọng lượng: </strong>'. $product->get_attribute('weight') .'</li>' : '';
        $packing = $product->get_attribute('packing') ? '<li><strong>Đóng gói: </strong>'. $product->get_attribute('packing') .'</li>' : '';
        $expiry = $product->get_attribute('expiry') ? '<li><strong>Hạn sử dụng: </strong>'. $product->get_attribute('expiry') .'</li>' : '';
        $madeIn = $product->get_attribute('madeIn') ? '<li><strong>Xuất xứ: </strong>'. $product->get_attribute('madeIn') .'</li>' : '';

        echo '<ul class="product-info">' . $trademark . $weight . $packing . $expiry . $madeIn . '</ul>';
    }, 35 );

    function kia_filter_billing_fields($fields){
        unset( $fields["billing_country"] );
        unset( $fields["billing_company"] );
        unset( $fields["billing_address_1"] );
       /* unset( $fields["billing_address_2"] );*/
        unset( $fields["billing_city"] );
        unset( $fields["billing_state"] );
        unset( $fields["billing_postcode"] );
        /*unset( $fields["billing_phone"] );*/
        return $fields;
    }
    add_filter( 'woocommerce_billing_fields', 'kia_filter_billing_fields' );
