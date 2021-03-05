<section class="fdb-block">
    <div class="container">
      <div class="row text-left align-items-center">
        <div class="col-10 col-sm-6 m-auto m-lg-0 col-lg-4">
          <?=get_block_content_image('image_1', '350x350', 'rc', 'img-fluid');?>
        </div>

        <div class="col-12 col-lg-8 pt-4 pt-lg-0">
          <?=get_block_content('content_1', 'h1');?>
		  <?=get_block_content('content_2', 'p', 'text-h3');?>
		  <?=get_block_content('content_3');?>

          <div class="row mt-5">
            <div class="col-12 col-sm-6">
              <?=get_block_content('content_4', 'h3');?>
			  <?=get_block_content('content_5', 'p', 'text-h3');?>
			  <?=get_block_content('content_6');?>
            </div>

            <div class="col-12 col-sm-6 pt-3 pt-sm-0">
              <?=get_block_content('content_7', 'h3');?>
			  <?=get_block_content('content_8', 'p', 'text-h3');?>
			  <?=get_block_content('content_9');?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>