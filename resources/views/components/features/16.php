<section class="fdb-block fdb-features-16 pb-md-0">
	<div class="container">
		<div class="row justify-content-center pb-xl-5">
			<div class="col-12 col-md-8 text-center">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>
			</div>
		</div>

		<div class="row text-right align-items-center-lg align-items-end pt-5">
			<div class="col-7 col-sm-4 m-auto mb-md-0 mt-md-0 m-lg-auto">
				<?= get_block_content_image('image', '350x525', 'l', 'img-fluid br-b-0'); ?>
			</div>

			<div class="col-12 col-md-7 col-lg-6 col-xl-5 m-auto text-left pt-5 pt-md-0">
				<?= get_block_content('header_1', 'h3'); ?>
				<?= get_block_content('content_1'); ?>

				<?= get_block_content('header_2', 'h3', 'mt-4 mt-xl-5'); ?>
				<?= get_block_content('content_2'); ?>

				<?= get_block_content('header_3', 'h3', 'mt-4 mt-xl-5'); ?>
				<?= get_block_content('content_3'); ?>
			</div>
		</div>
	</div>
</section>
