<section class="fdb-block">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-10 col-sm-6 col-md-4 col-lg-3 m-auto m-md-0">
          <?=get_block_content_image('image_1', '255x255', 'rc', 'img-fluid');?>
        </div>

        <div class="col-12 col-md-8 ml-auto pt-5 pt-md-0">
          <?=get_block_content('content_1', 'h1');?>
		  <?=get_block_content('content_2', 'p', 'text-h3');?>
          <?=get_block_content('content_3');?>
        </div>
      </div>
    </div>
  </section>