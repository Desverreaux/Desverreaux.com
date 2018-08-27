<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <title>{{ $Data['Title'] }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/preload.js') }}"></script> 

    <style type="text/css"> 
      /* First image (Logo. Full height) */
      .bgimg-1 {
          background-image: url({{$Image['neon']}});
      }

      /* Second image (Portfolio) */ 
      .bgimg-2 {
          background-image: url({{$Image['orient']}});
      }

      /* Third image (Contact) */
      .bgimg-3 {
          background-image: url({{$Image['orient2']}});
      }
    </style>
    <script type="text/javascript" src="http://livejs.com/live.js"></script>

  </head>
<body>
  <div id="app">

    <Sidebar></Sidebar>

    <Splash image-prop="{{$Image['neon']}}"></Splash>

    <div id="main" class="frame">
    <!-- Container (Portfolio Section) -->
    
      <landing></landing>
    
    </div>
    
  </div>


  
  <div  id="portfolio">
    <h3 >MY WORK</h3>
    <p ><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    {{-- <div class="-padding ">
      <div class=" m3">
        <img src= {{$Image['neon']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
      </div>

      <div class=" m3">
        <img src={{$Image['keyboard']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
      </div>

      <div class=" m3">
        <img src={{$Image['orient']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
      </div>

      <div class=" m3">
        <img src={{$Image['fox']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
      </div>
    </div>

    <div class="-padding  w3-section">
      <div class=" m3">
        <img src={{$Image['music']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
      </div>

      <div class=" m3">
        <img src={{$Image['stairway']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
      </div>

      <div class=" m3">
        <img src={{$Image['stairway2']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
      </div>

      <div class=" m3">
        <img src={{$Image['rock2']}} style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
      </div>
      <button class="w3-button  w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>
  </div> --}}

  {{-- <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='n"">
    <span class="w3-button  w3-black w3-display-topright" title="Close Modal Image"><i class="e"></i></span>
    <div class="w3-modal-content w3-animate-zoom  w3-transparent ">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity "></p>
    </div>
  </div> --}}

  <!-- Third Parallax Image with Portfolio Text -->
  <div >
    <div >
      <span >[Section to be defined]</span>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="contact">
    <h3 >WHERE I WORK</h3>
    <p ><em>I'd love your feedback!</em></p>

    <div >
      <div >
        <!-- Add Google Maps -->
        <div id="googleMap" style="width:100%;height:400px;"></div>
      </div>
      <div>
        <div>
          <i></i> Chicago, US<br>
          <i></i> Phone: +00 151515<br>
          <i></i> Email: mail@mail.com<br>
        "v>
        <p>Swing by for a cup of <i></i>, or leave me a note:</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <a href="#home"><i ></i>To the top</a>
    <div>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
    </div>
  </footer>
  

  <script src="{{ asset('js/app.js') }}"></script> 


  <!-- Add Google Maps -->
  <script>
  function myMap()
  {
    
  }

  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }

  </script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> --}}
  </div>

</body>
</html>
