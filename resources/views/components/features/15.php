<section class="fdb-block fdb-features-15 pb-0">
	<div class="container">
		<div class="row text-right align-items-center">
			<div class="col-12 col-lg-6 col-xl-5 m-lg-auto text-left">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3 pb-xl-4'); ?>

				<div class="row pt-5">
					<div class="col-3">
						<?= get_block_content_image('icon_1', '89x89', 'a', 'img-fluid'); ?>
					</div>

					<div class="col-9">
						<?= get_block_content('content_1'); ?>
					</div>
				</div>

				<div class="row pt-5">
					<div class="col-9 text-right">
						<?= get_block_content('content_2'); ?>
					</div>

					<div class="col-3">
						<?= get_block_content_image('icon_2', '89x89', 'a', 'img-fluid'); ?>
					</div>
				</div>
			</div>

			<div class="col-7 col-sm-4 m-auto pt-5 pt-md-0">
				<?= get_block_content_image('image', '350x700', 'l', 'img-fluid br-b-0'); ?>
			</div>
		</div>
	</div>
</section>
