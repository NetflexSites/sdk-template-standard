<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <x-seo />
  <x-mix-head />
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

  <x-mix-body />

  @stack('documentEnd')

  <x-editor-tools />
</body>
</html>
