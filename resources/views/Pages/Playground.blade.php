<!DOCTYPE html>
<html>
<head>
  <title>{{$Data['Title']}}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/preload.js') }}"></script> 

</head>
<body>
<div id="app">

<Sidebar></Sidebar>

<div id="main" class="page">

  <span style="font-size:60px;color:white">Debuging Portal</span>

 <p uk-margin>
    <a class="uk-button uk-button-default" href="#">Link</a>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default" disabled>Disabled</button>
</p>

  <div id="app" sytle="margin:0px">
    <div class="row">
      {{-- <Card></Card>
      <Card></Card>
      <Card></Card>
      <Card></Card> --}}
    </div>
  </div>


</div>
</div>

<script src="{{ asset('js/app.js') }}"></script> 

</body>
</html>
