<section id="home-header">
	<div class="container">
		<div class="row">
			<div class="banner-header">
				<div class="col-lg-3">
					<div class="logo">
						<?php if(get_field('logo' , 'option')) : ?>
							<a href="<?php echo get_site_url() ?>">
								<img src="<?php echo get_field('logo' , 'option') ?>" alt="Phamexco">
							</a>
						<?php endif ?>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="purchase">
						<div class="purchase-img">
							<img src="<?php echo get_template_directory_uri().'/images/huychuong.png'?>" alt="">
						</div>
						<div class="purchase-content">
							<span>mua hàng tại phamexco</span>
							<p>Uy tín chất lượng</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="purchase">
						<div class="purchase-img">
							<img src="<?php echo get_template_directory_uri().'/images/tietkiem.png'?>" alt="">
						</div>
						<div class="purchase-content">
							<span>tiết kiệm hơn</span>
							<p>Giá rẻ nhất thị trường</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="purchase">
						<div class="purchase-img">
							<img src="<?php echo get_template_directory_uri().'/images/xetai.png'?>" alt="">
						</div>
						<div class="purchase-content">
							<span>giao hàng toàn quốc</span>
							<p>Thanh toán khi nhận hàng</p>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-header">
				<div class="col-lg-10">
					<?php 
						wp_nav_menu([
							'menu' => 'Main menu'
						])
				 	?>
				</div>
				 <div class="col-lg-2">
				 	<div class="cart">
					 	<img src="<?php echo get_template_directory_uri() . '/images/giohang.png' ?>" alt="">
					 	<span>Giỏ hàng</span>
					 	<span>1</span>
					 </div>
				 </div>
			</div>
		</div>
	</div>
</section>