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

<!-- table list -->
<div class="row">
  <div class="col-lg-12">
    <div class="card w-100">
      <div class="card-body">

        <div class="container-fluid">
        <div class="row  pb-2">
          <div class="col-lg-2">
            <div class="row">
              <div class="col-3 mt-3">
                <button class="btn" style="font-weight: 700;">From</button>
              </div>
              <div class="col-8">
                <input type="date" class="form-control text-center" style="height: auto;">
              </div>
            </div>
          </div> 
          <div class="col-lg-2">
            <div class="row">
              <div class="col-2 mt-3 mb-1">
                <button class="btn" style="font-weight: 700;">To</button>
              </div>
              <div class="col-8">
                <input type="date" class="form-control text-center" style="height: auto;">
              </div>
            </div>
          </div>
          
              <div class="col-lg-4">
                <input type="text" class="form-control text-center" placeholder="Type Tution Code or Mobile Number" style="height: auto;">
              </div>
              <div class="col-lg-2">
                <select name="" id="" class="form-control" style="height: auto;">
                  <option>All Tutors</option>
                  <option>Live Tutions</option>
                  <option>Confirm Tuitions</option>
                  <option>Cancel Tuitions</option>
                </select>
              </div>

              <div class="col-lg-2 mt-3">
                <div class="row">
                  <div class="col-2">
                <i class="fa-solid fa-rotate-right bg-orange" style="border-radius: 10px; padding: 10px 9px;"></i>
              </div>
              <div class="col-10">
                <button class="btn btn-success">Add Tution</button>
              </div>
                </div>
              </div>
             
        </div>
      </div>

        <table class="responsive-table table table-hover">
    <thead>
      <tr>
        <th scope="col" style="width: 2%;">SL</th>
        <th scope="col">Tuition Code</th>
        <th scope="col">Guardian ID</th>
        <th scope="col">Applied</th>
        <th scope="col">Match</th>
        <th scope="col">Guardian Number</th>
        <th scope="col">Location</th>
        <th scope="col">EM</th>
        <th scope="col">Last Update</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody>
<tr>
        <th scope="row">1</th>
        <td data-title="Tuition Code">T - 2022</td>
        <td data-title="Guardian ID">G - 2022</td>
        <td data-title="Applied tutors"><span class="badge text-bg-info">5</span></td>
        <td data-title="Suggestion"><span class="badge text-bg-success">5</span></td>
        <td data-title="Guardian Number">01788-002833</td>
        <td data-title="Location">Narinda, Puran Dhaka</td>
        <td data-title="Employee"><span class="badge bg-purpal">5</span></td>
        <td data-title="Last Update"><h5>20/10/22</h5><p>4:35 pm (jannatul)</p></td>
        <td data-title="Action" class="action">
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
  <g filter="url(#filter0_i_737_2614)">
    <rect y="0.5" width="29" height="29" rx="7" fill="#FFF4ED"/>
  </g>
  <path d="M14.0846 10.8392C11.7288 11.1354 9.65577 12.4512 8.41394 14.4402C8.08413 14.9686 8 15.2176 8 15.6517C8 16.0859 8.0875 16.3349 8.41394 16.8633C9.51779 18.6301 11.2779 19.8719 13.3207 20.3296C14.0846 20.5012 15.2087 20.5484 15.9995 20.4474C18.2611 20.1479 20.2197 18.9296 21.4716 17.0315C21.9024 16.3786 22 16.1229 22 15.6517C22 15.2984 21.9428 15.0863 21.7712 14.7633C20.8457 13.0503 19.1394 11.6806 17.2212 11.1085C16.4942 10.8931 16.0466 10.8325 15.1346 10.819C14.6803 10.8157 14.2091 10.8224 14.0846 10.8392ZM15.6327 13.0637C16.2317 13.2017 16.8375 13.6123 17.1841 14.1171C17.349 14.3561 17.5442 14.7969 17.6048 15.0695C17.6755 15.3791 17.6755 15.9243 17.6048 16.2339C17.5442 16.5065 17.349 16.9474 17.1841 17.1863C16.7063 17.8796 15.8683 18.3137 15.0034 18.3137C14.5726 18.3137 14.2462 18.2397 13.8389 18.0411C13.2601 17.7585 12.8933 17.3916 12.6106 16.8128C12.412 16.4022 12.3413 16.0993 12.3413 15.645C12.3413 14.9147 12.6038 14.2786 13.1154 13.7671C13.3577 13.5248 13.5563 13.3902 13.8995 13.2286C14.4548 12.9695 15.0034 12.919 15.6327 13.0637Z" fill="#7C6FFD"/>
  <path d="M14.488 14.099C14 14.2571 13.5827 14.6845 13.438 15.1759C13.3673 15.4148 13.3673 15.886 13.438 16.1249C13.5827 16.623 14.0034 17.047 14.4981 17.2018C14.7842 17.2927 15.2351 17.2893 15.5145 17.1951C15.7635 17.111 15.9116 17.0268 16.1034 16.8485L16.2481 16.7172L16.0193 16.6095C15.6053 16.4177 15.3899 16.0913 15.3899 15.6504C15.3899 15.2095 15.6053 14.8831 16.0193 14.6913L16.2481 14.5836L16.1034 14.4523C15.9116 14.274 15.7635 14.1898 15.5145 14.1057C15.2419 14.0148 14.764 14.0115 14.488 14.099Z" fill="#7C6FFD"/>
  <defs>
    <filter id="filter0_i_737_2614" x="0" y="0.5" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="2"/>
      <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="multiply" in2="shape" result="effect1_innerShadow_737_2614"/>
    </filter>
  </defs>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
        <g filter="url(#filter0_i_737_2623)">
            <rect y="0.5" width="29" height="29" rx="7" fill="#FFF4ED"/>
        </g>
        <path d="M12.0889 8.61035C11.8078 8.71195 11.5911 9.01677 11.5911 9.30804C11.5911 9.46723 11.6927 9.70431 11.818 9.82624C12.0483 10.0565 11.9941 10.0532 14.5038 10.0532C17.0169 10.0532 16.9593 10.0565 17.193 9.82624C17.5757 9.44352 17.4233 8.78985 16.9152 8.61373C16.7832 8.5697 16.4512 8.56293 14.4902 8.56293C12.6613 8.56632 12.1939 8.57648 12.0889 8.61035Z" fill="#FF6155"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.43857 20.0614L9.42841 16.2241L9.41959 12.8957C8.4386 12.8818 8.32027 12.8489 8.25078 12.7719C8.23345 12.7527 8.21916 12.7308 8.19527 12.7057C7.85658 12.3501 7.97512 11.7167 8.42219 11.5237C8.50348 11.4864 9.62454 11.4796 14.5017 11.4763H20.4795L20.6319 11.5575C20.8656 11.6795 20.9842 11.8691 20.9977 12.1502C21.0112 12.4009 20.9672 12.533 20.8046 12.7057C20.7816 12.7307 20.768 12.7527 20.7512 12.7718C20.6839 12.8489 20.566 12.8817 19.5843 12.8957L19.5755 16.2241L19.5654 20.0614L19.4908 20.3324C19.3926 20.6846 19.1522 21.1588 18.9388 21.423C18.5628 21.887 17.9938 22.2561 17.3977 22.4255C17.1268 22.5 17.1133 22.5 14.502 22.5C11.8805 22.5 11.8771 22.5 11.6062 22.4221C11.2539 22.3239 10.7798 22.0834 10.5156 21.8734C10.0584 21.5076 9.67904 20.9217 9.51647 20.3324L9.43857 20.0614ZM13.7501 14.3071C13.6959 14.1276 13.4757 13.9075 13.2962 13.8533C13.005 13.7686 12.7205 13.8363 12.5308 14.0362C12.5008 14.0681 12.4754 14.0936 12.4539 14.122C12.3294 14.2863 12.3344 14.5487 12.3344 16.7287V19.0691L12.4224 19.235C12.6595 19.6686 13.2657 19.7363 13.6011 19.3671C13.6654 19.296 13.7331 19.1775 13.7535 19.1063C13.8077 18.9099 13.8043 14.49 13.7501 14.3071ZM16.6357 14.3105C16.5883 14.1446 16.4156 13.9515 16.2462 13.877C16.0972 13.8059 15.8669 13.7991 15.6874 13.8567C15.5248 13.9075 15.3047 14.1378 15.2539 14.3071C15.2234 14.4121 15.2132 15.0218 15.2132 16.7457C15.2132 18.9133 15.22 19.0522 15.2776 19.1809C15.5146 19.6923 16.2394 19.7532 16.5578 19.2858L16.6526 19.147L16.6628 16.7931C16.6696 15.1572 16.6628 14.3986 16.6357 14.3105Z" fill="#FF6155"/>
        <defs>
            <filter id="filter0_i_737_2623" x="0" y="0.5" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset/>
            <feGaussianBlur stdDeviation="2"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
            <feBlend mode="multiply" in2="shape" result="effect1_innerShadow_737_2623"/>
            </filter>
        </defs>
        </svg>

  <button class="btn btn-action btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>

</td>
</tr>


<tr>
        <th scope="row">1</th>
        <td data-title="Tuition Code">T - 2022</td>
        <td data-title="Guardian ID">G - 2022</td>
        <td data-title="Applied tutors"><span class="badge text-bg-info">5</span></td>
        <td data-title="Suggestion"><span class="badge text-bg-success">5</span></td>
        <td data-title="Guardian Number">01788-002833</td>
        <td data-title="Location">Narinda, Puran Dhaka</td>
        <td data-title="Employee"><span class="badge bg-purpal">5</span></td>
        <td data-title="Last Update"><h5>20/10/22</h5><p>4:35 pm (jannatul)</p></td>
        <td data-title="Action" class="action" style="width: 14%;">
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
  <g filter="url(#filter0_i_737_2614)">
    <rect y="0.5" width="29" height="29" rx="7" fill="#FFF4ED"/>
  </g>
  <path d="M14.0846 10.8392C11.7288 11.1354 9.65577 12.4512 8.41394 14.4402C8.08413 14.9686 8 15.2176 8 15.6517C8 16.0859 8.0875 16.3349 8.41394 16.8633C9.51779 18.6301 11.2779 19.8719 13.3207 20.3296C14.0846 20.5012 15.2087 20.5484 15.9995 20.4474C18.2611 20.1479 20.2197 18.9296 21.4716 17.0315C21.9024 16.3786 22 16.1229 22 15.6517C22 15.2984 21.9428 15.0863 21.7712 14.7633C20.8457 13.0503 19.1394 11.6806 17.2212 11.1085C16.4942 10.8931 16.0466 10.8325 15.1346 10.819C14.6803 10.8157 14.2091 10.8224 14.0846 10.8392ZM15.6327 13.0637C16.2317 13.2017 16.8375 13.6123 17.1841 14.1171C17.349 14.3561 17.5442 14.7969 17.6048 15.0695C17.6755 15.3791 17.6755 15.9243 17.6048 16.2339C17.5442 16.5065 17.349 16.9474 17.1841 17.1863C16.7063 17.8796 15.8683 18.3137 15.0034 18.3137C14.5726 18.3137 14.2462 18.2397 13.8389 18.0411C13.2601 17.7585 12.8933 17.3916 12.6106 16.8128C12.412 16.4022 12.3413 16.0993 12.3413 15.645C12.3413 14.9147 12.6038 14.2786 13.1154 13.7671C13.3577 13.5248 13.5563 13.3902 13.8995 13.2286C14.4548 12.9695 15.0034 12.919 15.6327 13.0637Z" fill="#7C6FFD"/>
  <path d="M14.488 14.099C14 14.2571 13.5827 14.6845 13.438 15.1759C13.3673 15.4148 13.3673 15.886 13.438 16.1249C13.5827 16.623 14.0034 17.047 14.4981 17.2018C14.7842 17.2927 15.2351 17.2893 15.5145 17.1951C15.7635 17.111 15.9116 17.0268 16.1034 16.8485L16.2481 16.7172L16.0193 16.6095C15.6053 16.4177 15.3899 16.0913 15.3899 15.6504C15.3899 15.2095 15.6053 14.8831 16.0193 14.6913L16.2481 14.5836L16.1034 14.4523C15.9116 14.274 15.7635 14.1898 15.5145 14.1057C15.2419 14.0148 14.764 14.0115 14.488 14.099Z" fill="#7C6FFD"/>
  <defs>
    <filter id="filter0_i_737_2614" x="0" y="0.5" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="2"/>
      <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
      <feBlend mode="multiply" in2="shape" result="effect1_innerShadow_737_2614"/>
    </filter>
  </defs>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
        <g filter="url(#filter0_i_737_2623)">
            <rect y="0.5" width="29" height="29" rx="7" fill="#FFF4ED"/>
        </g>
        <path d="M12.0889 8.61035C11.8078 8.71195 11.5911 9.01677 11.5911 9.30804C11.5911 9.46723 11.6927 9.70431 11.818 9.82624C12.0483 10.0565 11.9941 10.0532 14.5038 10.0532C17.0169 10.0532 16.9593 10.0565 17.193 9.82624C17.5757 9.44352 17.4233 8.78985 16.9152 8.61373C16.7832 8.5697 16.4512 8.56293 14.4902 8.56293C12.6613 8.56632 12.1939 8.57648 12.0889 8.61035Z" fill="#FF6155"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.43857 20.0614L9.42841 16.2241L9.41959 12.8957C8.4386 12.8818 8.32027 12.8489 8.25078 12.7719C8.23345 12.7527 8.21916 12.7308 8.19527 12.7057C7.85658 12.3501 7.97512 11.7167 8.42219 11.5237C8.50348 11.4864 9.62454 11.4796 14.5017 11.4763H20.4795L20.6319 11.5575C20.8656 11.6795 20.9842 11.8691 20.9977 12.1502C21.0112 12.4009 20.9672 12.533 20.8046 12.7057C20.7816 12.7307 20.768 12.7527 20.7512 12.7718C20.6839 12.8489 20.566 12.8817 19.5843 12.8957L19.5755 16.2241L19.5654 20.0614L19.4908 20.3324C19.3926 20.6846 19.1522 21.1588 18.9388 21.423C18.5628 21.887 17.9938 22.2561 17.3977 22.4255C17.1268 22.5 17.1133 22.5 14.502 22.5C11.8805 22.5 11.8771 22.5 11.6062 22.4221C11.2539 22.3239 10.7798 22.0834 10.5156 21.8734C10.0584 21.5076 9.67904 20.9217 9.51647 20.3324L9.43857 20.0614ZM13.7501 14.3071C13.6959 14.1276 13.4757 13.9075 13.2962 13.8533C13.005 13.7686 12.7205 13.8363 12.5308 14.0362C12.5008 14.0681 12.4754 14.0936 12.4539 14.122C12.3294 14.2863 12.3344 14.5487 12.3344 16.7287V19.0691L12.4224 19.235C12.6595 19.6686 13.2657 19.7363 13.6011 19.3671C13.6654 19.296 13.7331 19.1775 13.7535 19.1063C13.8077 18.9099 13.8043 14.49 13.7501 14.3071ZM16.6357 14.3105C16.5883 14.1446 16.4156 13.9515 16.2462 13.877C16.0972 13.8059 15.8669 13.7991 15.6874 13.8567C15.5248 13.9075 15.3047 14.1378 15.2539 14.3071C15.2234 14.4121 15.2132 15.0218 15.2132 16.7457C15.2132 18.9133 15.22 19.0522 15.2776 19.1809C15.5146 19.6923 16.2394 19.7532 16.5578 19.2858L16.6526 19.147L16.6628 16.7931C16.6696 15.1572 16.6628 14.3986 16.6357 14.3105Z" fill="#FF6155"/>
        <defs>
            <filter id="filter0_i_737_2623" x="0" y="0.5" width="29" height="29" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset/>
            <feGaussianBlur stdDeviation="2"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
            <feBlend mode="multiply" in2="shape" result="effect1_innerShadow_737_2623"/>
            </filter>
        </defs>
        </svg>

  <button class="btn btn-action btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>

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
  }
 

}
</Script>

