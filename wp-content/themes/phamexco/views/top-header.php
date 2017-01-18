<section id="top-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="header-left">
					<?php if(get_field('work_time' , 'option')) : ?>
						<span><?php echo get_field('work_time' , 'option') ?></span>
					<?php endif ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="header-right">
					<?php if(get_field('icon' , 'option')) : ?>
						<img src="<?php echo get_field('icon' , 'option') ?>" alt="">
					<?php endif ?>

					<?php if(get_field('phone' , 'option')) : ?>
						<span class="phone"><?php the_field('phone' , 'option') ?></span>
					<?php endif ?>

				</div>
			</div>
		</div>
	</div>
</section>