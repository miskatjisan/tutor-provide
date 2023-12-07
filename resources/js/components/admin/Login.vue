<template>
    <section class="employee-login-asset">

<div class="container-fluid">
            <div id="liveAlertPlaceholder" class="text-center mt-3">

        <div v-if="validationErrors.length > 0" class="error-message">
            <div class="card" style="width: 30%; position: absolute; right: 30px;">
            <div class="card-body">

            <div class="warning-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68" fill="none">
            <path d="M31.3838 26.8838C31.3838 25.7532 32.2683 24.8268 33.3858 24.764H33.507C34.6775 24.764 35.6268 25.7158 35.6268 26.8872V52.5795C35.6049 53.1266 35.3725 53.6442 34.9779 54.0241C34.5823 54.405 34.0545 54.6178 33.5053 54.6178C32.9561 54.6178 32.4283 54.405 32.0327 54.0241C31.6381 53.6442 31.4057 53.1266 31.3838 52.5795V26.8838ZM34 0.25C52.6401 0.25 67.75 15.3599 67.75 34C67.75 52.6401 52.6401 67.75 34 67.75C15.3599 67.75 0.25 52.6401 0.25 34C0.25 15.3599 15.3599 0.25 34 0.25ZM34 4.493C26.1743 4.493 18.669 7.60176 13.1354 13.1354C7.60176 18.669 4.493 26.1743 4.493 34C4.493 41.8257 7.60176 49.331 13.1354 54.8646C18.669 60.3982 26.1743 63.507 34 63.507C41.8257 63.507 49.331 60.3982 54.8646 54.8646C60.3982 49.331 63.507 41.8257 63.507 34C63.507 26.1743 60.3982 18.669 54.8646 13.1354C49.331 7.60176 41.8257 4.493 34 4.493ZM33.6022 15.278C34.3745 15.278 35.1152 15.5848 35.6613 16.1309C36.2074 16.677 36.5142 17.4177 36.5142 18.19C36.5142 18.9623 36.2074 19.703 35.6613 20.2491C35.1152 20.7952 34.3745 21.102 33.6022 21.102C32.8299 21.102 32.0892 20.7952 31.5431 20.2491C30.997 19.703 30.6902 18.9623 30.6902 18.19C30.6902 17.4177 30.997 16.677 31.5431 16.1309C32.0892 15.5848 32.8299 15.278 33.6022 15.278Z" fill="#EB762A" stroke="white" stroke-width="0.5"/>
            </svg>
            </div> 
            <h3 class="mt-3">Do Make Any Error?</h3> 
            <p class="mt-3 fs-6" v-for="error in validationErrors" :key="error">{{ error }}</p>
            <button type="button" class="btn btn-outline-danger" @click="closeAlert">Close</button>
        </div>
    </div>
         </div>
            </div>
        </div>

        <div class="container employee-login">
            <div class="emloyee-login-logo">
                <router-link :to="{ name: 'home' }"  target="_blank"><img src="../../../images/upload_images/logo/logo2.png" alt="Site Logo" srcset=""></router-link>  
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="employee-login-header">
                       <div class="row">
                        <div class="col-8">
                         <div class="employee-login-header-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="166" height="40" viewBox="0 0 166 40" fill="none">
                            <path d="M0 6.36592C0 2.85012 2.85012 0 6.36592 0L159.397 0C163.36 0 166.36 3.58301 165.664 7.48484L159.724 40.753C159.182 43.7891 156.541 46 153.457 46H6.36591C2.85011 46 0 43.1499 0 39.6341V6.36592Z" fill="url(#paint0_linear_142_2150)"/>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#fff" font-family="Arial" style="font-size: 30px; font-weight: 700;">Admin</text>
                            <defs>
                                <linearGradient id="paint0_linear_142_2150" x1="40.8222" y1="-13.4166" x2="198.631" y2="217.646" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E75510"/>
                                    <stop offset="1" stop-color="#E0149B"/>
                                </linearGradient>
                            </defs>
                        </svg>


                                <span>Account</span>
                            </div>
                        </div>
                            <div class="col-4">
                            <div class="employee-login-header-right">
                            Sign in to <span>Tutor Provide</span>
                            </div>
                            </div>
                       </div>
                    </div>

                    <div class="employee-login-body">
                        
                        <form @submit.prevent="login">
                       <div class="email">
                        <label for="email">Email / Mobile Number</label>
                        <input type="email" v-model="email" class="form-control" id="email" placeholder="exmple:employee@tutorprovide.com" :class="{ 'is-invalid': validationErrors.includes('email') }">
                       </div>
                       <div class="password">
                        <label for="password">Password</label>
                        <input type="password" v-model="password" class="form-control" id="password" placeholder="example: employee@+%123" :class="{ 'is-invalid': validationErrors.includes('password') }">
                       </div>
                       <div class="employee-login-footer">
                        <div class="row">
                            <div class="col-9">
                                <p>Welcome back to your  <span>Workspace</span></p>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary" id="liveAlertBtn">Sign In</button>
                            </div>
                        </div>
                     
                    </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    
  data() {
    return {
      email: "",
      password: "",
      validationErrors: [],
    };
  },
  methods: {
    closeAlert() {
      this.validationErrors = [];
    },


    async login() {
    try {
        const response = await this.$axios.post("/api/login", {
            email: this.email,
            password: this.password,
        });
        
        this.$router.push({ name: 'admin_dashboard' });

        // Assuming the response contains a 'message' key for success
        console.log(response.data.message);
      

        // Redirect or perform any other action on successful login
    } catch (error) {
        if (error.response.status === 401) {
            this.validationErrors = ['Invalid credentials'];
        } else if (error.response.status === 422) {
            this.validationErrors = Object.values(error.response.data.errors).flat();
        } else {
            this.validationErrors = ['An error occurred. Please try again.'];
        }

        console.error("Error during login:", error.response.data.message);
    }
},

  },
};

</script>
<style>
.is-invalid {
  border-color: red !important;
}
.error-message p{
  color: red !important;
}

</style>


