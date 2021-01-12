<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <x-seo
    :title="$seo['title'] ?? ''"
    :description="$seo['description'] ?? ''"
    :images="$seo['images'] ?? []"
  />

  <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet">

  @yield('head')
</head>
<body>

  <div id="app">
    <x-blocks.navbar />

    <main class="main">
      @yield('body')
    </main>

    <x-blocks.footer />
  </div>

  <script src="{{ asset(mix('/js/app.js')) }}"></script>
  @stack('scripts')

  @stack('documentEnd')

  <x-editor-tools />
</body>
</html>
