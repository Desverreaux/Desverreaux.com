<!--
this vue component is mainly a wrapper for the carousel component that is included with uikit 
,as such this component is HIGHLY dependent on uikit's inclusion to the project. 
-->
<template>

  <div class="uk-panel">
    <img src="Assets/images/placeholder.jpg" alt="">
    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
      <h3 class="uk-margin-remove">Bottom</h3>
      <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>

</template>

<script>
  export default {
    props: {},

    data() {
      return {};
    },

    mounted: function () {},

    methods: {}
  };

</script>

<style scoped>

#carousel {
  min-height: 500px;
}

</style>
