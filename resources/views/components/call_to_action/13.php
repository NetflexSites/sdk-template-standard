<section class="fdb-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?=get_block_content('content_1', 'h1');?>
          <?=get_block_content('content_2', 'p', 'text-h3');?>
        </div>
      </div>

      <div class="row justify-content-center align-items-center pt-5">
        <div class="col-8 col-sm-3">
          <?=get_block_content_image('image_1', '255x255', 'rc', 'img-fluid');?>
        </div>
        <div class="col-12 col-sm-6 m-auto pt-4 pt-sm-0">
          <?=get_block_content('content_3', 'h3');?>
          <?=get_block_content('content_4', 'p', 'text-h3');?>
        </div>
        <div class="col-12 col-sm-3 text-center pt-4 pt-sm-0">
          <?=get_block_content('content_5');?>
        </div>
      </div>
    </div>
  </section>