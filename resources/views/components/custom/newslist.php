<section class="fdb-block team-1">
    <div class="container">
	    <?=set_edit_btn($settings);?>
		<div class="row">
			<div class="col-12">
			  <?=get_block_content('title');?>
			</div>
		</div>
		<div class="row">
			<?$entries = search('directory_id:10002 published:1', 'entry', 3, ['created' => [SORT_STRING, SORT_DESC]]);?>
			<?if($entries!=NULL) {?>
			<?$i=0?>
			<?foreach($entries as $entry) {?>
			<?$entry=get_directory_entry($entry['relation_id']);?>
			<?if($entry['id']) {?>

	        <div class="col-md-4 text-left">
	          <div class="fdb-box mb-4">
	            <?=cdn_image([
				   'path' => $entry['image'], 
				   'dimensions' => '360x280', 
				   'image_class' => 'img-fluid',
				   'compression' => 'rc', 
				   'alt' => 'Picture of '.$entry['name'], 
				   'resolutions' => ['2x', '3x'],
				   'sm' => [
				   'dimensions' => '518x523',
					'resolutions' => ['2x']
					]
				]);?>
	            <div class="content">
					<h3><strong><?=$entry['name'];?></strong></h3>
					<a class="btn btn-block" href="/news/<?=$entry['url'];?>">Read more</a>
	            </div>
	          </div>
	        </div>
	        <?}?>
	        <?}?>
	        <?}?>
		</div>
	</div>
</section>
