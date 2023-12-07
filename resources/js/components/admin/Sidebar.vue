<template>
  
<aside class="left-sidebar with-vertical">

<div class="brand-logo d-flex align-items-center justify-content-between">
  <a href="index.html" class="text-nowrap logo-img">
    <img style="width:170px;height: 50px;" src="../../../images/upload_images/logo/logo.png" alt="" srcset="">
  </a>
</div>

<div class="scroll-sidebar" data-simplebar>
  <nav class="sidebar-nav">
    <ul id="sidebarnav" class="mb-0">

      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
        <router-link class="sidebar-link primary-hover-bg" :to="{ name: 'admin_dashboard' }" aria-expanded="false">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
    <g clip-path="url(#clip0_967_238)">
      <path d="M1.58325 4.74998C1.58325 3.2572 1.58325 2.51081 2.047 2.04706C2.51074 1.58331 3.25714 1.58331 4.74992 1.58331C6.2427 1.58331 6.98909 1.58331 7.45284 2.04706C7.91659 2.51081 7.91659 3.2572 7.91659 4.74998V6.33331C7.91659 7.8261 7.91659 8.57246 7.45284 9.03622C6.98909 9.49998 6.2427 9.49998 4.74992 9.49998C3.25714 9.49998 2.51074 9.49998 2.047 9.03622C1.58325 8.57246 1.58325 7.8261 1.58325 6.33331V4.74998Z" stroke="#EB762A" stroke-width="1.5"/>
      <path d="M1.58325 15.0417C1.58325 14.3039 1.58325 13.9351 1.70378 13.6441C1.86448 13.2562 2.17271 12.9479 2.56067 12.7872C2.85164 12.6667 3.22051 12.6667 3.95825 12.6667H5.54159C6.27932 12.6667 6.64819 12.6667 6.93917 12.7872C7.32713 12.9479 7.63536 13.2562 7.79606 13.6441C7.91659 13.9351 7.91659 14.3039 7.91659 15.0417C7.91659 15.7794 7.91659 16.1483 7.79606 16.4393C7.63536 16.8272 7.32713 17.1355 6.93917 17.2962C6.64819 17.4167 6.27932 17.4167 5.54159 17.4167H3.95825C3.22051 17.4167 2.85164 17.4167 2.56067 17.2962C2.17271 17.1355 1.86448 16.8272 1.70378 16.4393C1.58325 16.1483 1.58325 15.7794 1.58325 15.0417Z" stroke="#EB762A" stroke-width="1.5"/>
      <path d="M11.0833 12.6667C11.0833 11.1739 11.0833 10.4275 11.547 9.96376C12.0108 9.5 12.7572 9.5 14.2499 9.5C15.7427 9.5 16.4891 9.5 16.9528 9.96376C17.4166 10.4275 17.4166 11.1739 17.4166 12.6667V14.25C17.4166 15.7428 17.4166 16.4891 16.9528 16.9529C16.4891 17.4167 15.7427 17.4167 14.2499 17.4167C12.7572 17.4167 12.0108 17.4167 11.547 16.9529C11.0833 16.4891 11.0833 15.7428 11.0833 14.25V12.6667Z" stroke="#EB762A" stroke-width="1.5"/>
      <path d="M11.0833 3.95831C11.0833 3.22057 11.0833 2.85171 11.2037 2.56073C11.3645 2.17277 11.6727 1.86454 12.0606 1.70384C12.3517 1.58331 12.7205 1.58331 13.4583 1.58331H15.0416C15.7793 1.58331 16.1482 1.58331 16.4392 1.70384C16.8271 1.86454 17.1354 2.17277 17.2961 2.56073C17.4166 2.85171 17.4166 3.22057 17.4166 3.95831C17.4166 4.69605 17.4166 5.06492 17.2961 5.3559C17.1354 5.74385 16.8271 6.05209 16.4392 6.21279C16.1482 6.33331 15.7793 6.33331 15.0416 6.33331H13.4583C12.7205 6.33331 12.3517 6.33331 12.0606 6.21279C11.6727 6.05209 11.3645 5.74385 11.2037 5.3559C11.0833 5.06492 11.0833 4.69605 11.0833 3.95831Z" stroke="#EB762A" stroke-width="1.5"/>
    </g>
  <defs>
    <clipPath id="clip0_967_238">
      <rect width="19" height="19" fill="white"/>
    </clipPath>
  </defs>
</svg></span>
          <span class="hide-menu fs-5 ps-4">Dashboard</span>
        </router-link>
      </li>

      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Administration</span>
      </li>

      <li class="sidebar-item">
        <a class="btn btn-toggle collapsed sidebar-link has-arrow success-hover-bg" data-bs-toggle="collapse" data-bs-target="#administration-collapse" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Tution & Profile</span>
        </a>

        <ul class="btn-toggle-nav collapse first-level" id="administration-collapse" aria-expanded="false">
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'tution_list' }">
              <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M1.66675 9.58335C1.66675 5.8514 1.66675 3.98543 2.82611 2.82605C3.98549 1.66669 5.85146 1.66669 9.58341 1.66669C13.3153 1.66669 15.1813 1.66669 16.3407 2.82605C17.5001 3.98543 17.5001 5.8514 17.5001 9.58335C17.5001 13.3153 17.5001 15.1813 16.3407 16.3407C15.1813 17.5 13.3153 17.5 9.58341 17.5C5.85146 17.5 3.98549 17.5 2.82611 16.3407C1.66675 15.1813 1.66675 13.3153 1.66675 9.58335Z" stroke="#EB762A" stroke-width="1.5"/>
              <path d="M7.08325 9.58331H12.0833" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.91675 12.5H11.2501" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.25 6.66669H12.9167" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Tution List</span>
            </router-link>
          </li>
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'tutor_list' }">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" viewBox="0 0 25 30" fill="none">
  <path d="M12.5 7.29376L12.2555 7.38282L2.48984 11.3091L0.269531 12.1875L1.5625 12.6844V20.8875C1.09609 21.2128 0.78125 21.8063 0.78125 22.5C0.78125 22.9973 0.94587 23.4742 1.2389 23.8258C1.53192 24.1775 1.92935 24.375 2.34375 24.375C2.75815 24.375 3.15558 24.1775 3.4486 23.8258C3.74163 23.4742 3.90625 22.9973 3.90625 22.5C3.90625 21.8063 3.59141 21.2128 3.125 20.8875V13.3313L4.6875 13.9453V18.75C4.6875 19.5188 5.07812 20.1563 5.54219 20.5969C6.00625 21.0347 6.58281 21.3441 7.275 21.6216C8.66094 22.1747 10.4875 22.5 12.5 22.5C14.5125 22.5 16.3391 22.1756 17.725 21.6206C18.4172 21.3441 18.9937 21.0347 19.4578 20.5959C19.9219 20.1563 20.3125 19.5188 20.3125 18.75V13.9453L22.5102 13.0659L24.7305 12.1875L22.5094 11.3081L12.7437 7.38282L12.5 7.29376ZM12.5 9.25782L19.8242 12.1875L12.5 15.1172L5.17578 12.1875L12.5 9.25782ZM6.25 14.5903L12.2562 16.9922L12.5 17.0803L12.7445 16.9913L18.75 14.5894V18.75C18.75 18.7594 18.7531 18.8681 18.5055 19.1016C18.2586 19.3359 17.8156 19.6313 17.2359 19.8638C16.0781 20.3259 14.3711 20.625 12.5 20.625C10.6289 20.625 8.92187 20.3269 7.76328 19.8628C7.18516 19.6313 6.74141 19.335 6.49453 19.1016C6.24609 18.8672 6.25 18.7594 6.25 18.75V14.5903Z" fill="#EB762A"/>
</svg></span>
              <span class="hide-menu ps-3 fs-5">Tutor List</span>
            </router-link>
          </li>
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'guardian_list' }">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <g clip-path="url(#clip0_967_207)">
                  <path d="M12.75 14.4692V12.9461C12.75 12.1383 12.4339 11.3635 11.8713 10.7922C11.3087 10.2209 10.5456 9.89999 9.75 9.89999H3.75C2.95435 9.89999 2.19129 10.2209 1.62868 10.7922C1.06607 11.3635 0.75 12.1383 0.75 12.9461L0.75 14.4692" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.75 6.85384C8.40685 6.85384 9.75 5.49003 9.75 3.80769C9.75 2.12535 8.40685 0.761536 6.75 0.761536C5.09315 0.761536 3.75 2.12535 3.75 3.80769C3.75 5.49003 5.09315 6.85384 6.75 6.85384Z" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.25 14.4692V12.9462C17.2495 12.2712 17.0283 11.6156 16.621 11.0821C16.2138 10.5487 15.6436 10.1677 15 9.999M12 0.860535C12.6453 1.0283 13.2173 1.40938 13.6257 1.94368C14.0342 2.47798 14.2559 3.13512 14.2559 3.8115C14.2559 4.48787 14.0342 5.14501 13.6257 5.67931C13.2173 6.21362 12.6453 6.59469 12 6.76246" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_967_207">
                    <rect width="18" height="15.2308" fill="white"/>
                  </clipPath>
                </defs>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Guardian List</span>
            </router-link>
          </li>
         
        </ul>
        
      </li>




      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Address Configuration</span>
      </li>

      <li class="sidebar-item">
        <a class="btn btn-toggle collapsed sidebar-link has-arrow success-hover-bg" data-bs-toggle="collapse" data-bs-target="#addressConfigaration-collapse" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Location</span>
        </a>

        <ul class="btn-toggle-nav collapse first-level" id="addressConfigaration-collapse" aria-expanded="false">
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'divisions' }">
              <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M1.66675 9.58335C1.66675 5.8514 1.66675 3.98543 2.82611 2.82605C3.98549 1.66669 5.85146 1.66669 9.58341 1.66669C13.3153 1.66669 15.1813 1.66669 16.3407 2.82605C17.5001 3.98543 17.5001 5.8514 17.5001 9.58335C17.5001 13.3153 17.5001 15.1813 16.3407 16.3407C15.1813 17.5 13.3153 17.5 9.58341 17.5C5.85146 17.5 3.98549 17.5 2.82611 16.3407C1.66675 15.1813 1.66675 13.3153 1.66675 9.58335Z" stroke="#EB762A" stroke-width="1.5"/>
              <path d="M7.08325 9.58331H12.0833" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.91675 12.5H11.2501" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.25 6.66669H12.9167" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Divisions</span>
            </router-link>
          </li>
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'districts' }">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" viewBox="0 0 25 30" fill="none">
  <path d="M12.5 7.29376L12.2555 7.38282L2.48984 11.3091L0.269531 12.1875L1.5625 12.6844V20.8875C1.09609 21.2128 0.78125 21.8063 0.78125 22.5C0.78125 22.9973 0.94587 23.4742 1.2389 23.8258C1.53192 24.1775 1.92935 24.375 2.34375 24.375C2.75815 24.375 3.15558 24.1775 3.4486 23.8258C3.74163 23.4742 3.90625 22.9973 3.90625 22.5C3.90625 21.8063 3.59141 21.2128 3.125 20.8875V13.3313L4.6875 13.9453V18.75C4.6875 19.5188 5.07812 20.1563 5.54219 20.5969C6.00625 21.0347 6.58281 21.3441 7.275 21.6216C8.66094 22.1747 10.4875 22.5 12.5 22.5C14.5125 22.5 16.3391 22.1756 17.725 21.6206C18.4172 21.3441 18.9937 21.0347 19.4578 20.5959C19.9219 20.1563 20.3125 19.5188 20.3125 18.75V13.9453L22.5102 13.0659L24.7305 12.1875L22.5094 11.3081L12.7437 7.38282L12.5 7.29376ZM12.5 9.25782L19.8242 12.1875L12.5 15.1172L5.17578 12.1875L12.5 9.25782ZM6.25 14.5903L12.2562 16.9922L12.5 17.0803L12.7445 16.9913L18.75 14.5894V18.75C18.75 18.7594 18.7531 18.8681 18.5055 19.1016C18.2586 19.3359 17.8156 19.6313 17.2359 19.8638C16.0781 20.3259 14.3711 20.625 12.5 20.625C10.6289 20.625 8.92187 20.3269 7.76328 19.8628C7.18516 19.6313 6.74141 19.335 6.49453 19.1016C6.24609 18.8672 6.25 18.7594 6.25 18.75V14.5903Z" fill="#EB762A"/>
</svg></span>
              <span class="hide-menu ps-3 fs-5">District</span>
            </router-link>
          </li>
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'areas' }">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <g clip-path="url(#clip0_967_207)">
                  <path d="M12.75 14.4692V12.9461C12.75 12.1383 12.4339 11.3635 11.8713 10.7922C11.3087 10.2209 10.5456 9.89999 9.75 9.89999H3.75C2.95435 9.89999 2.19129 10.2209 1.62868 10.7922C1.06607 11.3635 0.75 12.1383 0.75 12.9461L0.75 14.4692" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.75 6.85384C8.40685 6.85384 9.75 5.49003 9.75 3.80769C9.75 2.12535 8.40685 0.761536 6.75 0.761536C5.09315 0.761536 3.75 2.12535 3.75 3.80769C3.75 5.49003 5.09315 6.85384 6.75 6.85384Z" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.25 14.4692V12.9462C17.2495 12.2712 17.0283 11.6156 16.621 11.0821C16.2138 10.5487 15.6436 10.1677 15 9.999M12 0.860535C12.6453 1.0283 13.2173 1.40938 13.6257 1.94368C14.0342 2.47798 14.2559 3.13512 14.2559 3.8115C14.2559 4.48787 14.0342 5.14501 13.6257 5.67931C13.2173 6.21362 12.6453 6.59469 12 6.76246" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_967_207">
                    <rect width="18" height="15.2308" fill="white"/>
                  </clipPath>
                </defs>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Areas</span>
            </router-link>
          </li>

          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'living_locations' }">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <g clip-path="url(#clip0_967_207)">
                  <path d="M12.75 14.4692V12.9461C12.75 12.1383 12.4339 11.3635 11.8713 10.7922C11.3087 10.2209 10.5456 9.89999 9.75 9.89999H3.75C2.95435 9.89999 2.19129 10.2209 1.62868 10.7922C1.06607 11.3635 0.75 12.1383 0.75 12.9461L0.75 14.4692" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.75 6.85384C8.40685 6.85384 9.75 5.49003 9.75 3.80769C9.75 2.12535 8.40685 0.761536 6.75 0.761536C5.09315 0.761536 3.75 2.12535 3.75 3.80769C3.75 5.49003 5.09315 6.85384 6.75 6.85384Z" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.25 14.4692V12.9462C17.2495 12.2712 17.0283 11.6156 16.621 11.0821C16.2138 10.5487 15.6436 10.1677 15 9.999M12 0.860535C12.6453 1.0283 13.2173 1.40938 13.6257 1.94368C14.0342 2.47798 14.2559 3.13512 14.2559 3.8115C14.2559 4.48787 14.0342 5.14501 13.6257 5.67931C13.2173 6.21362 12.6453 6.59469 12 6.76246" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_967_207">
                    <rect width="18" height="15.2308" fill="white"/>
                  </clipPath>
                </defs>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Living Locations</span>
            </router-link>
          </li>
         
        </ul>
        
      </li>



      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Tution Configuration</span>
      </li>

      <li class="sidebar-item">
        <a class="btn btn-toggle collapsed sidebar-link has-arrow success-hover-bg" data-bs-toggle="collapse" data-bs-target="#tutionConfigaration-collapse" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Tution</span>
        </a>

        <ul class="btn-toggle-nav collapse first-level" id="tutionConfigaration-collapse" aria-expanded="false">
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'typeList' }">
              <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M1.66675 9.58335C1.66675 5.8514 1.66675 3.98543 2.82611 2.82605C3.98549 1.66669 5.85146 1.66669 9.58341 1.66669C13.3153 1.66669 15.1813 1.66669 16.3407 2.82605C17.5001 3.98543 17.5001 5.8514 17.5001 9.58335C17.5001 13.3153 17.5001 15.1813 16.3407 16.3407C15.1813 17.5 13.3153 17.5 9.58341 17.5C5.85146 17.5 3.98549 17.5 2.82611 16.3407C1.66675 15.1813 1.66675 13.3153 1.66675 9.58335Z" stroke="#EB762A" stroke-width="1.5"/>
              <path d="M7.08325 9.58331H12.0833" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.91675 12.5H11.2501" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.25 6.66669H12.9167" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Types</span>
            </router-link>
          </li>
          <li class="sidebar-item">
        <router-link class="sidebar-link" :to="{ name: 'categoryList' }">
        <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" viewBox="0 0 25 30" fill="none">
  <path d="M12.5 7.29376L12.2555 7.38282L2.48984 11.3091L0.269531 12.1875L1.5625 12.6844V20.8875C1.09609 21.2128 0.78125 21.8063 0.78125 22.5C0.78125 22.9973 0.94587 23.4742 1.2389 23.8258C1.53192 24.1775 1.92935 24.375 2.34375 24.375C2.75815 24.375 3.15558 24.1775 3.4486 23.8258C3.74163 23.4742 3.90625 22.9973 3.90625 22.5C3.90625 21.8063 3.59141 21.2128 3.125 20.8875V13.3313L4.6875 13.9453V18.75C4.6875 19.5188 5.07812 20.1563 5.54219 20.5969C6.00625 21.0347 6.58281 21.3441 7.275 21.6216C8.66094 22.1747 10.4875 22.5 12.5 22.5C14.5125 22.5 16.3391 22.1756 17.725 21.6206C18.4172 21.3441 18.9937 21.0347 19.4578 20.5959C19.9219 20.1563 20.3125 19.5188 20.3125 18.75V13.9453L22.5102 13.0659L24.7305 12.1875L22.5094 11.3081L12.7437 7.38282L12.5 7.29376ZM12.5 9.25782L19.8242 12.1875L12.5 15.1172L5.17578 12.1875L12.5 9.25782ZM6.25 14.5903L12.2562 16.9922L12.5 17.0803L12.7445 16.9913L18.75 14.5894V18.75C18.75 18.7594 18.7531 18.8681 18.5055 19.1016C18.2586 19.3359 17.8156 19.6313 17.2359 19.8638C16.0781 20.3259 14.3711 20.625 12.5 20.625C10.6289 20.625 8.92187 20.3269 7.76328 19.8628C7.18516 19.6313 6.74141 19.335 6.49453 19.1016C6.24609 18.8672 6.25 18.7594 6.25 18.75V14.5903Z" fill="#EB762A"/>
  </svg></span>
              <span class="hide-menu ps-3 fs-5">Categories</span>
            </router-link>
          </li>
          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'classList' }">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <g clip-path="url(#clip0_967_207)">
                  <path d="M12.75 14.4692V12.9461C12.75 12.1383 12.4339 11.3635 11.8713 10.7922C11.3087 10.2209 10.5456 9.89999 9.75 9.89999H3.75C2.95435 9.89999 2.19129 10.2209 1.62868 10.7922C1.06607 11.3635 0.75 12.1383 0.75 12.9461L0.75 14.4692" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.75 6.85384C8.40685 6.85384 9.75 5.49003 9.75 3.80769C9.75 2.12535 8.40685 0.761536 6.75 0.761536C5.09315 0.761536 3.75 2.12535 3.75 3.80769C3.75 5.49003 5.09315 6.85384 6.75 6.85384Z" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.25 14.4692V12.9462C17.2495 12.2712 17.0283 11.6156 16.621 11.0821C16.2138 10.5487 15.6436 10.1677 15 9.999M12 0.860535C12.6453 1.0283 13.2173 1.40938 13.6257 1.94368C14.0342 2.47798 14.2559 3.13512 14.2559 3.8115C14.2559 4.48787 14.0342 5.14501 13.6257 5.67931C13.2173 6.21362 12.6453 6.59469 12 6.76246" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_967_207">
                    <rect width="18" height="15.2308" fill="white"/>
                  </clipPath>
                </defs>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Preferable Classes</span>
            </router-link>
          </li>

          <li class="sidebar-item">
            <router-link class="sidebar-link" :to="{ name: 'subjectList' }">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <g clip-path="url(#clip0_967_207)">
                  <path d="M12.75 14.4692V12.9461C12.75 12.1383 12.4339 11.3635 11.8713 10.7922C11.3087 10.2209 10.5456 9.89999 9.75 9.89999H3.75C2.95435 9.89999 2.19129 10.2209 1.62868 10.7922C1.06607 11.3635 0.75 12.1383 0.75 12.9461L0.75 14.4692" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.75 6.85384C8.40685 6.85384 9.75 5.49003 9.75 3.80769C9.75 2.12535 8.40685 0.761536 6.75 0.761536C5.09315 0.761536 3.75 2.12535 3.75 3.80769C3.75 5.49003 5.09315 6.85384 6.75 6.85384Z" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.25 14.4692V12.9462C17.2495 12.2712 17.0283 11.6156 16.621 11.0821C16.2138 10.5487 15.6436 10.1677 15 9.999M12 0.860535C12.6453 1.0283 13.2173 1.40938 13.6257 1.94368C14.0342 2.47798 14.2559 3.13512 14.2559 3.8115C14.2559 4.48787 14.0342 5.14501 13.6257 5.67931C13.2173 6.21362 12.6453 6.59469 12 6.76246" stroke="#EB762A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_967_207">
                    <rect width="18" height="15.2308" fill="white"/>
                  </clipPath>
                </defs>
              </svg></span>
              <span class="hide-menu ps-3 fs-5">Preferable Subject</span>
            </router-link>
          </li>
         
        </ul>
        
      </li>
    </ul>

  </nav> 
</div>

<div class="blocks-card sidebar-ad mx-3">
  <div class="card bg-primary-subtle mb-0 shadow-none">
    <div class="card-body p-4">
      <div class="d-flex align-items-center justify-content-between gap-3">
        <div class="d-flex align-items-center gap-3">
          <img src="../../../images/admin/users/user-1.jpg" width="45" height="45" class="img-fluid rounded-circle" alt="" />
          <div>
              <!-- Access the 'name' property of the authenticated user -->
              <h5 class="mb-1">{{ authenticatedUser ? authenticatedUser.name : 'Guest' }}</h5>
              <p class="mb-0">Admin</p>
            </div>
          </div>
          <!-- Call the 'logout' method when the logout button is clicked -->
          <a @click="logout" class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Logout">
            <!-- Replace the icon with your actual logout icon -->
            <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
          </a>

      </div>
    </div>
  </div>
</div>

</aside>
</template>

<script>
export default {
  data() {
    return {
      authenticatedUser: null,
    };
  },
  async mounted() {
  // Check if $auth is defined before using it
  if (this.$auth && this.$auth.isAuthenticated) {
    await this.fetchUserData();
  }
},
  methods: {
    async fetchUserData() {
      try {
        // Fetch user data only if the user is authenticated
        const response = await this.$axios.get('/api/user');

        // Update the state with the authenticated user data
        this.authenticatedUser = response.data;
      } catch (error) {
        console.error('Error fetching user data', error);
      }
    },
    async logout() {
      try {
        // Perform the logout action on the backend
        await this.$axios.post('/api/logout');

        // Redirect to the login page
        this.$router.push({ name: 'admin_login' });
      } catch (error) {
        console.error('Error logging out', error);
      }
    },
  },
};

</script>
