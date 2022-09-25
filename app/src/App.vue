<template>
  <div>
    <navbar class="navbar-item"/>
    <section class="section-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-about text-left">
            <h1>Lorem Ipsum</h1>
            <p>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens standard for dummytekst helt siden 1500-tallet, da en ukjent boktrykker stokket en mengde bokstaver for å lage et prøveeksemplar av en bok. Lorem Ipsum har tålt tidens tann usedvanlig godt, og har i tillegg til å bestå gjennom fem århundrer også tålt spranget over til elektronisk typografi uten vesentlige endringer. Lorem Ipsum ble gjort allment kjent i 1960-årene ved lanseringen av Letraset-ark med avsnitt fra Lorem Ipsum, og senere med sideombrekkingsprogrammet Aldus PageMaker som tok i bruk nettopp Lorem Ipsum for dummytekst.</p>
          </div>
          <div class="col-md-6 text-about text-center">
            <img :src="image" alt="Girl in a jacket" width="500" height="600">
          </div>
        </div>
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
  },
  data () {
    return {
      image: require('./assets/trabalhador.png'),
      rgb: []
    }
  },
  methods: {
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
  margin-top: 10%;
}
</style>
