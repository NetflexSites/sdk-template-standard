<section class="fdb-block fdb-features-26">
	<div class="container">
		<div class="row align-items-center pb-xl-5">
			<div class="col-12 col-md-7 col-xl-5">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>
			</div>
			<div class="col-12 col-sm-6 col-md-4 m-sm-auto mr-md-0 ml-md-auto pt-4 pt-md-0">
				<?= get_block_content_image('image', '350x350', 'a', 'img-fluid'); ?>
			</div>
		</div>

		<div class="row pt-5">
			<div class="col-12 col-sm-6 col-md-3">
				<?= get_block_content('header_1', 'h3'); ?>
				<?= get_block_content('content_1'); ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 pt-3 pt-sm-0">
				<?= get_block_content('header_2', 'h3'); ?>
				<?= get_block_content('content_2'); ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 pt-3 pt-md-0">
				<?= get_block_content('header_3', 'h3'); ?>
				<?= get_block_content('content_3'); ?>
			</div>

			<div class="col-12 col-sm-6 col-md-3 pt-3 pt-md-0">
				<?= get_block_content('header_4', 'h3'); ?>
				<?= get_block_content('content_4'); ?>
			</div>
		</div>
	</div>
</section>
