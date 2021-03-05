<?
	$imageAmountSettings = [
		'name' => 'Velg antall bilder',
		'icon' => 'fa fa-align-justify',
		'type' => 'text',
		'alias' => 'imageAmount',
		'content_field' => 'text',
		'style' => 'color: #fff; display:inline-block; margin: 0 0 10px 0; padding: 5px 10px; font-size: 12px; position: absolute; text-align:center; left:20px; right:auto; bottom: 20px; top:auto;',
	];

$imageAmount = (int) get_block_content_string($imageAmountSettings);
$imageAmount = ($imageAmount <= 0) ? 1 : $imageAmount;
?>

<section class="fdb-block fdb-calltoaction-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 col-lg-6 text-center">
				<?= get_block_content('header', 'h1'); ?>
				<?= get_block_content('content', 'p', 'text-h3'); ?>
				<?= get_block_content('button', 'p', 'mt-5 mt-sm-4'); ?>
			</div>
		</div>

		<div class="row pt-5 pb-3">
			<div class="col-12 text-center">
				<?= get_block_content('subtext', 'p'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<?= set_edit_btn($imageAmountSettings); ?>

				<? for ($i = 0; $i < $imageAmount; $i++) { ?>
					<?= get_block_content_image("image_{$i}", '60x30', 'p', 'ml-3 mr-3 mb-2 mt-2'); ?>
				<? } ?>

				<!--<img alt="image" height="30" class="ml-3 mr-3 mb-2 mt-2"
					 src="<?/*= get_asset('images/customers/adobe.svg'); */?>">
				<img alt="image" height="30" class="ml-3 mr-3 mb-2 mt-2"
					 src="<?/*= get_asset('images/customers/discovery.svg'); */?>">
				<img alt="image" height="30" class="ml-3 mr-3 mb-2 mt-2"
					 src="<?/*= get_asset('images/customers/ebay.svg'); */?>">
				<img alt="image" height="30" class="ml-3 mr-3 mb-2 mt-2"
					 src="<?/*= get_asset('images/customers/samsung.svg'); */?>">
				<img alt="image" height="30" class="ml-3 mr-3 mb-2 mt-2"
					 src="<?/*= get_asset('images/customers/orange.svg'); */?>">
				<img alt="image" height="30" class="ml-3 mr-3 mb-2 mt-2"
					 src="<?/*= get_asset('images/customers/salesforce.svg'); */?>">-->
			</div>
		</div>
	</div>
</section>
