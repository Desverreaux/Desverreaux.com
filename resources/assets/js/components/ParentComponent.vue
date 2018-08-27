<template>
<div>
    <sidebarlink :link="Links.house"></sidebarlink>
    <sidebarlink :link="Links.envelope"></sidebarlink>
                 
</div>
</template>

<script>

export default {
  data() {
    return {
      Links: {
      
      
        house: {
          id: "house",
          image: "http://localhost/Assets/svg/icons/house.svg",
          url: "http://localhost/Home",
          function: "",
          alt: "",
        },
        envelope: {
          id: "envelope",
          image: "http://localhost/Assets/svg/icons/envelope.svg",
          url: "http://localhost/Home",
          function: "",
          alt: "",
        },
        home3: {
          id: "home3",
          image: "http://localhost/Assets/svg/icons/house.svg",
          url: "http://localhost/Home",
          function: "",
          alt: "",
        },
        
      }
    }
  },
  mounted: function() {

  },


  methods: {

  }

}
</script>

<style>

#svgWrapper {
  width: 80px;
  height: 80;
  max-width: 80px;
  max-height: 80px;
  overflow: hidden;
}

</style>
