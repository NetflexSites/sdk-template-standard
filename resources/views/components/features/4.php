<?
$bgSettings = array(
	'name' => 'Edit background image',
	'description' => 'Select image from files to change background',
	'icon' => 'fa fa-image',
	'type' => 'image',
	'alias' => 'image',
	'content_field' => 'image',
	'max-items' => 9999,
	'style' => 'color: #fff; display:inline-block; margin: 0 0 10px 0; padding: 5px 10px; font-size: 12px; position: absolute; text-align:center; left:20px; right:auto; bottom: 20px; top:auto;',
);
$bgImage = get_block_content_string($bgSettings);
$class = 'bg_' . uniqid();
echo cdn_image_css([
	'path' => $bgImage,
	'compression' => 'rc',
	'dimensions' => '2560x1440',
	'resolution' => ['2x'],
	'class' => $class,
]);
?>

<section class="fdb-block fdb-features-4 bg-dark <?= $class; ?>">
    <?=set_edit_btn($bgSettings);?>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<?= get_block_content('header', 'h1'); ?>
			</div>
		</div>

		<div class="row-70"></div>

		<div class="row text-center justify-content-sm-center no-gutters">
			<div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-3 m-auto">
				<div class="fdb-box fdb-touch">
					<?= get_block_content('header_1', 'h2'); ?>
					<?= get_block_content('content_1'); ?>
					<?= get_block_content('link_1', 'p', 'mt-4'); ?>
				</div>
			</div>
			<div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-3 m-auto pt-5 pt-xl-0">
				<div class="fdb-box fdb-touch">
					<?= get_block_content('header_2', 'h2'); ?>
					<?= get_block_content('content_2'); ?>
					<?= get_block_content('link_2', 'p', 'mt-4'); ?>
				</div>
			</div>
			<div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-3 m-auto pt-5 pt-xl-0">
				<div class="fdb-box fdb-touch">
					<?= get_block_content('header_3', 'h2'); ?>
					<?= get_block_content('content_3'); ?>
					<?= get_block_content('link_3', 'p', 'mt-4'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
