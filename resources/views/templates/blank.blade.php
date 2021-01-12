@extends('layouts.base')

@section('body')
  <div class="container">
    <example-component
      :title-text="'Yay! Your site is ready to be built!'"
      :content-text="'And btw; this text is displayed in a Vue component, so javascript has successfully been compiled!'"
    />
  </div>

  <x-blocks area="blocks" />
@stop
