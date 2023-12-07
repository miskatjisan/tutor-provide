<template>
<section class="login-asset">
  <Header/>
<div class="container login">
<div class="row">
    <div class="col-6">
        <div class="login-header-left">
       <strong>Welcome Back</strong><span>🖐</span>
       <p>Sign in with your data that you entered during registration.</p>
       <img src="../../images/assets/login-left.png" alt="mom with children">
       
          <h4 class="shadow">টিউশন বা টিউটর খুঁজে পাবার সেরা প্লাটফর্ম Tutorprovide.com</h4>  
    </div>
    </div>

    <div class="col-6">
      <div class="login-right">
        <div class="login-right-header-img">
          <img src="../../images/assets/login-header-asset.png" alt="">
        </div>
          
 <div class="row login-right-header">
    <div class="col-4">
<div class="card shadow">
    <div class="card-body">
    <img src="../../images/assets/gurdian.png" alt=""><span>Gurdian</span> 
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
  <circle cx="17.5118" cy="17.1534" r="16.3299" stroke="url(#paint0_linear_142_2185)" stroke-width="0.869685"/>
  <path d="M11.5947 17.6371L15.2345 21.0983L22.4425 13.209" stroke="url(#paint1_linear_142_2185)" stroke-width="2.60906" stroke-linecap="round" stroke-linejoin="round"/>
  <defs>
    <linearGradient id="paint0_linear_142_2185" x1="8.94316" y1="-9.39074" x2="94.6179" y2="25.1629" gradientUnits="userSpaceOnUse">
      <stop stop-color="#E75510"/>
      <stop offset="1" stop-color="#E0149B"/>
    </linearGradient>
    <linearGradient id="paint1_linear_142_2185" x1="14.2464" y1="10.9079" x2="38.8936" y2="24.5761" gradientUnits="userSpaceOnUse">
      <stop stop-color="#E75510"/>
      <stop offset="1" stop-color="#E0149B"/>
    </linearGradient>
  </defs>
</svg>
</div>
</div>
</div>

    <div class="col-4">
    <div class="card shadow">
    <div class="card-body">
    <img src="../../images/assets/tutor.png" alt=""><span>Tutor</span> 
  <svg  xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
  <circle cx="17.5118" cy="17.1534" r="16.3299" stroke="url(#paint0_linear_142_2185)" stroke-width="0.869685"/>
  <path d="M11.5947 17.6371L15.2345 21.0983L22.4425 13.209" stroke="url(#paint1_linear_142_2185)" stroke-width="2.60906" stroke-linecap="round" stroke-linejoin="round"/>
  <defs>
    <linearGradient id="paint0_linear_142_2185" x1="8.94316" y1="-9.39074" x2="94.6179" y2="25.1629" gradientUnits="userSpaceOnUse">
      <stop stop-color="#E75510"/>
      <stop offset="1" stop-color="#E0149B"/>
    </linearGradient>
    <linearGradient id="paint1_linear_142_2185" x1="14.2464" y1="10.9079" x2="38.8936" y2="24.5761" gradientUnits="userSpaceOnUse">
      <stop stop-color="#E75510"/>
      <stop offset="1" stop-color="#E0149B"/>
    </linearGradient>
  </defs>
</svg>
</div>
</div>
    </div>
    </div>
            <div class="card login-right-card mt-4 shadow">
                <div class="card-body">
                    <div class="login-body">
                        <form >
                       <div class="email">
                        <label for="email">Email / Mobile Number</label>
                        <input type="email" class="form-control" id="email" placeholder="exmple:employee@tutorprovide.com">
                       </div>
                       <div class="password">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="example: employee@+%123">
                       </div>
                       <div class="login-footer">
                        <div class="row">
                            <div class="col-5 login-footer-left">
                                <div class="row">
                                    <div class="col-1">
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-11">
                                        <span>Remember me </span><strong>Forget password?</strong> 
                                    </div>
                                </div>
                              
                            </div>
                            <div class="col-7 login-footer-right">
                              If You are not registered please register first <router-link :to="{ name: 'registration' }"> Register .</router-link>
                            </div>
                        </div>
                        <!-- login buttons -->
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                     <button class="btn btn-google"><img src="../../images/assets/google.png" alt=""><span>Continue with Google</span></button>
                     <button class="btn btn-fb">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M10.7012 0.0245991C9.13047 0.155102 7.8068 0.513983 6.47848 1.16649C4.63747 2.07068 3.06679 3.43629 1.95752 5.10485C0.918164 6.66622 0.340227 8.20894 0.0605795 10.1618C-0.037297 10.8609 -0.013993 12.5481 0.111848 13.3498C0.508015 15.9179 1.59398 18.0945 3.37906 19.8795C4.88449 21.3896 6.62762 22.3637 8.77159 22.9044C9.06988 22.9836 9.83424 23.1421 9.89483 23.1421C9.8995 23.1421 9.90416 21.2638 9.90416 18.9707V14.7993H8.59914H7.29412V13.1913V11.5833H8.59914H9.90416V10.0266C9.90416 8.84746 9.9228 8.37206 9.97407 8.05979C10.2957 6.1815 11.4842 4.98833 13.3485 4.66208C14.0336 4.5409 15.4552 4.58285 16.8114 4.75996L17.0352 4.79258V6.2048V7.61702L15.6975 7.631C14.4391 7.64498 14.3412 7.6543 14.0942 7.75218C13.726 7.90133 13.479 8.1297 13.2972 8.49791L13.1434 8.81018L13.1294 10.1944L13.1154 11.5833H14.8213H16.5318L16.5038 11.7138C16.4898 11.7838 16.3826 12.4596 16.2661 13.2146C16.1496 13.9697 16.0424 14.6362 16.0284 14.6921L16.0098 14.7993H14.8912H13.7726V18.9753C13.7726 22.9277 13.7773 23.1468 13.8565 23.1234C13.8984 23.1095 14.001 23.0862 14.0756 23.0675C15.5857 22.7366 17.3568 21.8744 18.6664 20.8257C20.307 19.5207 21.6773 17.647 22.3718 15.7594C22.5908 15.1582 22.8751 14.0396 22.9823 13.3311C23.1175 12.4736 23.1035 10.5673 22.9637 9.747C22.6421 7.90599 22.0408 6.40987 21.0201 4.94173C19.3469 2.54142 16.7555 0.821594 13.9264 0.234335C12.9943 0.0432434 11.5914 -0.0499725 10.7012 0.0245991Z" fill="white"/>
                    </svg><span>
                        Continue with Facebook
                    </span> </button>
                    </div>
                </div>
                    </form>
                    </div>

                </div>
            </div>

            </div>
        </div>
    </div>
</div>

</section>
</template>
<script>
import Header from '@/components/Header.vue';
    export default {
    components: {
    Header,
  },

}
</script>