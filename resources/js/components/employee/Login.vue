<template>
    <section class="employee-login-asset">
        <div class="container employee-login">
            <div class="emloyee-login-logo">
                <router-link :to="{ name: 'home' }"  target="_blank"><img src="public/../../images/upload_images/logo/logo2.png" alt="Site Logo" srcset=""></router-link>  
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="employee-login-header">
                       <div class="row">
                        <div class="col-8">
                         <div class="employee-login-header-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="166" height="40" viewBox="0 0 166 40" fill="none">
                            <path d="M0 6.36592C0 2.85012 2.85012 0 6.36592 0L159.397 0C163.36 0 166.36 3.58301 165.664 7.48484L159.724 40.753C159.182 43.7891 156.541 46 153.457 46H6.36591C2.85011 46 0 43.1499 0 39.6341V6.36592Z" fill="url(#paint0_linear_142_2150)"/>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#fff" font-family="Arial" style="font-size: 30px; font-weight: 700;">Employee</text>
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
                        <form >
                       <div class="email">
                        <label for="email">Email / Mobile Number</label>
                        <input type="email" class="form-control" id="email" placeholder="exmple:employee@tutorprovide.com">
                       </div>
                       <div class="password">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="example: employee@+%123">
                       </div>
                       <div class="employee-login-footer">
                        <div class="row">
                            <div class="col-9">
                                <p>Welcome back to your  <span>Workspace</span></p>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">Sign In</button>
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

</script>

<style>

</style>


