<template>
<div class="Sidebar" v-on:mouseover="overNav" v-on:mouseleave="leaveNav">
  <div class="verticalPadding"> 
    <ul class="Link"  v-for="Link in Links" v-bind:key="Link.id" >
        <li>
          <sidebarlink :link="Link" :visible="Extended" ></sidebarlink>
        </li>
    </ul>
  </div>
</div>


        
</template>

<script>

export default {

  data() {
    return {
      Links: [
        {
          id: "menu",
          name: "menu",
          image: "http://localhost/Assets/svg/icons/menu.svg",
          url:"",
          // visible: false,
          // function: "",
          alt: "",
        },
        {
          id: "house",
          name: "Home",
          image: "http://localhost/Assets/svg/icons/house.svg",
          url:"http://localhost/Home",
          // visible: false,
          // function: "",
          alt: "",
        },
        {
          id: "bar-chart",
          name: "Dev Ops",
          image: "http://localhost/Assets/svg/icons/bar-chart.svg",
          url:"http://localhost/Admin",
          // visible: false,
          // function: "",
          alt: "",
        },

        {
          id: "user",
          name: "Biography",
          image: "http://localhost/Assets/svg/icons/user.svg",
          url:"http://localhost/Bio",
          // visible: false,
          // function: "",
          alt: "",
        },

        {
          id: "blog",
          name: "Blog",
          image: "http://localhost/Assets/svg/icons/blog.svg",
          url:"http://localhost/Blog",
          // visible: false,
          // function: "",
          alt: "",
        },
        {
          id: "cubes",
          name: "Interactive",
          image: "http://localhost/Assets/svg/icons/cubes.svg",
          url:"http://localhost/Portfolio",
          // visible: false,
          // function: "",
          alt: "",
        },
        {
          id: "edit",
          name: "Resume",
          image: "http://localhost/Assets/svg/icons/edit.svg",
          url:"http://localhost/Playground",
          // visible: false,
          // function: "",
          alt: "",
        },
        {
          id: "envelope",
          name: "Contact",
          image: "http://localhost/Assets/svg/icons/envelope.svg",
          url:"http://localhost/Contact",
          // visible: false,
          // function: "",
          alt: "",
        }
      ],

      Extended: false

      }

    },
  

  mounted: function() {
  
  
    },


  methods: {
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
    
    //   draw.attr('fill','#fff');

    // },

    overNav() {
      this.Extended = true;
      $(".Sidebar").width(400);
    },

    leaveNav() {
      this.Extended = false;
      $(".Sidebar").width(80);
    },

    // overLink(link) {  
    //   $(link.target).closest(".Link1").addClass("focusLink");
    //   $(link.target).find(".MenuText1").addClass("focusMenuText1");

    //   console.log($(link.target));

    // },

    // leaveLink(link) {
    //   $(link.target).closest(".Link1").removeClass("focusLink");
    //   $(link.target).find(".MenuText1").removeClass("focusMenuText1");
    // }


  },
  
};
</script>

<style>
.Sidebar {  
  position: fixed;
  /* overflow: auto; */
  clear: both;
  float: left;

  padding: 0px;
  margin: 0px;
  width: 80px;
  height: 100%;
  background-color: #101015;

}

.Link {
    /* background-color: gray; */

    list-style-type: none;
    padding: 0px;
    margin: 10 10px;

}

.verticalPadding {
  padding: 60px 0px;
}

.focusLink {
  background-color: whitesmoke;
}


.MenuBlock2 {
    /* background-color: blue; */

  display: flex;
  width: 80px;
  height: 80px;
  overflow: visible;
}



.iconBlock3 {
  

  min-width: 40px;
  min-height: 40px;
  max-height: 40px;

  position: relative;
  top: 25%;
  left: 25%;


}

.SubBlock3 {
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
}

.focusMenuText1 {
  color: black; 
 
}
</style>
