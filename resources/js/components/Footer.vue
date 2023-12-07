<template>
<section class="footer mt-5">
    <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 mt-3">
    <div class="footer-logo">
      <router-link :to="{ name: 'home' }">
        <img src="../../images/upload_images/logo/logo.png" alt="Site Logo" srcset="">
      </router-link>
      <p>Tutorprovide.com is one of the very first online tutor-matching platforms in Bangladesh. It helps students/parents connect with qualified tutors in-person and online tutors in many different categories.</p>
    </div>
  
  </div>
  <div class="col-lg-1 mt-3"></div>
  
  <div class="col-lg-4 mt-3">
    <div class="footer-address">
      <h2>ADDRESS</h2>
      <p>Mirpur 2,Block-H,Road no - 9,House-10</p>
      <p>019612-442090</p>
      <p>tutorprovide@gmail.com</p>
    </div>
  </div>
  
  
  <div class="col-lg-3 mt-3">
    <div class="footer-link">
      <h2>Quick Links</h2>
      <div class="footer-link-list">
            <ul>
                <li class="nav-item">
                    <a class="nav-link">Our Tutors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Our Mission Vision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Gurdian Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Tutor Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Terms & Condition</a>
                </li>
            </ul>
        </div>
    
    </div>
  </div>
  
  </div>
  </div>

  </section>

</template>

<script>
</script>
<style>

.footer{
    background-image: url("../../images/assets/footer.png");
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
   
}

/* footer */



.footer .footer-logo img{
  width: 50%;
  height: 60px;
}

.footer .footer-logo p{
  color: #fff;
  font-size: 16px;

}
.footer .footer-address h2{
  color: #E75510;
}
.footer .footer-address p {
    color: #fff;
    font-size: 16px;
    
}
.footer .footer-link h2{
  color: #E75510;
}

.footer .footer-link .footer-link-list .nav-item a{
    color: #fff !important;
    font-size: 16px !important;
}

</style>