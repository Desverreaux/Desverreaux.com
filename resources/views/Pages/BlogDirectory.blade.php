<!DOCTYPE html>
<html>
<head>
  <title>{{$Data['Title']}}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

<div id="app" >

<Sidebar></Sidebar> 


<div id="main">

<UkCarousel></UkCarousel>

<div style="padding: 100px;"></div>

<Slider></Slider>

{{-- <carousel :per-page="1" :mouse-drag="0">
    <slide>
        <img src="Assets/images/placeholder.jpg" alt="">
    </slide>
    <slide>
        <img src="Assets/images/placeholder.jpg" alt="">
    </slide>
</carousel> --}}

<div class="frame">


{{-- <p id="var"> has not been set </p> --}}
{{-- <button id="bton" class="uk-button uk-button-default">asdfad</button> --}}

</div>
</div>
</div> 



<script src="{{ asset('js/app.js') }}"></script> 


</body>
</html>
  