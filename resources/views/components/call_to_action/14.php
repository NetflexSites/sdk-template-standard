<section class="fdb-block">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <?=get_block_content('content_1', 'h1');?>
          <?=get_block_content('content_2', 'p', 'text-h2');?>
        </div>
      </div>

      <div class="row align-items-center pt-2 pt-lg-5">
        <div class="col-12 col-md-8 col-lg-7">
          <?=get_block_content('content_3', 'h2');?>
          <?=get_block_content('content_4', 'p', 'text-h3 mb-4');?>
          <?=get_block_content('content_5');?>
        </div>

        <div class="col-8 col-md-4 m-auto m-md-0 ml-md-auto pt-5">
          <?=get_block_content_image('image_1', '255x255', 'rc', 'img-fluid');?>
        </div>
      </div>
    </div>
  </section>