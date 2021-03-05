<section class="fdb-block">
    <div class="container">
      <div class="row text-left align-items-center">
        <div class="col-12 col-md-6 col-lg-4">
          	<?=get_block_content('content_1', 'h2');?>
		  	<?=get_block_content('content_2', 'p', 'text-h3');?>
		  	<?=get_block_content('content_3');?>
        </div>

        <div class="col-12 col-md-6 col-lg-4 pt-4 pt-md-0">
          	<?=get_block_content('content_4', 'h2');?>
		  	<?=get_block_content('content_5', 'p', 'text-h3');?>
		  	<?=get_block_content('content_6');?>
        </div>

        <div class="col-12 col-md-8 m-auto m-lg-0 col-lg-4 pt-5 pt-lg-0">
          	<?=get_block_content_image('image_1', '255x180', 'rc', 'img-fluid');?>
        </div>
      </div>
    </div>
  </section>