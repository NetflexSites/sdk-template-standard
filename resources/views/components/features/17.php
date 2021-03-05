<section class="fdb-block fdb-features-17">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-left">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>
				<?= get_block_content_image('image', '1110x370', 'l', 'img-fluid mt-5'); ?>
			</div>
		</div>

		<div class="row text-left mt-5">
			<div class="col-12 col-md-4">
				<div class="row">
					<div class="col-3">
						<?= get_block_content_image('icon_1', '65x65', 'a', 'img-fluid'); ?>
					</div>
					<div class="col-9">
						<?= get_block_content('header_1', 'h3'); ?>
						<?= get_block_content('content_1'); ?>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 pt-4 pt-md-0">
				<div class="row">
					<div class="col-3">
						<?= get_block_content_image('icon_2', '65x65', 'a', 'img-fluid'); ?>
					</div>
					<div class="col-9">
						<?= get_block_content('header_2', 'h3'); ?>
						<?= get_block_content('content_2'); ?>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 pt-4 pt-md-0">
				<div class="row">
					<div class="col-3">
						<?= get_block_content_image('icon_3', '65x65', 'a', 'img-fluid'); ?>
					</div>
					<div class="col-9">
						<?= get_block_content('header_3', 'h3'); ?>
						<?= get_block_content('content_3'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
