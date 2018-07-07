<template>
<div class="Sidebar">
    <ul class="uk-nav uk-nav-default" v-for="Link in Links" v-bind:key="Link.name" >
        <li>
            <a href="#" class="navButton"> 
                <img class="" src="http://localhost/Assets/svg/icons/001-ar-glasses.svg" alt="">     
            </a>
        </li>
    </ul>
</div>


        
</template>

<script>
var menuFunctions;

export default {
  data() {
    return {
      Link: {
        image: "",
        url: "",
        function: "",
        alt: "",
        name: "link blah blah"
      },

      Links: [
        {
          image: "http://localhost/Assets/svg/icons/001-ar-glasses.svg",
          url: "",
          function: "",
          alt: "",
          name: "link blah blah"
        },

        {
          image: "http://localhost/Assets/svg/icons/002-cubes.svg",
          url: "",
          function: "",
          alt: "",
          name: "link blah blah"
        },

        {
          image: "http://localhost/Assets/svg/icons/003-bomb.svg",
          url: "",
          function: "",
          alt: "",
          name: "link blah blah"
        },

        {
          image: "http://localhost/Assets/svg/icons/004-game-console.svg",
          url: "",
          function: "",
          alt: "",
          name: "link blah blah"
        },
        {
          image: "http://localhost/Assets/svg/icons/005-database.svg",
          url: "",
          function: "",
          alt: "",
          name: "link blah blah"
        },

        {
          image: "http://localhost/Assets/svg/icons/006-css-3.svg",
          url: "",
          function: "",
          alt: "",
          name: "link blah blah"
        },

        {
          image: "",
          url: "",
          function: "",
          alt: "",
          name: "link blah blah"
        }
      ]
    };
  }

  loadSvg() {

  }



};
</script>

<style>
.Sidebar {  
  position: fixed;
  overflow: auto;  
  clear: both;
  float: left;

  background-color: #101018;


  padding: 0px;
  margin: 0px;
  width: 80px;
  height: 100%;
  
}
</style>
