<x-background-image
  area="image"
  preset="bannerFullscreen"
  class="bg_" {{-- 'bg_'.uniqid() --}}
>

  <x-editor-button
    area="iamge"
    type="image"
    name="Edit background image"
    description="Select image from files to change background"
    icon="fa fa-image"
    items="9999"
  />
  
  <section class="fdb-block fdb-viewport no_padding">
    <div class="d-flex bannerbox">
      <div class="row">
        <div class="green_banner">
          <x-inline area="content_1" is="h1" />
          <x-inline area="content_3" />
        </div>
        <div class="green_shape"> </div>
      </div>
    </div>
  </section>

</x-background-image>