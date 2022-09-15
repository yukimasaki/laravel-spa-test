<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>