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
      <h4 class="fw-semibold mb-0">Guardian List</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a class="text-muted text-decoration-none" href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Guardian List</li>
        </ol>
      </nav>
    </div>
  </div>
 
</div>
</div>
  
<!-- row for filter -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand btn bg-green" href="#">Add Guardian</a>
    <button class="navbar-toggler btn bg-orange" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <i class="fa-solid fa-sliders text-light"> </i> Filter
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Search Guardians</h5>
        <button type="button" class="btn bg-red" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
      </div>
      <div class="offcanvas-body">
          <div class="row">
            <div class="col-lg-6">
              <select name="" id="" class="form-control">
                <option>Division</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Dhaka">Khulna</option>
              </select>
            </div>
            <div class="col-lg-6">
              <select name="" id="" class="form-control">
                <option>District</option>
                <option value="Manikganj">Manikganj</option>
                <option value="Dhaka">Dhaka</option>
              </select>
            </div>
            <div class="col-lg-6">
              <select name="" id="" class="form-control">
                <option>Area</option>
                <option value="Mirpur">Mirpur</option>
                <option value="Savar">Savar</option>
              </select>
            </div>
            <div class="col-lg-6">
              <select name="" id="" class="form-control">
                <option>Present Living Location</option>
                <option value="Mirpur">Block H, Road 9</option>
                <option value="Savar">Block H, Road 10</option>
              </select>
            </div>
            <div class="col-lg-6">
              <select name="" id="" class="form-control">
                <option>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="col-lg-6">
              <input type="number" class="form-control" placeholder="Number / ID">
            </div>

            <div class="col-lg-12 mt-3">
              <button class="btn btn-primary">Apply</button>
              <button class="btn bg-orange">Clear</button>
            </div>

          </div>
      </div>
    </div>
  </div>
</nav>


</div>
</div>
</div>
</div>


  <!-- single guardian-list -->
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body mt-3" style="padding: 0px !important;">
                <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-1">
                            <p class="guardian_list_sl">1</p>
                        </div>
                        <div class="col-2">
                            <img class="guardian_list_img" src="public/../../images/upload_images/guardians/8.jpg" alt="">
                        </div>
                        <div class="col-7" style="text-align: left;">
                          <div class="row">
                          <div class="col-lg-5">
                            <h4 class="guardian_list_name">Tabassum Asha</h4>
                          </div>
                          <div class="col-lg-5 guardian_list_id">
                            <strong>Guardian ID - </strong><span>1084,</span>
                          </div>
                        </div>


                            <div class="row">
                                <div class="col-lg-5 guardian_list_since">
                                  <strong>Since - </strong><span> Nov 12, 2022</span>
                                </div>
                                <div class="col-lg-7 guardian_list_since">
                                <strong>Last Update - </strong><span> Nov 12, 2022</span>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>

            </div>

                <div class="container-fluid mt-3">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body guardian-list-profile-details p-4">

                              <div class="row mt-3">
                                <div class="col-lg-3">
                                    <h5 class="guardian_profile_title">MOBILE NUMBER</h5>
                                    <P class="guardian_profile_text">
                                        01788-002833
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="guardian_profile_title">GENDER</h5>
                                    <P class="guardian_profile_text">
                                        Female
                                    </P>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="guardian_profile_title">ADDRESS</h5>
                                    <P class="guardian_profile_text">
                                        Narinda, Puran Dhaka, Dhaka
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                  <div class="row">

                        <div class="col-6">
                          <router-link :to="{ name: 'guardian_profile' }">
                            <button class="btn btn-outline-primary guardian-list-btn">
                             <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <mask id="mask0_737_2040" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="17">
                                <rect width="17" height="17" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_737_2040)">
                                <path d="M10.7599 10.4059L10.6892 10.3351C10.0882 10.9357 9.36095 11.2352 8.50174 11.2352C7.64253 11.2352 6.91532 10.9357 6.31425 10.3351C5.71368 9.73407 5.41424 9.00688 5.41424 8.14769C5.41424 7.28851 5.71368 6.56132 6.31425 5.96026C6.91532 5.35966 7.64253 5.06019 8.50174 5.06019C9.36092 5.06019 10.0881 5.35964 10.6892 5.96021C11.2898 6.56127 11.5892 7.28848 11.5892 8.14769C11.5892 9.0069 11.2898 9.73411 10.6892 10.3352L10.7599 10.4059ZM10.7599 10.4059C10.1399 11.0254 9.38715 11.3352 8.50174 11.3352C7.61632 11.3352 6.8636 11.0254 6.24357 10.4059H10.7599ZM9.92754 6.72198L9.92745 6.72189C9.53637 6.33132 9.05919 6.13519 8.50174 6.13519C7.94429 6.13519 7.46731 6.33132 7.07669 6.72194C6.68563 7.113 6.48924 7.5902 6.48924 8.14769C6.48924 8.70516 6.68562 9.18214 7.07669 9.57274C7.4673 9.96381 7.94427 10.1602 8.50174 10.1602C9.05923 10.1602 9.53643 9.9638 9.92749 9.57274C10.3181 9.18212 10.5142 8.70514 10.5142 8.14769C10.5142 7.59024 10.3181 7.11306 9.92754 6.72198ZM2.90307 12.8783L2.90305 12.8783C1.90375 12.1998 1.09309 10.8632 0.476971 9.55398C0.0582509 8.66423 0.0582566 7.63116 0.476951 6.74139C1.09307 5.43208 1.90373 4.09523 2.90305 3.41635C3.59714 2.94506 4.56672 2.58792 5.58212 2.3488C6.59632 2.10997 7.64817 1.99075 8.50174 1.99075C9.3553 1.99075 10.4072 2.10997 11.4214 2.3488C12.4367 2.58792 13.4063 2.94506 14.1004 3.41634C15.0997 4.09522 15.9104 5.43207 16.5265 6.74139C16.9452 7.63116 16.9452 8.66423 16.5265 9.55398C15.9104 10.8632 15.0997 12.1998 14.1004 12.8783L14.1004 12.8783C13.4063 13.3499 12.4367 13.7072 11.4213 13.9464C10.4071 14.1854 9.3553 14.3046 8.50174 14.3046C7.64818 14.3046 6.59633 14.1854 5.58214 13.9464C4.56673 13.7072 3.59716 13.3499 2.90307 12.8783ZM13.1743 4.2761L13.1743 4.27607C12.6013 3.91549 11.7662 3.64921 10.9134 3.47281C10.0589 3.29602 9.17622 3.20741 8.50174 3.20741C7.82726 3.20741 6.9446 3.29602 6.09003 3.47281C5.23732 3.64921 4.4022 3.91549 3.8292 4.27607L3.82916 4.2761C3.16713 4.69316 2.60403 5.50614 2.13686 6.33511C1.50704 7.4527 1.50702 8.84269 2.13692 9.96025C2.60407 10.7891 3.16716 11.6018 3.82917 12.0186C4.40218 12.3794 5.23731 12.6459 6.09001 12.8224C6.94459 12.9993 7.82725 13.088 8.50174 13.088C9.17622 13.088 10.0589 12.9993 10.9135 12.8224C11.7662 12.6459 12.6013 12.3794 13.1743 12.0186C13.8363 11.6018 14.3994 10.7891 14.8666 9.96025C15.4965 8.84269 15.4964 7.4527 14.8666 6.33511C14.3994 5.50614 13.8363 4.69316 13.1743 4.2761Z" fill="#05B9F3" stroke="white" stroke-width="0.2"/>
                            </g>
                                </svg>      
                            Profile View</button></router-link>
                        </div>

                        <div class="col-5">
                            <button class="btn btn-outline-danger guardian-list-btn">Delete</button>
                        </div>
                    </div> 
                                </div>
              </div>                        
</div>
</div>
</div>
</div>
</div>
</div>
</div>

  <!-- single guardian-list -->
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body mt-3" style="padding: 0px !important;">
                <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-1">
                            <p class="guardian_list_sl">1</p>
                        </div>
                        <div class="col-2">
                            <img class="guardian_list_img" src="public/../../images/upload_images/guardians/8.jpg" alt="">
                        </div>
                        <div class="col-7" style="text-align: left;">
                          <div class="row">
                          <div class="col-lg-5">
                            <h4 class="guardian_list_name">Tabassum Asha</h4>
                          </div>
                          <div class="col-lg-5 guardian_list_id">
                            <strong>Guardian ID - </strong><span>1084,</span>
                          </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-5 guardian_list_since">
                                  <strong>Since - </strong><span> Nov 12, 2022</span>
                                </div>
                                <div class="col-lg-7 guardian_list_since">
                                <strong>Last Update - </strong><span> Nov 12, 2022</span>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>

            </div>

                <div class="container-fluid mt-3">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body guardian-list-profile-details p-4">

                              <div class="row mt-3">
                                <div class="col-lg-3">
                                    <h5 class="guardian_profile_title">MOBILE NUMBER</h5>
                                    <P class="guardian_profile_text">
                                        01788-002833
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="guardian_profile_title">GENDER</h5>
                                    <P class="guardian_profile_text">
                                        Female
                                    </P>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="guardian_profile_title">ADDRESS</h5>
                                    <P class="guardian_profile_text">
                                        Narinda, Puran Dhaka, Dhaka
                                    </P>
                                </div>

                      <div class="col-lg-3">
                        <div class="row">

                        <div class="col-6">
                          <router-link :to="{ name: 'guardian_profile' }">
                            <button class="btn btn-outline-primary guardian-list-btn">
                             <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <mask id="mask0_737_2040" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="17">
                                <rect width="17" height="17" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_737_2040)">
                                <path d="M10.7599 10.4059L10.6892 10.3351C10.0882 10.9357 9.36095 11.2352 8.50174 11.2352C7.64253 11.2352 6.91532 10.9357 6.31425 10.3351C5.71368 9.73407 5.41424 9.00688 5.41424 8.14769C5.41424 7.28851 5.71368 6.56132 6.31425 5.96026C6.91532 5.35966 7.64253 5.06019 8.50174 5.06019C9.36092 5.06019 10.0881 5.35964 10.6892 5.96021C11.2898 6.56127 11.5892 7.28848 11.5892 8.14769C11.5892 9.0069 11.2898 9.73411 10.6892 10.3352L10.7599 10.4059ZM10.7599 10.4059C10.1399 11.0254 9.38715 11.3352 8.50174 11.3352C7.61632 11.3352 6.8636 11.0254 6.24357 10.4059H10.7599ZM9.92754 6.72198L9.92745 6.72189C9.53637 6.33132 9.05919 6.13519 8.50174 6.13519C7.94429 6.13519 7.46731 6.33132 7.07669 6.72194C6.68563 7.113 6.48924 7.5902 6.48924 8.14769C6.48924 8.70516 6.68562 9.18214 7.07669 9.57274C7.4673 9.96381 7.94427 10.1602 8.50174 10.1602C9.05923 10.1602 9.53643 9.9638 9.92749 9.57274C10.3181 9.18212 10.5142 8.70514 10.5142 8.14769C10.5142 7.59024 10.3181 7.11306 9.92754 6.72198ZM2.90307 12.8783L2.90305 12.8783C1.90375 12.1998 1.09309 10.8632 0.476971 9.55398C0.0582509 8.66423 0.0582566 7.63116 0.476951 6.74139C1.09307 5.43208 1.90373 4.09523 2.90305 3.41635C3.59714 2.94506 4.56672 2.58792 5.58212 2.3488C6.59632 2.10997 7.64817 1.99075 8.50174 1.99075C9.3553 1.99075 10.4072 2.10997 11.4214 2.3488C12.4367 2.58792 13.4063 2.94506 14.1004 3.41634C15.0997 4.09522 15.9104 5.43207 16.5265 6.74139C16.9452 7.63116 16.9452 8.66423 16.5265 9.55398C15.9104 10.8632 15.0997 12.1998 14.1004 12.8783L14.1004 12.8783C13.4063 13.3499 12.4367 13.7072 11.4213 13.9464C10.4071 14.1854 9.3553 14.3046 8.50174 14.3046C7.64818 14.3046 6.59633 14.1854 5.58214 13.9464C4.56673 13.7072 3.59716 13.3499 2.90307 12.8783ZM13.1743 4.2761L13.1743 4.27607C12.6013 3.91549 11.7662 3.64921 10.9134 3.47281C10.0589 3.29602 9.17622 3.20741 8.50174 3.20741C7.82726 3.20741 6.9446 3.29602 6.09003 3.47281C5.23732 3.64921 4.4022 3.91549 3.8292 4.27607L3.82916 4.2761C3.16713 4.69316 2.60403 5.50614 2.13686 6.33511C1.50704 7.4527 1.50702 8.84269 2.13692 9.96025C2.60407 10.7891 3.16716 11.6018 3.82917 12.0186C4.40218 12.3794 5.23731 12.6459 6.09001 12.8224C6.94459 12.9993 7.82725 13.088 8.50174 13.088C9.17622 13.088 10.0589 12.9993 10.9135 12.8224C11.7662 12.6459 12.6013 12.3794 13.1743 12.0186C13.8363 11.6018 14.3994 10.7891 14.8666 9.96025C15.4965 8.84269 15.4964 7.4527 14.8666 6.33511C14.3994 5.50614 13.8363 4.69316 13.1743 4.2761Z" fill="#05B9F3" stroke="white" stroke-width="0.2"/>
                            </g>
                                </svg>      
                            Profile View</button></router-link>
                        </div>

                        <div class="col-5">
                            <button class="btn btn-outline-danger guardian-list-btn">Delete</button>
                        </div>
                    </div> 
                </div>
              </div>                        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- single gurdian list end -->


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
  
  