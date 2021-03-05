
<?
$link2 = array(
'name' => 'Rediger lenke',
'description' => 'Velg hvilken side bildet skal lenke til.',
'type' => 'link',
'alias' => 'link2',
'content_field' => 'id',
'max-items' => 9999,
'style' => 'position: static; right: auto; top: auto; bottom: auto; left: auto; margin: 0 auto 20px; display: inline; text-align: center; width: auto;'
);
$linkd2 = get_content_array(get_block_content_string($link2));
?>

<?
$link3 = array(
'name' => 'Rediger lenke',
'description' => 'Velg hvilken side bildet skal lenke til.',
'type' => 'link',
'alias' => 'link3',
'content_field' => 'id',
'max-items' => 9999,
'style' => 'position: static; right: auto; top: auto; bottom: auto; left: auto; margin: 0 auto 20px; display: inline; text-align: center; width: auto;'
);
$linkd3 = get_content_array(get_block_content_string($link3));
?>


<section class="fdb-block fdb-features-31">
	<div class="container">
		<div class="row text-center">

			<div class="col-12 col-md-8 m-auto col-lg-4">
				<div class="fdb-box fdb-touch">
					<x-editor-button
						area="link1"
						type="link"
						name="Rediger lenke"
						description="Velg hvilken side bildet skal lenke til."
						>
							Rediger lenke
					</x-editor-button>
					<a target="_blank" href="//" class="content('link1')">
						<x-image
							area="icon_1"
							size="270x180"
							:mode="MODE_AUTO"
							class="fdb-icon"
						/>
					</a>
					<x-inline area="header_1" is="h2" />
					<x-inline area="content_1" is=p />
				</div>
			</div>

			<div class="col-12 col-md-8 m-auto col-lg-4 pt-5 pt-lg-0">
				<div class="fdb-box fdb-touch">
					<?=set_edit_btn($link2);?>
					<a target="_blank" href="//<?=$linkd2['text'];?>">
					<?= get_block_content_image('icon_2', '270x180', 'a', 'fdb-icon'); ?>
					</a>
					<x-inline area="header_2" is="h2" />
					<x-inline area="content_2" is="p" />
				</div>
			</div>

			<div class="col-12 col-md-8 m-auto col-lg-4 pt-5 pt-lg-0">
				<div class="fdb-box fdb-touch">
					<?=set_edit_btn($link3);?>
					<a target="_blank" href="//<?=$linkd3['text'];?>">
					<?= get_block_content_image('icon_3', '270x180', 'a', 'fdb-icon'); ?>
					</a>
					<x-inline area="header_3" is="h2" />
					<x-inline area="content_3" is="p" />
				</div>
			</div>

		</div>
	</div>
</section>
