<!DOCTYPE html>
<html>
    <head>
        <title>{{$Data['Title']}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        
        @include('Components.GlobalScripts')
        @include('Components.Sidebar.Head')

        <link rel="stylesheet" href="{{ asset('CSS/Lib/DataParsing.css') }}">

      </head>
<body>
      @include('Components.Sidebar.Body')

<div id="main" class="page">
  <div class="indent">
    <div class="container">
        <table class="table table-hover">
          <thead>
            <tr>
              <th> Key </th>
              <th> Path </th>
            </tr>
          </thead>
          <tbody>
            @foreach( $Data['lines'] as $key => $value) 
            <tr>
              <td> {{$key}} </td>
              <td> {{$value}} </td>
            </tr>
            @endforeach
          </tbody> 
        </table>
      </div>
  </div>
</div>

<script src="{{ asset('js/app.js') }}"></script> 

</body>
</html>
