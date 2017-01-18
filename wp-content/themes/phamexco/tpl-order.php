<?php
/*
      Template Name: Dat Hang
*/
	get_header();
	get_template_part('views/top' , 'header');
 ?>
<div class="container all_order">
      <div class="row">
		<!-- <?php echo do_shortcode('[woocommerce_cart]'); ?> -->
		<div class="col-md-12 breadcrumb_order">
                  <li class="breadcrumb_order1"><a href="#">
                        <img src="<?php echo get_template_directory_uri()."/images/order/background2.png" ?>" alt="">
                        <span>Gio hang</span>
                  </a></li>
                  <li class="breadcrumb_order2"><a href="javascript:void(0)">
                        <img src="<?php echo get_template_directory_uri()."/images/order/background1.png" ?>" alt="">
                        <span>Dat hang</span>
                  </a></li>
            </div>

<?php
if (wc_get_page_id( 'cart' ) == get_the_ID()):?>
<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
<div class="col-md-12">
	<div class="info_order">
		<p>Gia ban da bao gom thue VAT - Don vi tinh: VND</p>
	<table class="table-bordered table-responsive">
		<thead>
			<tr>
				<td>STT</td>
				<td>Ten san pham</td>
				<td>So luong</td>
				<td>Don gia (VND)</td>
				<td>Thanh Tien</td>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr>
						<td>
							<?php echo $i; ?>
						</td>
						<td>
							<?php
								echo "<span class='delete-product'>";
								echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
									'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
									esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
									__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								), $cart_item_key );
								echo "</span>";
								////////////////////////
								if ( ! $product_permalink ) {
									echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
								} else {
									echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s"><strong>%s</strong></a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
								}
							?>
						</td>
						<td>
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
							?>
						</td>
						<td>
							<?php
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="text" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input( array(
										'input_name'  => "cart[{$cart_item_key}][qty]",
										'input_value' => $cart_item['quantity'],
										'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
										'min_value'   => '0'
									), $_product, false );
								}
								echo apply_filters( 'woocommerce_cart_item_quantity',$product_quantity, $cart_item_key, $cart_item );
							?>
						</td>
						<td>
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
							?>
						</td>
					</tr>
					<?php
				}
				$i++;
			}
			?>
			<tr class="finish_table">
				<td colspan="4" class="total_money"><strong>Tong tien: <span><?php wc_cart_totals_order_total_html(); ?></span></strong> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
				<td></td>
			</tr>
		</tbody>
	</table>
		<p>* Chua bao gom phi giao hang</p>
	</div>
	<div class="text-right">
		<input type="submit" class="btn_edit_order" name="update_cart" value="<?php esc_attr_e( 'Chinh Sua Don Hang', 'woocommerce' ); ?>" />
		<?php do_action( 'woocommerce_cart_actions' ); ?>
		<?php wp_nonce_field( 'woocommerce-cart' ); ?>
	</div>
</div>
</form>
<?php endif; ?>
      </div>
</div>
<?php get_footer(); ?>
