<!DOCTYPE html>
<html>
<head>
  @yield('head')
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <x-seo />
  <x-mix-head />
</head>
<body>
  @yield('body')
  @stack('scripts')
  <x-mix-body />
  <x-editor-tools />
</body>
</html>
