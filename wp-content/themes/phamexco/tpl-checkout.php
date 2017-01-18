<?php
/*
      Template Name: Thanh Toan
*/
	get_header();
	get_template_part('views/top' , 'header');
 ?>
<div class="container">
      <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                  <!-- <?php echo do_shortcode('[woocommerce_checkout]'); ?> -->
            </div>

            <div class="col-sm-12 col-md-6 col-md-offset-3">
            	<div class="contact_order">
            		<h3>THONG TIN NGUOI DAT HANG</h3>
            		<div class="filed_order">
            			<img src="<?php echo get_template_directory_uri()."/images/order/people.png" ?>" class="icon_people">
            			<span class="icon_people">*</span>
            			<input type="text" placeholder="Ho va ten" class="form-control placeholder">
            		</div>
            		<div class="filed_order">
            			<img src="<?php echo get_template_directory_uri()."/images/order/phone.png" ?>" class="icon_phone">
            			<span class="icon_phone">*</span>
            			<input type="text" placeholder="So dien thoai" class="form-control placeholder">
            		</div>
            		<div class="filed_order">
            			<img src="<?php echo get_template_directory_uri()."/images/order/place.png" ?>" class="icon_place">
            			<input type="text" placeholder="Dia chi" class="form-control">
            		</div>
            		<div class="filed_order">
            			<img src="<?php echo get_template_directory_uri()."/images/order/write.png" ?>" class="icon_address">
            			<textarea placeholder="Thong tin khac" class="form-control"></textarea>
            		</div>
            		<div class="filed_last">
            			<span>( <i>*</i> ) thong tin bat buoc</span>
            			<input type="submit" class="btn_order" value="GUI DON HANG">
            		</div>
            	</div>
            </div>



      </div>
</div>
<script type="text/javascript">
      jQuery(function($){
            $(".woocommerce-info").hide();
      });
</script>
<?php get_footer(); ?>
