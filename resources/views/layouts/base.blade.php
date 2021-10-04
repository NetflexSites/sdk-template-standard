<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <x-seo />
  <x-mix-head />
  @yield('headEnd')
</head>
<body>

  <div id="app">
    <x-blocks.navbar />

    <main class="main">
      @yield('main')
    </main>

    <x-blocks.footer />
  </div>

  <x-mix-body />

  @stack('bodyEnd')

  <x-editor-tools />
</body>
</html>
