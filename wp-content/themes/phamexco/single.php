<?php 
	get_header();
	get_template_part('views/top' , 'header');
	get_template_part('views/home' , 'header');
	get_template_part('views/slider' , 'header');
 ?>
<section id="sidebar-content">
	<div class="container">
		<div class="row">
			<?php get_sidebar() ?>
			<?php get_template_part('single' , 'content')?>
		</div>
	</div>
</section>
<!-- <section id="position-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="banner-header" style="padding:0;">
					<div class="logo">
						<?php if(get_field('logo' , 'option')) : ?>
							<a href=""><img src="<?php echo get_field('logo' , 'option') ?>" alt=""></a>
						<?php endif ?>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="header-right">
					<img src="<?php echo get_template_directory_uri() . '/images/icon2.png' ?>" alt="">
				</div>
			</div>
			<div class="col-lg-4" style="margin-top: 28px;">
				<div class="category">
					<img src="<?php echo get_template_directory_uri() . '/images/icon3.png' ?>" alt="">
					<span>Tất cả danh mục</span>
				</div>	
			 	<div class="cart" style="float: right">
				 	<img src="<?php echo get_template_directory_uri() . '/images/giohang.png' ?>" alt="">
				 	<span>Giỏ hàng</span>
				 	<span>1</span>
				 </div>
			</div>
		</div>
	</div>
</section> -->
<?php get_footer() ?>