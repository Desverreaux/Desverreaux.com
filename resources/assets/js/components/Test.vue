<template>
<div class="wrapper">
    <carousel :per-page="1" :navigate-to="someLocalProperty" mouse-drag="false">
    <slide>
      Slide 1 Content
    </slide>
    <slide>
      Slide 2 Content
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
