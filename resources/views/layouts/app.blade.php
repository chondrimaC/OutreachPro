<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title></title>
  </head>
  <body>
    @include('layouts/navbar')
    <div class="container">
      @include('layouts/messages')
      @yield('content')
    </div>
  </body>
</html>
