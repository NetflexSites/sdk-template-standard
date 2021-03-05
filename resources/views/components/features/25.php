<section class="fdb-block fdb-features-25">
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('link', 'p', 'text-h3'); ?>
			</div>
		</div>

		<div class="row text-center justify-content-center mt-5">
			<div class="col-10 col-sm-3">
				<?= get_block_content_image('image_1', '255x255', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_1', 'h3'); ?>
			</div>
			<div class="col-10 col-sm-3 pt-5 pt-sm-0">
				<?= get_block_content_image('image_2', '255x255', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_2', 'h3'); ?>
			</div>

			<div class="col-10 col-sm-3 pt-5 pt-sm-0">
				<?= get_block_content_image('image_3', '255x255', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_3', 'h3'); ?>
			</div>

			<div class="col-10 col-sm-3 pt-5 pt-sm-0">
				<?= get_block_content_image('image_4', '255x255', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_4', 'h3'); ?>
			</div>
		</div>
	</div>
</section>
