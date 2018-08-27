<template>
  <div id="splash" :style="styleObject_splash">

    <div id="title">

      <p id="line1">Desverreaux</p>
      <p id="line2">Digital</p>
      <p id="line3">Development</p>

      <svg id="rect" height="500" width="500"> 
        <polygon points="0,500 200,0 500,0 300,500" transform='translate(300 100)' style="fill:black;stroke:white;stroke-width:1" />
      </svg>

    </div>

  </div>
</template>

<script>

export default {

  props: {

    imageProp: {
      type: String,
      required: false,
    },

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
/* #temp {
  height: 100vh;
} */

#splash {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100vw;
}

#title {

}

#title > p {
  font-size: 40px;
  letter-spacing: 4px;
  /* background-color:black; */
  margin: 0px;
  padding: 10px;
  display: block;
  position: relative;
}

#line1 {
  left: -25%;
}

#line2 {
  
}

#line3 {
  left: 25%;
}

rect {
  top: -100%;
  transform: translate(295px, 115px);
}


img {
  display:block;
  height: 100%;
  width: 100%;
  
}


</style>
