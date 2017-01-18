<?php get_header(); ?>
<body>
	<div class="main">
	<?php 
		get_template_part('views/top' , 'header');
		get_template_part('views/home' , 'header');
		get_template_part('views/slider' , 'header');
	 ?>
	<section id="slider-product">
		<div class="container">
			<div class="row">
				<?php get_template_part('views/slider' , 'product1'); ?>
				<?php get_template_part('views/news') ?>
			</div>
		</div>
	</section>
</div>
<?php get_footer() ?>
