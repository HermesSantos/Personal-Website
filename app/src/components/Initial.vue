<template>
  <div>
    <img src="https://www.pixel4k.com/wp-content/uploads/2019/04/cars-3-red-lightning-mcqueen-4k_1555208570.jpg.webp" >
    {{msg}}
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: "opa"
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.img{
  width: 100%;
  height: auto;
}
</style>
