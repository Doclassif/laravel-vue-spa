<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel + Vue SPA</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
    <!-- Styles -->
    <style></style>
  </head>
  <body>
    <div id="app">
      <!-- Vue app content-->
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
