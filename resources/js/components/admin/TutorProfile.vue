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
  <!-- row -->
  <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card shadow-none position-relative overflow-hidden mb-4 w-100">
      <div class="card-body d-flex align-items-center justify-content-between p-4">
        <h4 class="fw-semibold mb-0">Tution List</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Tution List</li>
          </ol>
        </nav>
      </div>
    </div>
      </div>
  </div>
  
  
  <!-- tutor-Profile -->
    <div class="row">
      <div class="col-lg-12">
          <div class="card w-100">
              <div class="card-body mt-3">

                      <div class="row">
                        <div class="col-lg-4">
                            <div class="row">
                          <div class="col-5 text-end">
                              <img class="tutor_profile_img" src="public/../../images/upload_images/tutors/8.jpg" alt="">
                          </div>
                          <div class="col-6">
                  
                              <h4 class="guardian_list_name mt-2">Tabassum Asha   
                                <svg style="margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                              <g clip-path="url(#clip0_942_237)">
                                <path d="M11.0776 11.0834H11.0832M11.0776 11.0834C10.7144 11.4436 10.0561 11.3538 9.59445 11.3538C9.0278 11.3538 8.75491 11.4647 8.35049 11.8691C8.00615 12.2135 7.5445 12.8334 6.99984 12.8334C6.45518 12.8334 5.99353 12.2135 5.64917 11.8691C5.24475 11.4647 4.97187 11.3538 4.40521 11.3538C3.94357 11.3538 3.28528 11.4436 2.92204 11.0834C2.55589 10.7203 2.646 10.0593 2.646 9.59463C2.646 9.0075 2.5176 8.73754 2.09948 8.3194C1.4775 7.69745 1.16652 7.38642 1.1665 7.00002C1.16651 6.61356 1.47749 6.30259 2.09946 5.68062C2.4727 5.30737 2.646 4.93752 2.646 4.40539C2.646 3.94373 2.55629 3.28544 2.9165 2.92219C3.27959 2.55606 3.9406 2.64617 4.40522 2.64617C4.93733 2.64617 5.30719 2.47289 5.68042 2.09965C6.3024 1.47767 6.61338 1.16669 6.99984 1.16669C7.3863 1.16669 7.69727 1.47767 8.31922 2.09965C8.69238 2.47281 9.06221 2.64617 9.59445 2.64617C10.0561 2.64617 10.7144 2.55646 11.0777 2.91669C11.4438 3.27977 11.3537 3.94078 11.3537 4.40539C11.3537 4.99253 11.4821 5.26249 11.9002 5.68062C12.5222 6.30259 12.8332 6.61356 12.8332 7.00002C12.8332 7.38642 12.5222 7.69745 11.9002 8.3194C11.4821 8.73754 11.3537 9.0075 11.3537 9.59463C11.3537 10.0593 11.4438 10.7203 11.0776 11.0834Z" stroke="#0675C1" stroke-width="1.5"/>
                                <path d="M5.25 7.52088C5.25 7.52088 5.95 7.9011 6.3 8.45835C6.3 8.45835 7.35 6.27085 8.75 5.54169" stroke="#0675C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_942_237">
                                  <rect width="14" height="14" fill="white"/>
                                </clipPath>
                              </defs>
                            </svg>


                              </h4>
                                <div class="guardian_list_since mt-2">
                                    <strong>Since - </strong><span> Nov 12, 2022</span>
                                  </div>
                                  <div class="guardian_list_id mt-2">
                              <strong>Tutor ID - </strong><span>1084</span>
                            </div>
                        <div class="tutor-profile-verify-svg mt-2">
                        <button class="btn bg-yellow m-0" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                            <path d="M3.93749 1.24751e-08C3.84028 -2.0534e-05 3.74472 0.0253392 3.66014 0.073606C3.57555 0.121873 3.50483 0.191399 3.45486 0.275404L0.0798561 5.94216C0.0199446 6.04299 -0.00736679 6.16009 0.00170332 6.27726C0.0107734 6.39442 0.0557761 6.50584 0.130481 6.5961L8.568 16.7963C8.62079 16.86 8.68685 16.9113 8.7615 16.9465C8.83615 16.9818 8.91757 17 9 17C9.08243 17 9.16385 16.9818 9.2385 16.9465C9.31315 16.9113 9.37921 16.86 9.432 16.7963L17.8695 6.5961C17.9442 6.50584 17.9892 6.39442 17.9983 6.27726C18.0074 6.16009 17.9801 6.04299 17.9201 5.94216L14.5451 0.275404C14.4952 0.191399 14.4244 0.121873 14.3399 0.073606C14.2553 0.0253392 14.1597 -2.0534e-05 14.0625 1.24751e-08H3.93749ZM1.55586 5.66675L4.25586 1.13335H6.48224L4.68224 5.66675H1.55586ZM4.67774 6.8001L7.22812 13.4064L1.76398 6.8001H4.67774ZM9 14.8696L5.88487 6.8001H12.1151L9 14.8696ZM5.89387 5.66675L7.69387 1.13335H10.3061L12.1061 5.66675H5.89499H5.89387ZM13.3189 5.66675L11.5189 1.13335H13.7441L16.4441 5.66675H13.3178H13.3189ZM13.3223 6.8001H16.236L10.7719 13.4064L13.3223 6.8001Z" fill="white"/>
                        </svg>
                        Do Premium</button>
                        <span style="margin-left: 5px; background-color: #FFF4ED; padding: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                              <path d="M14.1887 5.51739L10.2215 4.94083L8.4481 1.34551C8.39966 1.24708 8.31998 1.16739 8.22154 1.11895C7.97466 0.997076 7.67466 1.09864 7.55123 1.34551L5.77779 4.94083L1.8106 5.51739C1.70123 5.53301 1.60123 5.58458 1.52466 5.6627C1.4321 5.75784 1.3811 5.88583 1.38286 6.01855C1.38461 6.15127 1.43899 6.27786 1.53404 6.37051L4.40435 9.16895L3.72623 13.1205C3.71032 13.2124 3.7205 13.307 3.75559 13.3934C3.79068 13.4798 3.84929 13.5547 3.92477 13.6095C4.00025 13.6644 4.08958 13.6969 4.18263 13.7036C4.27568 13.7102 4.36873 13.6906 4.45123 13.6471L7.99966 11.7814L11.5481 13.6471C11.645 13.6986 11.7575 13.7158 11.8653 13.6971C12.1372 13.6502 12.32 13.3924 12.2731 13.1205L11.595 9.16895L14.4653 6.37051C14.5434 6.29395 14.595 6.19395 14.6106 6.08457C14.6528 5.81114 14.4622 5.55801 14.1887 5.51739Z" fill="#F5B343"/>
                              </svg>
                             4.3</span>
                            </div>  
                          </div>
                        </div>
                      </div>

                <div class="col-lg-5">
                        <div class="card" style="background-color: #FFF4ED;"> 
                            <div class="card-body" >
                                    <table class="tutor_profile_table">
                                    <tr>
                                        <th class="text-orange">Phone</th>
                                        <td class="text-orange">:</td>
                                        <td>01715-040227</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Institute</th>
                                        <td class="text-orange">:</td>
                                        <td>Bangladesh University of Business & Tecnology </td>
                                    </tr>
                                
                                    <tr>
                                        <th class="text-orange">Address</th>
                                        <td class="text-orange">:</td>
                                        <td>Mirpur, Dhaka</td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="tutor_profile_chart">
                        <h5 class="text-orange">PROFILE COMPLETION</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" viewBox="0 0 124 124" fill="none">
                        <circle cx="62" cy="62" r="62" fill="#05B9F3"/>
                    </svg>
                    </div>
                </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Tuition Related Information</h4>
                        <div class="card w-100" style="background-color: #FFF4ED;">
                            <div class="card-body">
                                <table class="tutor_profile_table">
                                    <tr>
                                        <th class="text-orange">Prearable Location</th>
                                        <td class="text-orange">:</td>
                                        <td>Housing Society , Mohammadpur Bus Stand, Tajmahal Rd , Humayun Rd, Dhanmondi (Vooter Goli) , Dhanmondi , Farmgate , Jhigatola</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Preferable Categories</th>
                                        <td class="text-orange">:</td>
                                        <td>Bangla Medium</td>
                                    </tr>
                                
                                    <tr>
                                        <th class="text-orange">Preferable Classes</th>
                                        <td class="text-orange">:</td>
                                        <td>Class Nine , Class Ten , Class Eleven , Class Twelve</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Preferable Subject</th>
                                        <td class="text-orange">:</td>
                                        <td>All , Bangla , English , ICT , Accounting , Finance and banking , Business ventures , Commerce</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Day per Week</th>
                                        <td class="text-orange">:</td>
                                        <td>4 days</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Expected Salary</th>
                                        <td class="text-orange">:</td>
                                        <td>3000- 4000 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13" fill="none">
                                        <path d="M4.48185 13C3.71858 13 3.01185 12.5757 2.51714 11.846C2.14964 11.3029 1.98002 10.6919 1.98002 9.96215C1.98002 9.23238 1.98002 8.48564 1.98002 7.75588V5.99086H0.962331C0.849254 5.99086 0.736177 5.99086 0.608965 5.99086C0.396946 5.99086 0.227331 5.88903 0.128389 5.70235C0.0294468 5.53263 0.00117846 5.29504 0.0718515 5.07442C0.142525 4.85379 0.326273 4.68407 0.538292 4.6671C0.651369 4.6671 0.778581 4.6671 0.891658 4.6671H1.93762V4.15796C1.93762 4.00522 1.93762 3.85249 1.93762 3.71672C1.95175 3.36032 1.95176 3.00391 1.92349 2.64752C1.85281 1.91775 1.28743 1.3577 0.594832 1.32376C0.396947 1.30679 0.255602 1.23891 0.142525 1.08617C-0.0129562 0.86554 -0.0412263 0.661878 0.0577161 0.390337C0.142524 0.135768 0.283871 0.0169713 0.49589 0C0.538294 0 0.566561 0 0.608965 0C1.18848 0 1.7256 0.254567 2.19204 0.729763C2.77156 1.34073 3.05426 2.10444 3.05426 3.08878C3.05426 3.32637 3.05426 3.56397 3.05426 3.80157V4.6671H5.25925C5.64089 4.6671 6.02252 4.6671 6.40416 4.6671C6.55964 4.6671 6.71512 4.73498 6.81406 4.85378C6.913 4.97258 6.96954 5.1423 6.96954 5.32899C6.96954 5.68538 6.71512 5.95692 6.41829 5.97389C6.03666 5.97389 5.66916 5.97389 5.28752 5.97389H3.13906L3.09666 6.43212V6.46606C3.09666 6.51697 3.08252 6.56788 3.08252 6.63577V7.38251C3.08252 8.24804 3.08252 9.11358 3.08252 9.96215C3.08252 10.8447 3.63377 11.5744 4.35464 11.6593C4.39704 11.6593 4.43945 11.6593 4.48185 11.6593C5.24512 11.6593 5.85291 10.9465 5.88118 10.03C5.88118 9.79243 5.88118 9.55484 5.88118 9.31724C5.88118 9.1645 5.88118 8.99478 5.88118 8.84203C5.88118 8.48564 6.06493 8.2141 6.33349 8.16318C6.36175 8.16318 6.39003 8.16318 6.43243 8.16318C6.68685 8.16318 6.88474 8.34987 6.96954 8.65535C6.96954 8.77415 6.96954 8.87598 6.98368 8.99478C7.01195 9.82637 7.04022 10.624 6.72926 11.3198C6.27695 12.3721 5.443 13 4.48185 13Z" fill="#EB762A"/>
                                        </svg>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Tutoring Exprience</th>
                                        <td class="text-orange">:</td>
                                        <td>2 Years</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h4>Personal Information</h4>
                        <div class="card w-100" style="background-color: #FFF4ED;">
                            <div class="card-body">
                                <table class="tutor_profile_table">
                                    <tr>
                                        <th class="text-orange">Name</th>
                                        <td class="text-orange">:</td>
                                        <td>Tabassum Asha</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Phone Number</th>
                                        <td class="text-orange">:</td>
                                        <td>01715-040227</td>
                                    </tr>
                                
                                    <tr>
                                        <th class="text-orange">Email</th>
                                        <td class="text-orange">:</td>
                                        <td>tutorpro@gmail.com</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Present Address</th>
                                        <td class="text-orange">:</td>
                                        <td>Housing Society , Mohammadpur Bus Stand, Tajmahal Rd , Humayun Rd, Dhanmondi</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Blood Group</th>
                                        <td class="text-orange">:</td>
                                        <td>O+</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Gender</th>
                                        <td class="text-orange">:</td>
                                        <td>Female</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Religion</th>
                                        <td class="text-orange">:</td>
                                        <td>Islam</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Date of Birth</th>
                                        <td class="text-orange">:</td>
                                        <td>07/01/1995</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">NID / Birth certificate</th>
                                        <td class="text-orange">:</td>
                                        <td>01657715040227</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h4>Emergency Information</h4>
                        <div class="card w-100" style="background-color: #FFF4ED;">
                            <div class="card-body">
                                <table class="tutor_profile_table">
                                    <tr>
                                        <th class="text-orange">Name</th>
                                        <td class="text-orange">:</td>
                                        <td>Mizanur Rafi</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Number</th>
                                        <td class="text-orange">:</td>
                                        <td>01715-040227</td>
                                    </tr>
                                
                                    <tr>
                                        <th class="text-orange">Relation with Person</th>
                                        <td class="text-orange">:</td>
                                        <td>Cousin</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Present Location</th>
                                        <td class="text-orange">:</td>
                                        <td>Housing Society , Mohammadpur Bus Stand, Tajmahal Rd , Humayun Rd, Dhanmondi</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h4>Educational Information</h4>
                        <div class="card w-100" style="background-color: #FFF4ED;">
                            <div class="card-body">
                                <table class="tutor_profile_table">
                                    <tr>
                                        <td>Diploma</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Degree Title</th>
                                        <td class="text-orange">:</td>
                                        <td>Diploma</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Major / Group</th>
                                        <td class="text-orange">:</td>
                                        <td>MBBS ( Bachelor of Medicine and Surgery )</td>
                                    </tr>
                                
                                    <tr>
                                        <th class="text-orange">Institute Name</th>
                                        <td class="text-orange">:</td>
                                        <td>Armed Forces Medical Collage</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Is Current Institute</th>
                                        <td class="text-orange">:</td>
                                        <td>N / A</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Curriculum</th>
                                        <td class="text-orange">:</td>
                                        <td>N / A</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">ID card Number ( optional )</th>
                                        <td class="text-orange">:</td>
                                        <td>N / A</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Result</th>
                                        <td class="text-orange">:</td>
                                        <td>2 Years</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Year of Passing</th>
                                        <td class="text-orange">:</td>
                                        <td>2021</td>
                                    </tr>
                                </table>

                                <hr class="text-orange">
                                <table class="tutor_profile_table">
                                    <tr>
                                        <td>HSC</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Degree Title</th>
                                        <td class="text-orange">:</td>
                                        <td>HSC</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Major / Group</th>
                                        <td class="text-orange">:</td>
                                        <td>MBBS ( Bachelor of Medicine and Surgery )</td>
                                    </tr>
                                
                                    <tr>
                                        <th class="text-orange">Institute Name</th>
                                        <td class="text-orange">:</td>
                                        <td>Armed Forces Medical Collage</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Is Current Institute</th>
                                        <td class="text-orange">:</td>
                                        <td>N / A</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Curriculum</th>
                                        <td class="text-orange">:</td>
                                        <td>N / A</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">ID card Number ( optional )</th>
                                        <td class="text-orange">:</td>
                                        <td>N / A</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Result</th>
                                        <td class="text-orange">:</td>
                                        <td>2 Years</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Year of Passing</th>
                                        <td class="text-orange">:</td>
                                        <td>2021</td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                        <h4>Social Media Information</h4>
                        <div class="card w-100" style="background-color: #FFF4ED;">
                            <div class="card-body">
                                <table class="tutor_profile_table">
                                    <tr>
                                        <th class="text-orange">Facebook</th>
                                        <td class="text-orange">:</td>
                                        <td>username.facebook</td>
                                    </tr>
                                    <tr>
                                        <th class="text-orange">Linkdin</th>
                                        <td class="text-orange">:</td>
                                        <td>username.linkdin</td>
                                    </tr>
                                
                                    <tr>
                                        <th class="text-orange">Instagram</th>
                                        <td class="text-orange">:</td>
                                        <td>username.instagram</td>
                                    </tr>

                                    <tr>
                                        <th class="text-orange">Youtube</th>
                                        <td class="text-orange">:</td>
                                        <td>username.youtube</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <h4>Identity Information</h4>
                <div class="card" style="background-color: #FFF4ED;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="text-orange">NID / Birth certificate / Passport</h5>
                                <h5>NID</h5>
                                <div class="tutor_profile_id">
                                    <img src="public/../../images/upload_images/tutors/nid/1.png" alt="">
                                    <img src="public/../../images/upload_images/tutors/nid/1.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <h5 class="text-orange">Student ID / Pay Slip / Certificate</h5>
                                <h5>Student ID</h5>
                                <div class="tutor_profile_id">
                                    <img src="public/../../images/upload_images/tutors/student_id/1.png" alt="">
                                    <img src="public/../../images/upload_images/tutors/student_id/1.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <h5 class="text-orange">Others document (optional)</h5>
                                <h5>Document</h5>
                                <div class="tutor_profile_id">
                                    <img src="public/../../images/upload_images/tutors/document/1.png" alt="">
                                    <img src="public/../../images/upload_images/tutors/document/1.png" alt="">
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>

    <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6 text-end tutor_profile_download_btn mb-5">
              <button class="btn btn-outline-primary">Tuition History</button>
              <button class="btn bg-purpal">Payment History</button>
              <button class="btn bg-orange">Download CV</button>
        </div>
    </div>
     

    
  </div>
  </div>
  </div>
  </div>
  

  
  
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
  }
  
  
  }
  </Script>