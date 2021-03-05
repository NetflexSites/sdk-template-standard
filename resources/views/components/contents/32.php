<section class="fdb-block">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          	<?=get_block_content('content_1', 'h2');?>
		  	<?=get_block_content('content_2', 'p', 'text-h2');?>
        </div>
      </div>

      <div class="row text-center pt-3 pt-xl-5">
        <div class="col-12 col-sm-10 m-auto m-md-0 col-md-6">
          <?=get_block_content_image('image_1', '540x380', 'rc', 'img-fluid');?>
          <?=get_block_content('content_3', 'p', 'text-h3');?>
        </div>

        <div class="col-12 col-sm-10 m-auto m-md-0 col-md-6 pt-5 pt-md-0">
          <?=get_block_content_image('image_2', '540x380', 'rc', 'img-fluid');?>
          <?=get_block_content('content_4', 'p', 'text-h3');?>
        </div>
      </div>
    </div>
  </section>