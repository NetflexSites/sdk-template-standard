<section class="fdb-block">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-6 col-xl-5">
          <?=get_block_content('content_1', 'h1');?>
          <?=get_block_content('content_2', 'p', 'text-h3 mb-5');?>
          <?=get_block_content('content_3');?>
          <p>
            <?=get_block_content_image('icon_1', '60x60', 'fill', 'fdb-icon');?>
            <?=get_block_content_image('icon_2', '60x60', 'fill', 'fdb-icon ml-2');?>
            <?=get_block_content_image('icon_3', '60x60', 'fill', 'fdb-icon ml-2');?>
            <?=get_block_content_image('icon_4', '60x60', 'fill', 'fdb-icon ml-2');?>
          </p>
        </div>
        <div class="col-12 col-md-8 m-auto ml-lg-auto mr-lg-0 col-lg-6 pt-5 pt-lg-0">
          <?=get_block_content_image('image_1', '540x380', 'rc', 'img-fluid');?>
        </div>
      </div>
    </div>
  </section>