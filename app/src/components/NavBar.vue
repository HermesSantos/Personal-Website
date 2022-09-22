<template>
  <div>
    <div class="container">
      <div class="row">
        <nav class="navbar-nav fixed-top navbar-expand col-md-12">
          <a class="navbar-brand col-md-2" href="#">
            <img :src="logo" class="logo-image">
          </a>
          <div class="navbar-margin col-md-8" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="#">Projetos <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Sobre</a>
              <a class="nav-item nav-link" href="#">Curriculum</a>
            </div>
          </div>
          <div class="col-md-2 navbar-margin">
            <li class="nav-item dropdwon">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contato
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Linkedin</a>
                <a class="dropdown-item" href="#"><i class="fa-duotone fa-user"></i>Instagram</a>
                <a class="dropdown-item" href="#">Whatsapp</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ou mande um E-mail</a>
              </div>
            </li>
          </div>
        </nav>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'nav-bar',

  data() {
    return {
      logo: require('../assets/hermes-b.png')
    }
  },
}
</script>
<style>
.nav-bar{
  opacity: 0.5;
  display: flex
}
.logo-image{
  margin-top: 20px;
  width: 120px;
  height: auto;
  /* object-fit: cover; */
}
.nav-link {
  color: #8d8d8d;
  animation: 0.5s;
}
.nav-link:hover{
  color: #e4e4e4
}
.navbar-margin{
  margin-top: 28px;
}
</style>