import { createWebHistory, createRouter } from 'vue-router';

const Home = () => import('../components/Home.vue');
const About = () => import('../components/About.vue');
const Login = () => import('../components/Login.vue');
const Registration = () => import('../components/Registration.vue');
const AdminDashboard = () => import('../components/admin/Dashboard.vue');
const AdminLogin = () => import('../components/admin/Login.vue');
const TutionList = () => import('../components/admin/TutionList.vue');
const TutorList = () => import('../components/admin/TutorList.vue');
const TutorProfile = () => import('../components/admin/TutorProfile.vue');
const GuardianList = () => import('../components/admin/GuardianList.vue');
const GuardianProfile = () => import('../components/admin/GuardianProfile.vue');
const UserList = () => import('../components/admin/UserList.vue');

const DivistionList = () => import('../components/admin/address_configuration/divisions/List.vue');
const DistrictList = () => import('../components/admin/address_configuration/districts/List.vue');
const AreaList = () => import('../components/admin/address_configuration/areas/List.vue');
const LivingLocationList = () => import('../components/admin/address_configuration/living_locations/List.vue');
const TutionTypeList = () => import('../components/admin/tution_configuration/tution_types/List.vue');
const CategoryList = () => import('../components/admin/tution_configuration/tution_category/List.vue');
const CategoryEdit = () => import('../components/admin/tution_configuration/tution_category/Edit.vue');
const ClassList = () => import('../components/admin/tution_configuration/preferable_class/List.vue');
const SubjectList = () => import('../components/admin/tution_configuration/preferable_subject/List.vue');
const AboutUs = () => import('../components/admin/website_configuration/AboutUs.vue');
const EmployeeDashboard = () => import('../components/employee/Dashboard.vue');
const EmployeeLogin = () => import('../components/employee/Login.vue');

const routes = [
  {
    name: "home",
    path: '/',
    component: Home,
    meta: {
      title: `Home`
    }
  },

  {
    name: "about",
    path: '/about',
    component: About,
    meta: {
      title: `About`
    }
  },

  {
    name: "login",
    path: '/login',
    component: Login,
    meta: {
      title: `Login`
    }
  },
  {
    name: "registration",
    path: '/registration',
    component: Registration,
    meta: {
      title: `Registration`
    }
  },


 

  // Super Admin

  {
    path: '/admin',
    children: [
      {
        name: "admin_dashboard",
        path: '', // Empty path for the default child route
        component: AdminDashboard,
        meta: {
          title: `Super Admin Dashboard`
        }
      },
      {
        name: "tution_list",
        path: 'tution_list',
        component: TutionList,
        meta: {
          title: `Tution List`
        }
      },
      {
        name: "tutor_list",
        path: 'tutor_list',
        component: TutorList,
        meta: {
          title: `Tutor List`
        }
      },

      {
        name: "tutor_profile",
        path: 'tutor_profile',
        component: TutorProfile,
        meta: {
          title: `Tutor Profile`
        }
      },

      {
        name: "guardian_list",
        path: 'guardian_list',
        component: GuardianList,
        meta: {
          title: `Guardian List`
        }
      },

      {
        name: "guardian_profile",
        path: 'guardian_profile',
        component: GuardianProfile,
        meta: {
          title: `Guardian Profile`
        }
      },
      {
        name: "user_list",
        path: 'user_list',
        component: UserList,
        meta: {
          title: `User List`
        }
      },

      {
        name: "divisions",
        path: 'divisions',
        component: DivistionList,
        meta: {
          title: `Divistion List`
        }
      },

      {
        name: "districts",
        path: 'districts',
        component: DistrictList,
        meta: {
          title: `District List`
        }
      },

      {
        name: "areas",
        path: 'areas',
        component: AreaList,
        meta: {
          title: `Area List`
        }
      },

      {
        name: "living_locations",
        path: 'living_locations',
        component: LivingLocationList,
        meta: {
          title: ` Living Location List`
        }
      },
      
      {
        name: "typeList",
        path: 'tution_types',
        component: TutionTypeList,
        meta: {
          title: ` Tution Type List`
        }
      },

      {
        name: 'categoryList',
        path: 'tution_category',
        component: CategoryList,
        meta: {
          title: `Tution Category List`
        }
    },
    {
        name: 'categoryEdit',
        path: 'tution_category/:id/edit',
        component: CategoryEdit
    },

    {
      name: 'classList',
      path: 'preferable_class',
      component: ClassList,
      meta: {
        title: `Preferable Class List`
      }
  },

  {
    name: 'subjectList',
    path: 'preferable_subject',
    component: SubjectList,
    meta: {
      title: `Preferable Subject List`
    }
  },

  {
    name: "aboutUs",
    path: 'about-us',
    component: AboutUs,
    meta: {
      title: `About Us`
    }
  },



      {
        name: "admin_login",
        path: 'login', // Child route path
        component: AdminLogin,
        meta: {
          title: `Super Admin Login`
        }
      },
  
    ]
  },

  // Employee parent route

  {
    path: '/employee',
    children: [
      {
        name: "employee_dashboard",
        path: '', 
        component: EmployeeDashboard,
        meta: {
          title: `Dashboard`
        }
      },
      {
        name: "employee_login",
        path: 'login', 
        component: EmployeeLogin,
        meta: {
          title: `Employee Login`
        }
      },
    ]
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
