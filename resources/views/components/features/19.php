<section class="fdb-block fdb-features-19">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>
			</div>
		</div>

		<div class="row text-left mt-5">
			<div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto mr-md-auto ml-md-0">
				<?= get_block_content_image('image_1', '255x255', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_1', 'h3'); ?>
				<?= get_block_content('content_1'); ?>
			</div>

			<div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto pt-5 pt-md-0">
				<?= get_block_content_image('image_2', '255x255', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_2', 'h3'); ?>
				<?= get_block_content('content_2'); ?>
			</div>

			<div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto ml-md-auto mr-md-0 pt-5 pt-md-0">
				<?= get_block_content_image('image_3', '255x255', 'a', 'img-fluid'); ?>
				<?= get_block_content('header_3', 'h3'); ?>
				<?= get_block_content('content_3'); ?>
			</div>
		</div>
	</div>
</section>
