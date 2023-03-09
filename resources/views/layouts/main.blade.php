<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>LaravelComics</title>
            @vite('resources/js/app.js')
      </head>
      <body class="antialiased">

            @include('partials.header')

            <main>
                  
                  @yield('comics')

            </main>

            @include('partials.footer')

      </body>
</html>
