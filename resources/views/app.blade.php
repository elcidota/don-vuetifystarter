<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
  </head>
  <body>
    @routes
    @inertia
  </body>
</html>
