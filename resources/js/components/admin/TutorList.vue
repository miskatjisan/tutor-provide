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


  <!-- filter -->
<div class="row">
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
              
<nav class="navbar">
  <div class="container-fluid">
    <a href=""></a>
    <button class="navbar-toggler btn bg-orange" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <i class="fa-solid fa-sliders text-light"> </i> Filter
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Search Tutors</h5>
        <button type="button" class="btn bg-red" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
      </div>
      <div class="offcanvas-body">
          <div class="row">
            <div class="col-lg-12">
              <select name="" id="" class="form-control">
                <option>Institute Name</option>
                <option value="">Mirpur Girls School</option>
                <option value="">Bangla College Mirpur</option>
              </select>
            </div>
            
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
              <input type="number" class="form-control" placeholder="Number / ID">
            </div>
            <div class="col-lg-6">
              <select name="" id="" class="form-control">
                <option>Categories</option>
                <option value="">Bngla Medium</option>
                <option value="">English Medium</option>
                <option value="">English Version</option>
              </select>
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

  <!-- single tutor-list -->
  <div class="row">
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body mt-3" style="padding: 0px !important;">
                <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-1">
                            <p class="tutor_list_sl">1</p>
                        </div>
                        <div class="col-2">
                            <img class="tutor_list_img" src="public/../../images/upload_images/tutors/8.jpg" alt="">
                        </div>
                        <div class="col-7" style="text-align: left;">
                          <div class="row">
                          <div class="col-lg-7">
                            <h4 class="tutor_list_name">Tabassum Asha 
                            <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.1887 5.51739L10.2215 4.94083L8.4481 1.34551C8.39966 1.24708 8.31998 1.16739 8.22154 1.11895C7.97466 0.997076 7.67466 1.09864 7.55123 1.34551L5.77779 4.94083L1.8106 5.51739C1.70123 5.53301 1.60123 5.58458 1.52466 5.6627C1.4321 5.75784 1.3811 5.88583 1.38286 6.01855C1.38461 6.15127 1.43899 6.27786 1.53404 6.37051L4.40435 9.16895L3.72623 13.1205C3.71032 13.2124 3.7205 13.307 3.75559 13.3934C3.79068 13.4798 3.84929 13.5547 3.92477 13.6095C4.00025 13.6644 4.08958 13.6969 4.18263 13.7036C4.27568 13.7102 4.36873 13.6906 4.45123 13.6471L7.99966 11.7814L11.5481 13.6471C11.645 13.6986 11.7575 13.7158 11.8653 13.6971C12.1372 13.6502 12.32 13.3924 12.2731 13.1205L11.595 9.16895L14.4653 6.37051C14.5434 6.29395 14.595 6.19395 14.6106 6.08457C14.6528 5.81114 14.4622 5.55801 14.1887 5.51739Z" fill="#F5B343"/>
                            </svg>
                            </span>
                            <span> 4.3</span>
                            <span>
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
                            </span>
                            </h4>
                          </div>
                          <div class="col-lg-5 tutor_list_id">
                            <strong>Tutor ID - </strong><span>1084</span>
                          </div>
                        </div>


                            <div class="row">
                                <div class="col-lg-7 tutor_list_since">
                                  <strong>Since - </strong><span> Nov 12, 2022</span>
                                </div>
                                <div class="col-lg-5 tutor_list_since">
                                <strong>Mobile - </strong><span> 01759741135</span>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>

                <div class="container-fluid mt-3">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body tutor-list-profile-details p-5">
                            <div class="row mt-3">

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">PROFILE COMPLETION</h5>
                                    <div class="tutor_profile_progress-bar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                                        <circle cx="33" cy="33" r="33" fill="#05B9F3"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">TUTOR LOCATION</h5>
                                    <P class="tutor_profile_text">
                                        Basundhara Residential Area, Dhaka
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">TUTOR EXPRIENCE</h5>
                                    <P class="tutor_profile_text">
                                        3+ years
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">PREFERABLE CLASS</h5>
                                    <P class="tutor_profile_text">
                                      Class Eight, Seven, Nine, Srandard Five
                                    </P>
                                </div>
                                
                              </div>

                              <div class="row mt-3">
                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">PREFERABLE SUBJECT</h5>
                                    <P class="tutor_profile_text">
                                        All
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">INSTITUTE NAME</h5>
                                    <P class="tutor_profile_text">
                                        Manarat International Univercity
                                    </P>
                                </div>

                                <div class="col-lg-6">
                                  <div class="row">
                        <div class="col-lg-7 mt-2">
                            <div class="row">
                                <div class="col-6">
                            <button class="btn bg-yellow tutor-list-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                            <path d="M3.93749 1.24751e-08C3.84028 -2.0534e-05 3.74472 0.0253392 3.66014 0.073606C3.57555 0.121873 3.50483 0.191399 3.45486 0.275404L0.0798561 5.94216C0.0199446 6.04299 -0.00736679 6.16009 0.00170332 6.27726C0.0107734 6.39442 0.0557761 6.50584 0.130481 6.5961L8.568 16.7963C8.62079 16.86 8.68685 16.9113 8.7615 16.9465C8.83615 16.9818 8.91757 17 9 17C9.08243 17 9.16385 16.9818 9.2385 16.9465C9.31315 16.9113 9.37921 16.86 9.432 16.7963L17.8695 6.5961C17.9442 6.50584 17.9892 6.39442 17.9983 6.27726C18.0074 6.16009 17.9801 6.04299 17.9201 5.94216L14.5451 0.275404C14.4952 0.191399 14.4244 0.121873 14.3399 0.073606C14.2553 0.0253392 14.1597 -2.0534e-05 14.0625 1.24751e-08H3.93749ZM1.55586 5.66675L4.25586 1.13335H6.48224L4.68224 5.66675H1.55586ZM4.67774 6.8001L7.22812 13.4064L1.76398 6.8001H4.67774ZM9 14.8696L5.88487 6.8001H12.1151L9 14.8696ZM5.89387 5.66675L7.69387 1.13335H10.3061L12.1061 5.66675H5.89499H5.89387ZM13.3189 5.66675L11.5189 1.13335H13.7441L16.4441 5.66675H13.3178H13.3189ZM13.3223 6.8001H16.236L10.7719 13.4064L13.3223 6.8001Z" fill="white"/>
                        </svg>
                        Do Premium</button>
                        </div>

                <div class="col-6">
                    <router-link :to="{ name: 'tutor_profile' }"> <button class="btn btn-outline-primary tutor-list-btn">
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
                            </div>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <button class="btn bg-green tutor-list-btn">Confirm</button>
                        </div>

                        <div class="col-lg-2 mt-2">
                          <!-- Button trigger modal -->
                            <button class="btn btn-outline-danger tutor-list-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:10%">
  <div class="modal-dialog" style="text-align: -webkit-center;" >
    <div class="modal-content" style="width: 80% !important;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body text-center">
        <div class="warning-svg">
          <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68" fill="none">
  <path d="M31.3838 26.8838C31.3838 25.7532 32.2683 24.8268 33.3858 24.764H33.507C34.6775 24.764 35.6268 25.7158 35.6268 26.8872V52.5795C35.6049 53.1266 35.3725 53.6442 34.9779 54.0241C34.5823 54.405 34.0545 54.6178 33.5053 54.6178C32.9561 54.6178 32.4283 54.405 32.0327 54.0241C31.6381 53.6442 31.4057 53.1266 31.3838 52.5795V26.8838ZM34 0.25C52.6401 0.25 67.75 15.3599 67.75 34C67.75 52.6401 52.6401 67.75 34 67.75C15.3599 67.75 0.25 52.6401 0.25 34C0.25 15.3599 15.3599 0.25 34 0.25ZM34 4.493C26.1743 4.493 18.669 7.60176 13.1354 13.1354C7.60176 18.669 4.493 26.1743 4.493 34C4.493 41.8257 7.60176 49.331 13.1354 54.8646C18.669 60.3982 26.1743 63.507 34 63.507C41.8257 63.507 49.331 60.3982 54.8646 54.8646C60.3982 49.331 63.507 41.8257 63.507 34C63.507 26.1743 60.3982 18.669 54.8646 13.1354C49.331 7.60176 41.8257 4.493 34 4.493ZM33.6022 15.278C34.3745 15.278 35.1152 15.5848 35.6613 16.1309C36.2074 16.677 36.5142 17.4177 36.5142 18.19C36.5142 18.9623 36.2074 19.703 35.6613 20.2491C35.1152 20.7952 34.3745 21.102 33.6022 21.102C32.8299 21.102 32.0892 20.7952 31.5431 20.2491C30.997 19.703 30.6902 18.9623 30.6902 18.19C30.6902 17.4177 30.997 16.677 31.5431 16.1309C32.0892 15.5848 32.8299 15.278 33.6022 15.278Z" fill="#EB762A" stroke="white" stroke-width="0.5"/>
</svg>
        </div>
          <h3 class="mt-5">Are you Sure ?</h3>
          <p class="mt-3">Data will be delete permantly?</p>

          <div class="mt-5">
        <button type="button" class="btn btn-primary m-3 px-3" style="font-size: 16px;">Yes</button>
        <button type="button" class="btn btn-outline-danger m-3 px-3" data-bs-dismiss="modal" style="font-size: 16px;">No</button>
      </div>
      </div>
      
    </div>
  </div>
</div>


                        </div>

                        <!--  -->
                      
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


  <!-- single tutor-list -->
  <div class="row">
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body mt-3" style="padding: 0px !important;">
                <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-1">
                            <p class="tutor_list_sl">1</p>
                        </div>
                        <div class="col-2">
                            <img class="tutor_list_img" src="public/../../images/upload_images/tutors/8.jpg" alt="">
                        </div>
                        <div class="col-7" style="text-align: left;">
                          <div class="row">
                          <div class="col-lg-7">
                            <h4 class="tutor_list_name">Tabassum Asha 
                            <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.1887 5.51739L10.2215 4.94083L8.4481 1.34551C8.39966 1.24708 8.31998 1.16739 8.22154 1.11895C7.97466 0.997076 7.67466 1.09864 7.55123 1.34551L5.77779 4.94083L1.8106 5.51739C1.70123 5.53301 1.60123 5.58458 1.52466 5.6627C1.4321 5.75784 1.3811 5.88583 1.38286 6.01855C1.38461 6.15127 1.43899 6.27786 1.53404 6.37051L4.40435 9.16895L3.72623 13.1205C3.71032 13.2124 3.7205 13.307 3.75559 13.3934C3.79068 13.4798 3.84929 13.5547 3.92477 13.6095C4.00025 13.6644 4.08958 13.6969 4.18263 13.7036C4.27568 13.7102 4.36873 13.6906 4.45123 13.6471L7.99966 11.7814L11.5481 13.6471C11.645 13.6986 11.7575 13.7158 11.8653 13.6971C12.1372 13.6502 12.32 13.3924 12.2731 13.1205L11.595 9.16895L14.4653 6.37051C14.5434 6.29395 14.595 6.19395 14.6106 6.08457C14.6528 5.81114 14.4622 5.55801 14.1887 5.51739Z" fill="#F5B343"/>
                            </svg>
                            </span>
                            <span> 4.3</span>
                            <span>
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
                            </span>
                            </h4>
                          </div>
                          <div class="col-lg-5 tutor_list_id">
                            <strong>Tutor ID - </strong><span>1084</span>
                          </div>
                        </div>


                            <div class="row">
                                <div class="col-lg-7 tutor_list_since">
                                  <strong>Since - </strong><span> Nov 12, 2022</span>
                                </div>
                                <div class="col-lg-5 tutor_list_since">
                                <strong>Mobile - </strong><span> 01759741135</span>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>

                <div class="container-fluid mt-3">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body tutor-list-profile-details p-5">
                            <div class="row mt-3">

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">PROFILE COMPLETION</h5>
                                    <div class="tutor_profile_progress-bar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                                        <circle cx="33" cy="33" r="33" fill="#05B9F3"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">TUTOR LOCATION</h5>
                                    <P class="tutor_profile_text">
                                        Basundhara Residential Area, Dhaka
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">TUTOR EXPRIENCE</h5>
                                    <P class="tutor_profile_text">
                                        3+ years
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">PREFERABLE CLASS</h5>
                                    <P class="tutor_profile_text">
                                      Class Eight, Seven, Nine, Srandard Five
                                    </P>
                                </div>
                                
                              </div>

                              <div class="row mt-3">
                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">PREFERABLE SUBJECT</h5>
                                    <P class="tutor_profile_text">
                                        All
                                    </P>
                                </div>

                                <div class="col-lg-3">
                                    <h5 class="tutor_profile_title">INSTITUTE NAME</h5>
                                    <P class="tutor_profile_text">
                                        Manarat International Univercity
                                    </P>
                                </div>

                                <div class="col-lg-6">
                                  <div class="row">
                        <div class="col-lg-7 mt-2">
                            <div class="row">
                                <div class="col-6">
                            <button class="btn bg-yellow tutor-list-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                            <path d="M3.93749 1.24751e-08C3.84028 -2.0534e-05 3.74472 0.0253392 3.66014 0.073606C3.57555 0.121873 3.50483 0.191399 3.45486 0.275404L0.0798561 5.94216C0.0199446 6.04299 -0.00736679 6.16009 0.00170332 6.27726C0.0107734 6.39442 0.0557761 6.50584 0.130481 6.5961L8.568 16.7963C8.62079 16.86 8.68685 16.9113 8.7615 16.9465C8.83615 16.9818 8.91757 17 9 17C9.08243 17 9.16385 16.9818 9.2385 16.9465C9.31315 16.9113 9.37921 16.86 9.432 16.7963L17.8695 6.5961C17.9442 6.50584 17.9892 6.39442 17.9983 6.27726C18.0074 6.16009 17.9801 6.04299 17.9201 5.94216L14.5451 0.275404C14.4952 0.191399 14.4244 0.121873 14.3399 0.073606C14.2553 0.0253392 14.1597 -2.0534e-05 14.0625 1.24751e-08H3.93749ZM1.55586 5.66675L4.25586 1.13335H6.48224L4.68224 5.66675H1.55586ZM4.67774 6.8001L7.22812 13.4064L1.76398 6.8001H4.67774ZM9 14.8696L5.88487 6.8001H12.1151L9 14.8696ZM5.89387 5.66675L7.69387 1.13335H10.3061L12.1061 5.66675H5.89499H5.89387ZM13.3189 5.66675L11.5189 1.13335H13.7441L16.4441 5.66675H13.3178H13.3189ZM13.3223 6.8001H16.236L10.7719 13.4064L13.3223 6.8001Z" fill="white"/>
                        </svg>
                        Do Premium</button>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-outline-primary tutor-list-btn">
                             <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <mask id="mask0_737_2040" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="17">
                                <rect width="17" height="17" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_737_2040)">
                                <path d="M10.7599 10.4059L10.6892 10.3351C10.0882 10.9357 9.36095 11.2352 8.50174 11.2352C7.64253 11.2352 6.91532 10.9357 6.31425 10.3351C5.71368 9.73407 5.41424 9.00688 5.41424 8.14769C5.41424 7.28851 5.71368 6.56132 6.31425 5.96026C6.91532 5.35966 7.64253 5.06019 8.50174 5.06019C9.36092 5.06019 10.0881 5.35964 10.6892 5.96021C11.2898 6.56127 11.5892 7.28848 11.5892 8.14769C11.5892 9.0069 11.2898 9.73411 10.6892 10.3352L10.7599 10.4059ZM10.7599 10.4059C10.1399 11.0254 9.38715 11.3352 8.50174 11.3352C7.61632 11.3352 6.8636 11.0254 6.24357 10.4059H10.7599ZM9.92754 6.72198L9.92745 6.72189C9.53637 6.33132 9.05919 6.13519 8.50174 6.13519C7.94429 6.13519 7.46731 6.33132 7.07669 6.72194C6.68563 7.113 6.48924 7.5902 6.48924 8.14769C6.48924 8.70516 6.68562 9.18214 7.07669 9.57274C7.4673 9.96381 7.94427 10.1602 8.50174 10.1602C9.05923 10.1602 9.53643 9.9638 9.92749 9.57274C10.3181 9.18212 10.5142 8.70514 10.5142 8.14769C10.5142 7.59024 10.3181 7.11306 9.92754 6.72198ZM2.90307 12.8783L2.90305 12.8783C1.90375 12.1998 1.09309 10.8632 0.476971 9.55398C0.0582509 8.66423 0.0582566 7.63116 0.476951 6.74139C1.09307 5.43208 1.90373 4.09523 2.90305 3.41635C3.59714 2.94506 4.56672 2.58792 5.58212 2.3488C6.59632 2.10997 7.64817 1.99075 8.50174 1.99075C9.3553 1.99075 10.4072 2.10997 11.4214 2.3488C12.4367 2.58792 13.4063 2.94506 14.1004 3.41634C15.0997 4.09522 15.9104 5.43207 16.5265 6.74139C16.9452 7.63116 16.9452 8.66423 16.5265 9.55398C15.9104 10.8632 15.0997 12.1998 14.1004 12.8783L14.1004 12.8783C13.4063 13.3499 12.4367 13.7072 11.4213 13.9464C10.4071 14.1854 9.3553 14.3046 8.50174 14.3046C7.64818 14.3046 6.59633 14.1854 5.58214 13.9464C4.56673 13.7072 3.59716 13.3499 2.90307 12.8783ZM13.1743 4.2761L13.1743 4.27607C12.6013 3.91549 11.7662 3.64921 10.9134 3.47281C10.0589 3.29602 9.17622 3.20741 8.50174 3.20741C7.82726 3.20741 6.9446 3.29602 6.09003 3.47281C5.23732 3.64921 4.4022 3.91549 3.8292 4.27607L3.82916 4.2761C3.16713 4.69316 2.60403 5.50614 2.13686 6.33511C1.50704 7.4527 1.50702 8.84269 2.13692 9.96025C2.60407 10.7891 3.16716 11.6018 3.82917 12.0186C4.40218 12.3794 5.23731 12.6459 6.09001 12.8224C6.94459 12.9993 7.82725 13.088 8.50174 13.088C9.17622 13.088 10.0589 12.9993 10.9135 12.8224C11.7662 12.6459 12.6013 12.3794 13.1743 12.0186C13.8363 11.6018 14.3994 10.7891 14.8666 9.96025C15.4965 8.84269 15.4964 7.4527 14.8666 6.33511C14.3994 5.50614 13.8363 4.69316 13.1743 4.2761Z" fill="#05B9F3" stroke="white" stroke-width="0.2"/>
                            </g>
                                </svg>      
                            Profile View</button>
                        </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <button class="btn bg-green tutor-list-btn">Confirm</button>
                        </div>

                        <div class="col-lg-2 mt-2">
                            <button class="btn btn-outline-danger tutor-list-btn">Delete</button>
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