	<footer id="footer-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo">
						<?php if(get_field('logo' , 'option')) : ?>
							<img src="<?php echo get_field('logo' , 'option') ?>" alt="">
						<?php endif ?>
					</div>
					<div class="Company_name">
						<?php if(get_field('Company_name' , 'option')) : ?>
							<span><?php echo get_field('Company_name' , 'option') ?></span>
						<?php endif ?>
						</br>
						<img src="<?php echo get_template_directory_uri() . '/images/background5.png' ?>" alt="">
						<p>Giấy Đăng ký kinh doanh số 0313510500</br> do sở KH & DT Tp. Hồ Chí Minh
						</br> cấp ngày 07/03/2015</p>
					</div>
				</div>
				<div class="col-lg-3" style="margin-top: 60px;">
					<div class="Company_name">
							<span>thông tin cần biết</span>
						</br>
						<img src="<?php echo get_template_directory_uri() . '/images/background5.png' ?>" alt="">
						<ul>
							<li>Điều khoản sử dụng </li>
							<li>Chính sách bảo mật</li>
							<li>Hướng dẫn mua hàng</li>
							<li>Quy định vận chuyển</li>
							<li>phương thức thanh toán</li>
							<li>Chính sách đổi chả hàng</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4" style="margin-top: 60px;">
					<div class="Company_name">
							<span>thông tin cần biết</span>
						</br>
						<img src="<?php echo get_template_directory_uri() . '/images/background5.png' ?>" alt="">
						<ul>
							<?php if(get_field('addresses' , 'option')) : ?>
								<li><?php echo get_field('addresses' , 'option') ?></li>
							<?php endif ?>
							<li>Tel: 
								<?php if(get_field('tel' , 'option')) :  ?>
									<span><?php echo get_field('tel' , 'option') ?></span>
								<?php endif ?>

								Fax: <?php if(get_field('pax' , 'option')) :  ?>
									<span><?php echo get_field('pax' , 'option') ?></span>
								<?php endif ?>

								<?php if(get_field('email' , 'option')) : ?>
									<li>Email: <?php echo get_field('email' , 'option') ?></li>
								<?php endif ?>

								<?php if(get_field('website' , 'option')) : ?>
									<li>Website: <?php echo get_field('website' , 'option') ?></li>
								<?php endif ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</footer>
	</div>
</body>
</html>