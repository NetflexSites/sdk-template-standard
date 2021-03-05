<section class="fdb-block fdb-features-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6 col-xl-5">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>

				<div class="row pt-4 pt-xl-5">
					<div class="col-12 col-md-5">
						<?= get_block_content('header_1', 'h4'); ?>
						<?= get_block_content('content_1'); ?>
					</div>
					<div class="col-12 col-md-5 m-auto pt-3 pt-md-0">
					<?= get_block_content('header_2', 'h4'); ?>
					<?= get_block_content('content_2'); ?>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-8 col-lg-6 m-auto mr-lg-0 ml-lg-auto pt-5 pt-lg-0">
          		<?=get_block_content_image('image', '540x540', 'l', 'img-fluid');?>
			</div>
		</div>
	</div>
</section>
