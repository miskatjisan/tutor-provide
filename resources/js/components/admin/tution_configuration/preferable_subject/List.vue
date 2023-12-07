<!-- src/components/AreaList.vue -->
  <template>
    <!-- sidebar -->
    <Sidebar />
    <!-- sidebar -->
    
    
    <div class="page-wrapper">
      
      <aside class="left-sidebar with-horizontal">
                <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow primary-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:atom-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dashboard</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="index2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dashboard 2</span>
                    </a>
                  </li>
                </ul>
              </li>
              
              <!-- ============================= -->
              <!-- Apps -->
              <!-- ============================= -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow indigo-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:archive-broken" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="app-calendar.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-kanban.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">kanban</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-chat.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-email.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Email</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-notes.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Notes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-contact.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Contact Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-contact2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Contact List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-invoice.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Invoice</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- PAGES -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">PAGES</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow primary-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:file-text-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- Teachers -->
                  <li class="sidebar-item">
                    <a href="all-teacher.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">All Teachers</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="teacher-details.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Teachers Details</span>
                    </a>
                  </li>
                  <!-- Exams -->
                  <li class="sidebar-item">
                    <a href="exam-schedule.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Exam Schedule</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="exam-result.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Exam Result</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="exam-result-details.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Exam Result Details</span>
                    </a>
                  </li>
                  <!-- students -->
                  <li class="sidebar-item">
                    <a href="all-student.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">All Students</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="student-details.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Students Details</span>
                    </a>
                  </li>
                  <!-- classes -->
                  <li class="sidebar-item">
                    <a href="classes.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Classes</span>
                    </a>
                  </li>
                  <!-- attendance -->
                  <li class="sidebar-item">
                    <a href="attendance.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Attendance</span>
                    </a>
                  </li>
                  <!-- icons -->
                  <li class="sidebar-item">
                    <a href="icon-tabler.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Tabler Icon</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="page-faq.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="page-account-settings.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="page-pricing.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="page-user-profile2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Profile One</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="page-user-profile.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Profile Two</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/landingpage/index.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Landing Page</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- UI -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">UI</span>
              </li>
              <!-- =================== -->
              <!-- UI Elements -->
              <!-- =================== -->
              <li class="sidebar-item mega-dropdown">
                <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:cpu-bolt-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">UI</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-accordian.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Accordian</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-badge.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Badge</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-buttons.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Buttons</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-dropdowns.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dropdowns</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-modals.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Modals</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-tab.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Tab</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-tooltip-popover.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Tooltip & Popover</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-notification.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Notification</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-progressbar.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Progressbar</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-pagination.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Pagination</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-typography.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Typography</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-bootstrap-ui.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Bootstrap UI</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-breadcrumb.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Breadcrumb</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-offcanvas.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Offcanvas</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-lists.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Lists</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-grid.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Grid</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-carousel.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Carousel</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-scrollspy.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Scrollspy</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="ui-spinner.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-link.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Link</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Forms -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <!-- =================== -->
              <!-- Forms -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow success-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:book-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Forms</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- form elements -->
                  <li class="sidebar-item">
                    <a href="form-inputs.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Forms Input</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-input-groups.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Input Groups</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-input-grid.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Input Grid</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-checkbox-radio.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Checkbox & Radios</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-bootstrap-touchspin.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Bootstrap Touchspin</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-bootstrap-switch.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Bootstrap Switch</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-select2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Select2</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-dual-listbox.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dual Listbox</span>
                    </a>
                  </li>
                  <!-- form inputs -->
                  <li class="sidebar-item">
                    <a href="form-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Basic Form</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-horizontal.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Horizontal</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-actions.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Actions</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-row-separator.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Row Separator</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-bordered.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Bordered</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="form-detail.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Detail</span>
                    </a>
                  </li>
        
                  <!-- form wizard -->
                  <li class="sidebar-item">
                    <a href="form-wizard.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Wizard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-quill.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Quill Editor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Tables -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <!-- =================== -->
              <!-- Bootstrap Table -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:bedside-table-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Basic Table</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="table-dark-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dark Basic Table</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="table-sizing.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Sizing Table</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="table-layout-coloured.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Coloured Table Layout</span>
                    </a>
                  </li>
                  <!-- datatable -->
                  <li class="sidebar-item">
                    <a href="table-datatable-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Basic Initialisation</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="table-datatable-api.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">API</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="table-datatable-advanced.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Advanced Initialisation</span>
                    </a>
                  </li>
                </ul>
              </li>
        
              <!-- ============================= -->
              <!-- Auth -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Auth</span>
              </li>
              <!-- =================== -->
              <!-- Auth -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow info-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:lock-keyhole-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Auth</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-error.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Error</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-login.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Login</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-login2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Login</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-register.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Register</span>
                    </a>
                  </li>
                  <!-- datatable -->
                  <li class="sidebar-item">
                    <a href="authentication-register2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Register</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-forgot-password.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Forgot Password</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-forgot-password2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Forgot Password</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-two-steps.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Two Steps</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-two-steps2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Two Steps</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="authentication-maintenance.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Maintenance</span>
                    </a>
                  </li>
                </ul>
              </li>
        
              <!-- ============================= -->
              <!-- Charts -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <!-- =================== -->
              <!-- Apex Chart -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:dropper-minimalistic-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Charts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-apex-line.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Line Chart</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="chart-apex-area.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Area Chart</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="chart-apex-bar.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Bar Chart</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="chart-apex-pie.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Pie Chart</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="chart-apex-radial.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Radial Chart</span>
                    </a>
                  </li>
        
                  <li class="sidebar-item">
                    <a href="chart-apex-radar.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Radar Chart</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- multi level -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
                  <iconify-icon icon="solar:layers-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Multi DD</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-arrow">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 2</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.3</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
        <!-- body wrapper -->
          <div class="body-wrapper">
                <div class="container-fluid">
    
    
              <!-- Button trigger modal -->
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    <form @submit.prevent="submitForm">
          <div class="modal-body">
          <h2>Add Preferable Subject</h2>
  
          <label for="category">Select Category:</label>
    <select class="form-control" v-model="selectedCategory" @change="filterPreferableClasses" required>
      <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.title }}</option>
    </select>

    <label for="preferable_class">Select Preferable Class:</label>
    <select class="form-control" v-model="selectedPreferableClass" required>
      <option v-for="preferable_class in filteredPreferableClasses" :key="preferable_class.id" :value="preferable_class.id">{{ preferable_class.class_name }}</option>
    </select>

    <label for="name">Subject Name:</label>
    <input type="text" class="form-control" v-model="subjectName" required placeholder="Subject Name">
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Add Preferable Subject</button>
          </div>
        </form>
        </div>
      </div>
    </div>
                  
    
      <!-- row -->
      <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card shadow-none position-relative overflow-hidden mb-4 w-100">
          <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">Preferable Subject List</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a class="text-muted text-decoration-none" href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Preferable Subject List</li>
              </ol>
            </nav>
          </div>
        </div>
       
      </div>
      </div>
      
      <!-- table list -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card w-100">
            <div class="card-body">
      
              <div class="container-fluid">
              <div class="row  pb-2">
                <div class="col-lg-12">
                  <div class="row">

                    <div class="col-lg-3">
                    <select class="form-control" v-model="selectedCategory" @change="filterPreferableClasses" required>
                    <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.title }}</option>
                    </select>
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control" v-model="selectedPreferableClass" required>
                      <option v-for="preferable_class in filteredPreferableClasses" :key="preferable_class.id" :value="preferable_class.id">{{ preferable_class.class_name }}</option>
                    </select>
                    </div>
                    <div class="col-lg-3 text-end">
                      <input type="text" class="form-control" placeholder="search Preferable Subject">
                    </div>
      
                    <div class="col-lg-3 mt-3 text-end">
                     
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-weight: bold;font-size:16px">Add Preferable Subject</button>
                      </div>  

                  </div>
                </div> 
               
              </div>
            </div>
      
              <table class="responsive-table table table-hover">
          <thead>
            <tr>
              <th scope="col" style="width: 5%; font-weight: bold">SL</th>
              <th scope="col" style="font-weight: bold">Category Name</th>
              <th scope="col" style="font-weight: bold">Preferable Class Name</th>
              <th scope="col" style="font-weight: bold">Preferable Subject Name</th>
              <th scope="col" style="font-weight: bold">Action</th>
            </tr>
          </thead>
      
          <tbody>
        <tr v-for="(subject, index) in subjects" :key="subject.id">
              <th scope="row">{{ calculateSLNumber(index) }}</th>
              <td data-title="Category Name">{{ subject.category ? subject.category.title : 'No Category' }}</td>
              <td data-title="Preferable Class Name">{{ subject.preferable_class ? subject.preferable_class.class_name : 'No Preferable Class' }}</td>
              <td data-title="Preferable Subject Name">{{ subject.name }}</td>
              <td data-title="Action" class="action">
      
             <button class="btn bg-red" @click="deleteSubject(subject.id)"><i class="fa-regular fa-trash-can text-light" style="font-size: 16px;"></i></button>
      
        <button class="btn btn-primary" @click="editSubject(subject)"><i class="fa-regular fa-pen-to-square text-light" style="font-size: 16px;"></i></button>
      
      </td>
      </tr>
    
      
          </tbody>
        </table>
            </div>
          </div>
        </div>
       </div>
      <!-- end table list -->
      
      
      
      <!-- body wrapper -->
      </div>
      </div>
      <!-- page wrapper -->
      </div>
      </template>

  <script>
  import Sidebar from '@/components/admin/Sidebar.vue';
  export default {
    components: {
    Sidebar,
  },
    data() {
      return {
      subjectName: '',
      selectedCategory: null,
      selectedPreferableClass: null,
      categories: [],  
      preferable_classes: [],
      filteredPreferableClasses: [],
      subjects: [],
      };
    },
    mounted() {
      this.fetchCategories();
      this.fetchPreferableClasses();
      this.fetchSubjects();
    },
    methods: {
      fetchPreferableClasses() {
      this.$axios.get('/api/preferable_classes')
        .then(response => {
          this.preferable_classes = response.data;
        })
        .catch(error => {
          console.error('Error fetching preferable classes', error);
        });
    },
    fetchCategories() {
      this.$axios.get('/api/categories')
        .then(response => {
          this.categories = response.data;
        })
        .catch(error => {
          console.error('Error fetching category', error);
        });
    },

    filterPreferableClasses() {
      this.filteredPreferableClasses = this.preferable_classes.filter(preferable_class => preferable_class.category_id == this.selectedCategory);
    },

    submitForm() {
      this.$axios.post('/api/subjects', { 
        name: this.subjectName,

        category_id: this.selectedCategory,
        preferable_class_id: this.selectedPreferableClass,
      })
        .then(response => {
         
          this.subjectName = '';
          this.selectedCategory = null;
          this.selectedPreferableClass = null;
        // After successful submission, refresh the district array
          this.fetchSubjects();
        })
        .catch(error => {
          console.error('Error adding Subject', error);
        });
    },

    fetchSubjects() {
        this.$axios.get('/api/subjects')
          .then(response => {
            this.subjects = response.data;
          })
          .catch(error => {
            console.error('Error fetching subjects', error);
          });
      },
      editSubject(subject) {
        // Redirect to the edit form or handle editing logic
        console.log('Editing subject:', subject);
      },
      deleteSubject(id) {
        this.$axios.delete(`/api/subjects/${id}`)
          .then(() => {
            this.fetchSubjects(); // Refresh the list after deletion
          })
          .catch(error => {
            console.error('Error deleting subject', error);
          });
      },

      calculateSLNumber(index) {
      return index + 1;
    },


    },
  };
  </script>
  