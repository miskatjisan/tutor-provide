<template>
  <section class="container-fluid sticky-top">
  <nav class="navbar navbar-expand-lg shadow">
    <div class="container-fluid">
      <router-link class="navbar-brand" :to="{ name: 'home' }">
        <img src="../../images/upload_images/logo/logo.png" alt="Site Logo">
      </router-link>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="me-auto"></div>
        <form class="d-flex">
          <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item mgl-1">
            <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>
          </li>
          <li class="nav-item mgl-1">
            <a class="nav-link" aria-current="page" href="#">Our Tutors</a>
          </li>
          <li class="nav-item mgl-1">
            <a class="nav-link" aria-current="page" href="#">Tution Boards</a>
          </li>
          <li class="nav-item mgl-1">
            <a class="nav-link" aria-current="page" href="#">About Us</a>
          </li>
          <li class="nav-item mgl-1">
            <a class="nav-link" aria-current="page" href="#">FaQs</a>
          </li>
          <li class="nav-item mgl-1">
              <router-link :to="{ name: 'login' }"><button class="btn-login btn btn-outline-danger px-4" style="color: #333; font-weight: bold;">Login</button></router-link>
              <router-link :to="{ name: 'registration' }"><button class="btn btn-primary1 mgl-1">REGISTRATION</button></router-link>
          </li>
          
        </ul>

        <!-- Login Registration -->
        </form>
      </div>
    </div>
  </nav>
</section>
</template>

<style>
.navbar{
    background-color: #fff !important; border-radius: 28px;
}
.navbar button{
    border-radius: 20px !important;
}

</style>