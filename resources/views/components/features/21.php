<section class="fdb-block fdb-features-21">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-left">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>
			</div>
		</div>

		<div class="row text-left pt-5">
			<div class="col-12 col-sm-6 col-md-5">
				<?= get_block_content_image('image_1', '445x445', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_1', 'h3'); ?>
				<?= get_block_content('content_1'); ?>
			</div>

			<div class="col-12 col-sm-6 col-md-5 ml-sm-auto pt-5 pt-sm-0">
				<?= get_block_content_image('image_2', '445x445', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_2', 'h3'); ?>
				<?= get_block_content('content_2'); ?>
			</div>
		</div>
	</div>
</section>
