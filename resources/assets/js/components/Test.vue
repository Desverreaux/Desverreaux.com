<template>
<div class="wrapper">
  
  <carousel :per-page="1"  mouse-drag="false">
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
    setTimeout(() => {
      this.list = [
        { backgroundColor: '#3f51b5', width: '100%', height: '100%' },
        { backgroundColor: '#eee', width: '100%', height: '100%' },
        { backgroundColor: '#f44336', width: '100%', height: '100%' },
      ]
    }, 1000)
  },

};
</script>

<style scoped>

p {
  margin: 0;
}

</style>
