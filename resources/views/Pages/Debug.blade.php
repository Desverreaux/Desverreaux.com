<!DOCTYPE html>
<html>
    <head>
        <title>Test page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @component('Components.GlobalScripts')
        @endcomponent

        @component('Components.Sidebar.Sidebar_Head')
        @endcomponent       

        <style>
          #sandbox {
            top: 10%;
            left: 10%;
            width: 80%;
            height: 80%;
            color: #900009;
            background-color: #999999;
            border: 1px solid white;
            display: inline-block;
            margin: 5vh 5vh 5vh 10vh;
          }
          
          #main {
            margin: 0px; 
            height: 100%;
            width: 100%;
            min-height: 100vh;
            background-color: grey;
            vertical-align: top;
          }

          body {
            margin: 0;
            padding: 0;
            border: none;
          }
        
        </style>
 
    
      </head>
<body>
      @component('Components.Sidebar.Sidebar_Body')

      @endcomponent
      
<div id="main" class="">
    
    <div id="sandbox">
      <h6> You are currently in a section of the webserver reserved exclusively for testing purposes.</h6>

  </div>
</div>



</body>
</html>
