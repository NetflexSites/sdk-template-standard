<?	
$bgSettings = array(
    'name' => 'Edit background image',
    'description' => 'Select image from files to change background',
    'icon' => 'fa fa-image', 
    'type' => 'image',
    'alias' => 'image',
    'content_field' => 'image',
    'max-items' => 9999,
    'style' => 'color: #fff; display:inline-block; margin: 0 0 10px 0; padding: 5px 10px; font-size: 12px; position: absolute; text-align:center; left:20px; right:auto; bottom: 20px; top:auto;'
);
$bgImage = get_block_content_string($bgSettings);
$class = 'bg_'.uniqid();
echo cdn_image_css([
	'path' => $bgImage,
	'compression' => 'rc',
	'dimensions' => '2560x1440',
	'resolution' => ['2x'],
	'class' => $class
]);
?>
<section class="fdb-block pb-0 <?=$class;?>">
    <?=set_edit_btn($bgSettings);?>
    <div class="container">
      <div class="row text-left">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="fdb-box fdb-touch br-0">
            <?=get_block_content('content_1', 'h2');?>
		  	<?=get_block_content('content_2', 'p', 'text-h3');?>
            <?=get_block_content('content_3');?>
          </div>
        </div>
      </div>
    </div>
  </section>