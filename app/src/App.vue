<template>
  <div>
    <navbar/>
    <section class="section-1">
      <div class="container text-about">
        <h1>Lorem Ipsum</h1>
      </div>
    </section>
  </div>
</template>

<script>
// import initial from './components/Initial.vue'
import navbar from './components/NavBar.vue'

export default {
  name: 'App',
  components: {
    navbar
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, Poppins, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}
*{
  margin: 0;
  padding: 0;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
/* body{
  background-color:#181818;
} */
.section-1{
  background-color: #181818;
  color:#d6d6d6;
  width: 100%;
  height: 500px;
}
.text-about{
  
}
</style>
