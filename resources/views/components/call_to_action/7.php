<section class="fdb-block">
    <div class="container">
      <div class="row text-center pb-0 pb-lg-4">
        <div class="col-12">
          <?=get_block_content('header', 'h1');?>
        </div>
      </div>
      <div class="row text-center pt-4 pt-md-5">
        <div class="col-12 col-sm-10 col-md-6 col-lg-4 m-sm-auto">
          <?= get_block_content_image('icon_1', '60x60', 'a', 'fdb-icon'); ?>
          <?=get_block_content('header_1', 'h3');?>
          <?=get_block_content('content_1');?>
        </div>

        <div class="col-12 col-sm-10 col-md-6 col-lg-4 ml-sm-auto mr-sm-auto mt-5 mt-md-0">
          <?= get_block_content_image('icon_2', '60x60', 'a', 'fdb-icon'); ?>
          <?=get_block_content('header_2', 'h3');?>
          <?=get_block_content('content_2');?>
        </div>
      </div>
    </div>
  </section>