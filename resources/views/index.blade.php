<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>{{ config('app.name', 'Contegris') }}</title>
  </head>
  <body>
    <!-- As a heading -->

      <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Contegris</span>
      </nav>
    <div class="container">
        @include('datatable')
        {{-- @yield('content') --}}
    </div>

    {{-- <script>
      $(document).ready(function(){
        $('#customer-table').DataTable();
      });
    </script> --}}

    @include('script')
  </body>
</html>