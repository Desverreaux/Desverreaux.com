<template>
  <div class="wrapper">
      <carousel :per-page="1" :mouse-drag="1">
      <slide>
          <img src="Assets/images/placeholder.jpg" alt="">
      </slide>
      <slide>
          <img src="Assets/images/placeholder.jpg" alt="">
      </slide>
    </carousel>
  </div>    
</template>

<script>
  export default {
  props: {

  },

    data () {
      return {
        list: [],
      }
    },

    methods: {
      test () {console.log(1)}
    },

    mounted () {

    }
  }
</script>

<style scoped>

  p {
    margin: 0;
  }

</style>
