<section class="fdb-block fdb-features-23">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-10 col-lg-8 text-left">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>

				<?= get_block_content('link', 'p', 'text-h3'); ?>
			</div>
		</div>

		<div class="row text-center no-gutters pt-5">
			<div class="col-12 col-md-10 col-lg-8">
				<div class="row">
					<div class="col-8 col-sm-5 col-md-2 m-auto">
						<?= get_block_content_image('image_1', '89x89', 'a', 'img-fluid'); ?>
						<?= get_block_content('header_1', 'h4'); ?>
					</div>
					<div class="col-8 col-sm-5 col-md-2 m-auto pt-5 pt-sm-0">
						<?= get_block_content_image('image_2', '89x89', 'a', 'img-fluid'); ?>
						<?= get_block_content('header_2', 'h4'); ?>
					</div>
					<div class="col-8 col-sm-5 col-md-2 m-auto pt-5 pt-md-0">
						<?= get_block_content_image('image_3', '89x89', 'a', 'img-fluid'); ?>
						<?= get_block_content('header_3', 'h4'); ?>
					</div>
					<div class="col-8 col-sm-5 col-md-2 m-auto pt-5 pt-md-0">
						<?= get_block_content_image('image_4', '89x89', 'a', 'img-fluid'); ?>
						<?= get_block_content('header_4', 'h4'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
