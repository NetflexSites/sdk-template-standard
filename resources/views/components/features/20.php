<section class="fdb-block fdb-features-20">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-left">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>

				<?= get_block_content_image('image', '1110x370', 'l', 'img-fluid mt-5'); ?>
			</div>
		</div>

		<div class="row text-left pt-5">
			<div class="col-12 col-md-6">
				<?= get_block_content('header_1', 'h3'); ?>

				<?= get_block_content('content_1'); ?>

				<?= get_block_content('link_1', 'p'); ?>
			</div>
			<div class="col-12 col-md-6 pt-4 pt-md-0">
				<?= get_block_content('header_2', 'h3'); ?>

				<?= get_block_content('content_2'); ?>

				<?= get_block_content('link_2', 'p'); ?>
			</div>
		</div>
	</div>
</section>
