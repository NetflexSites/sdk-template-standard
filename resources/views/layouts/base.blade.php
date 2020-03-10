<!DOCTYPE html>
<html>
<head>
  @yield('head')
</head>
<body>
  @yield('body')
  @stack('scripts')
  <x-editor-tools />
</body>
</html>
