<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mini Project</title>
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div class="header">
            <a href="#default" class="logo"></a>
            <div class="header-right">
              <a class="active" href="/">Home</a>
              <a href="{{ route('link_cat') }}">Cating Link</a>
            </div>
          </div>
    </body>
</html>
