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
  <link rel="stylesheet" href="{{ asset('CSS/Lib/Blog.css') }}">

</head>

<body>
<div id="app" >

@include('Components.Sidebar.Body')

{{-- <MySidebar></MySidebar> --}}

<div id="main" class="frame">

<Card></Card>


</div>
</div> 
<script src="{{ asset('js/app.js') }}"></script> 
</body>
</html>
  