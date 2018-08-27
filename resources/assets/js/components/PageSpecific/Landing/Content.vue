<template>
<div>
  <!-- Container (About Section) -->
  <div id="about">
    <h3>ABOUT ME</h3>
    <h4><em class="muted-text">I love photography</em></h4>
      <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
      qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
 
    <div>
      <div>
        <p><b><i></i>My Name</b></p><br>
        <!-- <img src={{$Image['self']}} alt="Photo of Me" width="500" height="333"> {{-- TODO: change dimensions of the image to be reactive --}} -->
      </div>

      <!-- Hide this text on small devices -->
      <div>
        <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <p>Im really good at:</p>
  </div>

  <div>
    <div>
      <span >14+</span><br>
      Partners
    </div>
    <div>
      <span >55+</span><br>
      Projects Done
    </div>
    <div>
      <span >89+</span><br>
      Happy Clients
    </div>
    <div>
      <span >150+</span><br>
      Meetings
    </div>
  </div>

  <!-- Second Parallax Image with Portfolio Text -->
  <div>
    <div>
      <span>PORTFOLIO</span>
    </div>
  </div>


</div>
</template>

<script>

export default {

  props: {

  },

  data() {
     

    return {
      ref: this.imageProp,
      
      styleObject_splash: {
        backgroundImage: 'url(Assets/images/neon.jpg)',
        backgroundAttachment: 'fixed',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
        backgroundSize: 'cover',

      }
      
      
      
      };
  },
  

  mounted: function() {
  
  
    },


  methods: {
    


  },
  
};
</script>

<style scoped>

h3 {
  text-align: center;
}

h4 {

  text-align: center;
}




</style>
