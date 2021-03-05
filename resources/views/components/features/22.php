<section class="fdb-block fdb-features-22">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-12 text-center">
				<?= get_block_content('header', 'h1'); ?>
			</div>
		</div>

		<div class="row text-left align-items-center pt-5 pb-md-5">
			<div class="col-4 col-md-5">
				<?= get_block_content_image('image_1', '445x445', 'a', 'img-fluid'); ?>
			</div>

			<div class="col-12 col-md-5 m-md-auto">
				<?= get_block_content('header_1', 'h2'); ?>
				<?= get_block_content('content_1', 'p', 'text-h3'); ?>
				<?= get_block_content('link_1', 'p'); ?>
			</div>
		</div>

		<div class="row text-left align-items-center pt-5 pb-md-5">
			<div class="col-4 col-md-5 m-md-auto order-md-5">
				<?= get_block_content_image('image_2', '445x445', 'a', 'img-fluid'); ?>
			</div>

			<div class="col-12 col-md-5">
				<?= get_block_content('header_2', 'h2'); ?>
				<?= get_block_content('content_2', 'p', 'text-h3'); ?>
				<?= get_block_content('link_2', 'p'); ?>
			</div>
		</div>

		<div class="row text-left align-items-center pt-5">
			<div class="col-4 col-md-5">
				<?= get_block_content_image('image_3', '445x445', 'a', 'img-fluid'); ?>
			</div>

			<div class="col-12 col-md-5 m-md-auto">
				<?= get_block_content('header_3', 'h2'); ?>
				<?= get_block_content('content_3', 'p', 'text-h3'); ?>
				<?= get_block_content('link_3', 'p'); ?>
			</div>
		</div>
	</div>
</section>
