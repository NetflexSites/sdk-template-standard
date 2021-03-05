<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <x-seo />
  <x-mix-head preload integrity="sha512" :crossorigin="current_mode() !== 'live' ? 'anonymous' : null" />

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117780059-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117780059-1');
  </script>

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

  <x-mix-body integrity="sha512" :crossorigin="current_mode() !== 'live' ? 'anonymous' : null" />

  @stack('bodyEnd')

  <x-editor-tools />
</body>
</html>