<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Mi App Laravel' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body>
  <x-header />

  <x-nav />

  <main class="container">
    {{ $slot }}
  </main>

  <x-footer />

  @stack('scripts')

</body>
</html>
