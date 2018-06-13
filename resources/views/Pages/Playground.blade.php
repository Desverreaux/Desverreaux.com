<!DOCTYPE html>
<html>
    <head>
        <title>Test page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        @include('Components.GlobalScripts')
        @include('Components.Sidebar.Head')

        import lunarCalendar from 'vue-lunar-calendar'


        <style>
          .container {
            color: white;
          }
          
          #app {
            margin: 0px 64px; 
            height: 100%;
            width: 100%;
            min-height: 100vh;
            vertical-align: top;
            background-color: #1e1e1e;

          }

          body {
            margin: 0;
            padding: 0;
            border: none;
            background-color: #1e1e1e;
          }
        
        </style>
 
    
      </head>
<body>
      @include('Components.Sidebar.Body')
      
<div id="app">
    <div id="container">
      <articles></articles>
    </div>          
  </div>
</div>

  <script src="{{asset('js/app.js') }}"></script>

</body>
</html>
