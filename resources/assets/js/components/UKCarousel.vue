<!--
this vue component is mainly a wrapper for the carousel component that is included with uikit 
,as such this component is HIGHLY dependent on uikit's inclusion to the project. 
-->
<template>
  <div id="carousel" class="uk-position-relative uk-visible-toggle uk-light" uk-slider="clsActivated: uk-transition-active; center: true">

    <ul class="uk-slider-items uk-grid">
      <li class="uk-width-3-4">
        <carouselItemlocal></carouselItemlocal>
      </li>
      
      <li class="uk-width-3-4">
        <carouselItemlocal></carouselItemlocal>
      </li>
      
      <li class="uk-width-3-4">
        <carouselItemlocal></carouselItemlocal>
      </li>
      
      <li class="uk-width-3-4">
        <carouselItemlocal></carouselItemlocal>
      </li>
      
      <li class="uk-width-3-4">
        <carouselItemlocal></carouselItemlocal>
      </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
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
  min-height: 600px;
}

</style>
