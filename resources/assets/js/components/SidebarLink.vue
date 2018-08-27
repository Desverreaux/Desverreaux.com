<template>

  <a class="Link" :key="id" :href="url" v-on:mouseover="overLink" v-on:mouseleave="leaveLink">
    <div class="svgBlock " > 
      <div class="svgWrapper"> 
        <object :id="handle" type="image/svg+xml" :data="image"></object>   
      </div>
    </div>

    <div class="textBlock" v-show="visible" >
      <span class="innerTextBlock">{{name}}</span>
    </div>
  </a>
</template>

<script>
export default {
props: {
  link: {
    type: Object,
    required: true,
  },
  visible: {
    type: Boolean,
    required: true,
  }
},

data() {
  return {
    id: this.link.id,
    name: this.link.name,
    handle: this.link.id + "svg",
    image: this.link.image,
    url: this.link.url,
  };
},

  mounted: function() {

},

methods: {

  overLink(link) {  
    $(link.target).closest(".Link").addClass("focusLink");
    this.changeIconColor("Black");
  },

  leaveLink(link) {
    $(link.target).closest(".Link").removeClass("focusLink");
    this.changeIconColor("white");
  },

  changeIconColor(color) {
    var a = document.getElementById(this.handle);
    // a.addEventListener("load",function(){
      var svgDoc = a.contentDocument;
      var svgItem = svgDoc.getElementById(this.id);
      svgItem.setAttribute("fill",color);
    // }, false);
  },

  // LoadSvg(address, id) {
  //   var ref = this;
    
  //   axios.get(address)
  //   .then(function (response) {
  //     ref.DrawSvg(40, String(response.data), id);
  //   })
  //   .catch(function (error) {
  //   });
    
  //   },

  // DrawSvg(IconSize, svgdata, id) {
  //   var draw = SVG(id).size(IconSize, IconSize);
  
  //   draw.svg(svgdata);
  
  //   draw.attr('fill','white');
  // },


}

}
</script>

<style scoped>

.textBlock {
  display: inline-block;

  background-color: inherit;
  color: inherit;

  height: 100%;
  flex: 1 0 0px;

  position: relative;

  display: flex;
  /* justify-content: flex-start; /* align horizontal */
  align-items: center; /* align vertical */
}

.innerTextBlock {
  background-color: inherit;
  color: inherit;

  font-size: inherit;
  font-family: Raleway, Roboto, "Segoe UI",  "Helvetica Neue", Arial, sans-serif;

  position: relative;
  left: 40px;
}

.svgBlock {
  display: inline-block;
  background-color: inherit;

  min-height: 80px;
  height: 80px;
  
  flex: 0 0 80px;

  overflow: visible;
}

.Link {
  color: white;

  font-size:32px;
  


  list-style-type: none;
  height: 80px;
  padding: 0px;
  margin: 10 10px;
  display:flex;
}

.focusLink {
  background-color: whitesmoke;
  color: black;
}





.svgWrapper {
  /* background-color:black; */

  min-width: 70%;
  min-height: 70%;
  max-width: 70%;
  max-height: 70%;

  position: relative;
  top: 15%;
  left: 15%;

  float: left;


}

.SubBlock {
  /* background-color: indigo; */

  min-width:320px;
  height:80px;

  position: relative;
  left: 40px;

  display: flex;
  justify-content: flex-start; /* align horizontal */
  align-items: center; /* align vertical */
}

.MenuText1 {
  color: whitesmoke;
  text-decoration: none;
  font-size: 6em;
}

.focusMenuText1 {
  color: black; 
 
}
</style>
