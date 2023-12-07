<template>
  <div id="main-wrapper">
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

  <div class="body-wrapper">
        <div class="container-fluid">
          
<!--  Welcome Start -->
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body position-relative">
          <h5 class="card-title fs-6 mb-1">Congratulations Jonathan</h5>
          <p class="mb-0">Welcome to Our Dashboard</p>
          <div class="mt-6">
            <ul class="list-unstyled mb-0">
              <li class="d-flex align-items-center mb-9">
                <div class="bg-success-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                  <iconify-icon icon="solar:cart-5-line-duotone" class="fs-7 text-success"></iconify-icon>
                </div>
                <div>
                  <h6 class="mb-1 fs-4"></h6>
                  <p class="mb-0"></p>
                </div>
              </li>
              <li class="d-flex align-items-center mb-9">
                <div
                  class="bg-warning-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                  <iconify-icon icon="solar:pause-line-duotone" class="fs-6 text-warning"></iconify-icon>
                </div>
                <div>
                  <h6 class="mb-1 fs-4"></h6>
                  <p class="mb-0"></p>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div
                  class="bg-indigo-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                  <iconify-icon icon="solar:bicycling-round-bold-duotone"
                    class="fs-7 text-indigo"></iconify-icon>
                </div>
                <div>
                  <h6 class="mb-1 fs-4"></h6>
                  <p class="mb-0"></p>
                </div>
              </li>
            </ul>
            <div class="man-working-on-laptop">
              <img src="../../assets/images/backgrounds/man-working-on-laptop.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="card-body pb-2">
          <div class="d-flex align-items-baseline justify-content-between">
            <div>
              <h5 class="card-title fs-6 mb-1"></h5>
              <p class="mb-0"></p>
            </div>
            <select class="form-select fw-bold w-auto shadow-none">
              <option value="1">This Week</option>
              <option value="2">April 2023</option>
              <option value="3">May 2023</option>
              <option value="4">June 2023</option>
            </select>
          </div>
          <div id="netsells"></div>
        </div>
      </div>
    </div>
  </div>
 <!--  Welcome End -->


<!-- tution chart -->
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100" style="background: var(--1, linear-gradient(90deg, #FFF4ED -7.21%, rgba(255, 244, 237, 0.00) 105.88%));">
        <div class="card-body position-relative">
          <h5 class="card-title fs-6 mb-1">Tution Chart</h5>
          <p class="mb-0">Welcome to Our Dashboard</p>
          <div class="mt-6">

<div class="row">
  <div class="col-lg-6">
<div class="row">
    <!--single Card -->
    <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg class="card-svg-part" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3060)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#05B9F3" fill-opacity="0.1" shape-rendering="crispEdges"/>
  </g>
  <path d="M19.7676 12C19.2355 12.1939 18.8341 12.5547 18.577 13.0778L18.4327 13.3755L18.4192 17.4433L18.4102 21.5112H19.0956C20.3133 21.5112 21.346 21.7592 22.4239 22.3094C23.168 22.6882 23.7317 23.0986 24.327 23.6894L24.8141 24.172L28.5708 24.1855L32.3229 24.199L32.4808 24.2982C32.9092 24.5643 32.9047 25.1551 32.4717 25.4167C32.3274 25.5023 32.2327 25.5069 29.0217 25.5204C27.2043 25.5249 25.716 25.5474 25.716 25.57C25.716 25.588 25.7837 25.7549 25.8694 25.9398C26.0858 26.4133 26.2888 27.0808 26.3745 27.5949C26.4151 27.8339 26.4557 28.0774 26.4647 28.1316L26.4827 28.2308L29.4051 28.2443C32.2327 28.2578 32.3274 28.2623 32.4717 28.348C32.9047 28.6096 32.9047 29.2139 32.4717 29.4755C32.3274 29.5612 32.2327 29.5657 29.4051 29.5792L26.4827 29.5927L26.4647 29.692C26.4557 29.7461 26.4106 29.9941 26.3745 30.2422C26.2798 30.8059 26.0137 31.6086 25.7386 32.1633C25.2019 33.2322 24.5255 34.0529 23.5558 34.8106L23.3168 35L28.9225 34.991L34.5327 34.9775L34.8484 34.8241C35.2633 34.6212 35.6196 34.2649 35.8225 33.85L35.9759 33.5343L35.9894 25.6557L35.9984 17.777L33.3286 17.7635C30.6678 17.75 30.6543 17.75 30.4964 17.6508C30.4108 17.5967 30.298 17.4839 30.2484 17.4027C30.1627 17.2584 30.1582 17.1637 30.1447 14.5796L30.1311 11.9098H25.0711C20.1915 11.9143 20.0021 11.9143 19.7676 12ZM32.4808 20.2394C32.6882 20.3657 32.7964 20.5596 32.7964 20.7941C32.7964 21.0286 32.6882 21.2225 32.4808 21.3488L32.3229 21.448H27.2043C22.1668 21.448 22.0811 21.448 21.9368 21.3578C21.7339 21.2361 21.6121 21.0286 21.6121 20.7986C21.6121 20.4694 21.8015 20.2394 22.1307 20.1582C22.2029 20.1402 24.53 20.1312 27.2945 20.1312L32.3229 20.1402L32.4808 20.2394Z" fill="#05B9F3"/>
  <path d="M31.4863 14.3474V16.4219H33.5699H35.6579L33.5834 14.3474C32.4424 13.2064 31.5044 12.2729 31.4999 12.2729C31.4908 12.2729 31.4863 13.2064 31.4863 14.3474Z" fill="#05B9F3"/>
  <path d="M18.007 22.8949C15.5356 23.3098 13.4701 25.3933 13.0643 27.8737C12.9786 28.4239 12.9786 29.3981 13.0643 29.9482C13.4701 32.4512 15.5447 34.5257 18.0476 34.9316C18.5978 35.0173 19.5719 35.0173 20.1221 34.9316C22.6251 34.5257 24.6996 32.4512 25.1054 29.9482C25.1911 29.3981 25.1911 28.4239 25.1054 27.8737C24.6996 25.3708 22.6251 23.2963 20.1221 22.8904C19.5945 22.8047 18.5256 22.8092 18.007 22.8949ZM19.4096 25.6504C19.4817 25.6955 19.5854 25.8037 19.6396 25.8894C19.7343 26.0382 19.7388 26.1104 19.7523 27.1341L19.7703 28.2255L20.4062 28.2435C20.9429 28.2571 21.0692 28.2751 21.1954 28.3473C21.6284 28.6043 21.6329 29.1996 21.2045 29.4657C21.0556 29.5604 20.997 29.5649 19.9868 29.5649C18.9766 29.5649 18.918 29.5604 18.7692 29.4657C18.6835 29.4116 18.5707 29.2988 18.5211 29.2177C18.4354 29.0779 18.4309 28.9877 18.4309 27.5806C18.4309 25.9255 18.44 25.8759 18.7196 25.682C18.9135 25.5512 19.2111 25.5377 19.4096 25.6504Z" fill="#05B9F3"/>
  <defs>
    <filter id="filter0_d_737_3060" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.54902 0 0 0 0 0.517647 0 0 0 0 0.517647 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3060"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3060" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

  <div class="col-6 text-end">
    <span  class="badge bg-sky text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Tution Chart</h5>

  </div>
</div>
</div>

  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg class="card-svg-part" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3036)">
    <rect x="2" y="3" width="42" height="42" rx="12" fill="#13C74F" fill-opacity="0.11" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3036)">
    <path d="M14.2355 15.2509C14.1006 15.2861 13.8837 15.462 13.6082 15.7434C11.6971 17.7131 10.4836 20.187 10.0967 22.9012C9.96776 23.8215 9.96776 25.4219 10.0967 26.3365C10.4778 29.0272 11.6971 31.5187 13.5789 33.4649C13.8017 33.6877 14.0537 33.9046 14.1417 33.9398C14.382 34.0277 14.8041 34.0101 15.0327 33.9046C15.4197 33.717 15.6307 33.1191 15.4665 32.6794C15.4314 32.5915 15.1793 32.2749 14.9038 31.9759C13.3913 30.3404 12.4885 28.5289 12.0899 26.3482C11.9433 25.5275 11.9433 23.7102 12.0899 22.8895C12.4006 21.1777 13.0923 19.5597 14.0713 18.2465C14.2413 18.0121 14.6282 17.5607 14.9214 17.2382C15.5134 16.5934 15.619 16.3765 15.5252 15.9779C15.4548 15.6613 15.3024 15.4678 14.9976 15.3096C14.7162 15.1689 14.5579 15.1571 14.2355 15.2509Z" fill="#13C74F"/>
    <path d="M31.3538 15.3698C30.9845 15.5574 30.8262 15.8212 30.8262 16.2315C30.8262 16.6243 30.8672 16.6946 31.4417 17.2926C32.6787 18.5823 33.6342 20.341 34.0739 22.1289C34.3553 23.2721 34.4315 25.0132 34.2498 26.168C33.9039 28.4133 32.9249 30.4006 31.3714 32.0186C30.8496 32.5637 30.7676 32.7044 30.7676 33.0738C30.7676 33.619 31.1486 34 31.6938 34C31.8638 34 32.0749 33.9648 32.1687 33.9179C32.3856 33.8007 33.3001 32.8393 33.7397 32.2589C35.0881 30.4651 35.9088 28.4309 36.2195 26.1153C36.3133 25.4118 36.2957 23.7 36.1902 22.9203C35.8208 20.2648 34.6542 17.8378 32.837 15.9384C32.4383 15.5281 32.239 15.358 32.069 15.3111C31.7466 15.2115 31.6528 15.2232 31.3538 15.3698Z" fill="#13C74F"/>
    <path d="M18.5405 18.1733C18.1946 18.3374 17.5204 19.0878 17.028 19.8499C16.4711 20.7175 16.0549 21.7141 15.7969 22.7752C15.6914 23.2383 15.6738 23.4786 15.6738 24.6276C15.6738 25.7766 15.6914 26.017 15.7969 26.4801C16.1604 27.975 16.817 29.2764 17.7725 30.3902C18.3294 31.0351 18.5639 31.1934 18.9626 31.1934C19.4726 31.1934 19.795 30.953 19.9181 30.484C20.0178 30.1147 19.9064 29.8392 19.4726 29.3643C18.517 28.3209 17.9073 27.1425 17.667 25.8587C17.5439 25.2315 17.5439 24.0238 17.667 23.3966C17.9015 22.1362 18.5229 20.9168 19.4139 19.9496C19.9298 19.3985 20.0178 19.0702 19.795 18.613C19.5722 18.1499 18.9977 17.9505 18.5405 18.1733Z" fill="#13C74F"/>
    <path d="M26.8581 18.115C26.6647 18.1912 26.3774 18.5664 26.3305 18.7892C26.2602 19.1761 26.3423 19.3754 26.823 19.9147C27.4385 20.6182 27.673 20.9465 27.9837 21.5561C29.0917 23.7252 28.9334 26.3456 27.5733 28.3857C27.4561 28.5733 27.1337 28.9778 26.864 29.2826C26.3423 29.8747 26.2602 30.0623 26.3364 30.4609C26.3599 30.584 26.4654 30.7716 26.5943 30.9123C26.7995 31.1292 26.8464 31.1526 27.1688 31.1761C27.4268 31.1937 27.5792 31.1702 27.7433 31.094C27.9837 30.9826 28.6754 30.2264 29.1268 29.5816C29.502 29.054 30.012 28.0105 30.2289 27.348C30.5631 26.3163 30.6158 25.9294 30.6158 24.6221C30.6158 23.6666 30.5924 23.3148 30.5045 22.9221C30.1586 21.3451 29.4668 19.9558 28.4234 18.7657C27.9251 18.1912 27.7082 18.0564 27.3095 18.0622C27.1278 18.0622 26.9285 18.0857 26.8581 18.115Z" fill="#13C74F"/>
    <path d="M22.5241 22.8009C22.0433 22.9416 21.463 23.5278 21.3282 24.0144C21.2988 24.1317 21.2695 24.4072 21.2695 24.6241C21.2695 25.7145 22.0492 26.4883 23.1455 26.4883C24.2476 26.4883 25.0214 25.7145 25.0214 24.6124C25.0214 23.4985 24.2417 22.7306 23.1279 22.7423C22.8934 22.7423 22.6237 22.7716 22.5241 22.8009Z" fill="#13C74F"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3036" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3036"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3036" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3036" x="8.5" y="12.6904" width="31.2808" height="23.8096" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3036"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3036" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

   <div class="col-6 text-end">
    <span  class="badge bg-green text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Live Tution</h5>

  </div>
</div>
</div>

  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg class="card-svg-part" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3026)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#FFA926" fill-opacity="0.2" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3026)">
    <path d="M18.1133 10.9231C18.0367 10.9504 17.9165 11.0324 17.8509 11.098C17.6158 11.3166 17.5666 11.4806 17.5666 12.0655V12.6121H16.8342C16.4242 12.6121 15.894 12.6504 15.6262 12.6941C13.8223 13.0112 12.3847 14.4542 12.0731 16.2581C11.9966 16.6899 11.9912 17.6793 12.0076 24.2605C12.024 32.5472 11.9966 31.8967 12.3574 32.7549C12.8985 34.0449 14.1066 35.0288 15.5059 35.3185C15.8667 35.3951 16.5663 35.406 20.7698 35.406C25.3614 35.406 25.6128 35.4005 25.5746 35.3076C25.3286 34.7063 25.3067 34.6025 25.3067 33.9575C25.3013 33.2031 25.3505 33.0173 25.7713 32.1536C26.2633 31.1533 27.1324 30.1585 28.0398 29.5627L28.4498 29.2948L28.2639 29.0817C27.5588 28.3 27.1324 27.163 27.1324 26.0589C27.1324 23.0525 29.9803 20.8387 32.8992 21.5766C33.4021 21.7023 34.0963 22.0303 34.468 22.3091C34.6101 22.4184 34.7358 22.5059 34.7522 22.5059C34.7686 22.5059 34.785 21.1667 34.785 19.5268C34.785 16.2854 34.7686 16.105 34.4735 15.3561C34.1564 14.569 33.4677 13.7491 32.7352 13.2954C31.9645 12.8089 31.15 12.6121 29.9694 12.6121H29.2642V12.1038C29.2642 11.4642 29.144 11.1855 28.7723 10.9887C28.4771 10.8302 28.2585 10.8302 27.9523 10.9832C27.5533 11.1909 27.4932 11.3221 27.4713 12.0163L27.4495 12.6121H23.3826H19.3158V12.0436C19.3158 11.4314 19.2502 11.251 18.9222 11.0105C18.7528 10.8848 18.3155 10.8356 18.1133 10.9231ZM19.3049 14.0771L19.2885 15.4928L19.1409 15.7114C18.8731 16.1159 18.3428 16.2253 17.9547 15.9519C17.6104 15.706 17.5994 15.6294 17.5776 14.0716L17.5557 12.6668H18.4412H19.3267L19.3049 14.0771ZM29.1986 14.1098C29.1822 15.7224 29.1822 15.706 28.7723 15.9847C28.4115 16.2307 27.8594 16.0831 27.6298 15.6732C27.5205 15.4764 27.5151 15.3944 27.5151 14.0661V12.6668H28.3623H29.215L29.1986 14.1098ZM21.6499 20.4069C22.1746 20.8004 22.1145 21.5657 21.5351 21.8445C21.3164 21.9538 21.2126 21.9593 19.3814 21.9593C17.2715 21.9593 17.2387 21.9538 16.9435 21.6368C16.8123 21.5001 16.7795 21.4072 16.7576 21.1557C16.7412 20.8934 16.7576 20.8059 16.867 20.6528C16.9326 20.549 17.0802 20.4233 17.184 20.3631C17.3644 20.2702 17.512 20.2647 19.4361 20.2757C21.4312 20.2921 21.4968 20.2975 21.6499 20.4069ZM23.8363 25.0531C23.9183 25.1132 24.044 25.2499 24.1151 25.3483C24.3556 25.709 24.208 26.2611 23.7981 26.4907C23.5958 26.6055 23.5466 26.6055 20.4801 26.6055C17.5612 26.6055 17.3644 26.6 17.184 26.5016C17.0802 26.447 16.9326 26.3212 16.867 26.2174C16.7576 26.0643 16.7412 25.9769 16.7576 25.7145C16.7795 25.4631 16.8123 25.3701 16.9435 25.2335C17.2496 24.9055 17.1457 24.911 20.5566 24.9274C23.6286 24.9383 23.6833 24.9383 23.8363 25.0531Z" fill="#FFA926"/>
    <path d="M30.8515 22.6483C29.6981 22.9489 28.7142 23.9219 28.3589 25.1026C28.2223 25.5563 28.2223 26.562 28.3589 27.0157C28.7088 28.191 29.72 29.1803 30.8515 29.47L31.1521 29.5466L30.9335 29.5848C30.4579 29.6613 29.7145 29.9019 29.2991 30.1041C27.8998 30.7874 26.7027 32.225 26.4184 33.5533C26.2217 34.4606 26.7792 35.4992 27.6538 35.849L27.9818 35.9802L31.4254 35.9966C33.601 36.0076 35.0276 35.9912 35.2955 35.9584C36.2575 35.8272 36.9189 35.204 37.0938 34.2639C37.2524 33.4221 36.6784 32.1594 35.689 31.1645C34.8309 30.3064 33.9289 29.8472 32.546 29.5794L32.3547 29.5411L32.6553 29.47C33.8852 29.1585 34.9402 28.0707 35.1971 26.8353C35.5961 24.955 34.4646 23.1129 32.628 22.6428C32.218 22.5389 31.256 22.5389 30.8515 22.6483Z" fill="#FFA926"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3026" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3026"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3026" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3026" x="10.5" y="8.36914" width="30.1201" height="30.1309" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3026"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3026" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

  <div class="col-6 text-end">
    <span  class="badge bg-yellow text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Appointed Tuition</h5>

  </div>
</div>
</div>
  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg class="card-svg-part" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3071)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#FF6155" fill-opacity="0.2" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3071)">
    <path d="M17.0622 15.1187C16.7222 15.2632 16.2547 15.7307 16.1187 16.0792C15.9657 16.4447 15.9657 17.0568 16.1272 17.4478C16.2207 17.6603 17.1982 18.6973 19.1278 20.6269L21.9924 23.5L19.0938 26.4071C15.9402 29.5777 15.9487 29.5692 16.0167 30.4277C16.0847 31.2608 16.7392 31.9153 17.5637 31.9833C18.4393 32.0513 18.4223 32.0598 21.5929 28.9147L24.5 26.0076L27.4156 28.9147C30.5777 32.0598 30.5692 32.0513 31.4277 31.9833C32.2608 31.9153 32.9153 31.2608 32.9833 30.4362C33.0513 29.5607 33.0598 29.5777 29.9147 26.4071L27.0076 23.5L29.9147 20.5844C33.0598 17.4223 33.0513 17.4393 32.9833 16.5637C32.9153 15.7392 32.2608 15.0847 31.4277 15.0167C30.5692 14.9487 30.5777 14.9402 27.4071 18.0938L24.5 20.9924L21.6269 18.1278C19.6973 16.1982 18.6603 15.2207 18.4478 15.1272C18.0653 14.9742 17.4107 14.9657 17.0622 15.1187Z" fill="#FF6155"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3071" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3071"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3071" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3071" x="14.5" y="12.5" width="22" height="22" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3071"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3071" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

  <div class="col-6 text-end">
    <span  class="badge bg-red text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Cancelled Tuition</h5>

  </div>
</div>
</div>

  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg class="card-svg-part" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3049)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#7C6FFD" fill-opacity="0.2" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3049)">
    <path d="M23.3906 14.0598C23.1375 14.1348 12.5109 19.4363 12.2906 19.6051C12.1031 19.7457 12 19.9379 12 20.1582C12 20.3926 12.1078 20.5754 12.3422 20.7348C12.8297 21.0723 22.9969 27.2785 23.2359 27.391C23.475 27.4988 23.5641 27.5176 24 27.5176C24.4359 27.5176 24.525 27.4988 24.7641 27.391C25.0031 27.2785 35.1703 21.0723 35.6578 20.7348C35.8922 20.5754 36 20.3926 36 20.1582C36 19.9379 35.8969 19.7457 35.7094 19.6051C35.4703 19.4223 24.8484 14.1301 24.5859 14.0598C24.2953 13.9801 23.6719 13.9801 23.3906 14.0598Z" fill="#7C6FFD"/>
    <path d="M34.6961 23.0973C34.5555 23.177 34.3727 23.3082 34.2836 23.3926L34.1243 23.5426V26.9879V30.4285L33.8711 30.6441C33.5383 30.9395 33.4071 31.216 33.4024 31.6426C33.3977 32.3645 33.9133 32.8848 34.6399 32.8848C35.3149 32.8801 35.8352 32.4207 35.8914 31.7645C35.9336 31.3051 35.7508 30.8879 35.3852 30.616L35.2024 30.4754L35.1977 26.8426C35.193 24.841 35.1789 23.1535 35.1602 23.0879C35.1133 22.9238 34.9868 22.9238 34.6961 23.0973Z" fill="#7C6FFD"/>
    <path d="M32.4094 24.1848C32.1797 24.3207 30.5578 25.3145 28.8047 26.3926C27.0563 27.466 25.5047 28.4082 25.3594 28.4832C24.9938 28.6707 24.4313 28.8066 24 28.8066C23.5828 28.8066 23.0063 28.6707 22.6641 28.4973C22.5375 28.427 20.8781 27.4238 18.9844 26.2613C17.0906 25.0988 15.4594 24.1191 15.3656 24.0863C15.1453 24.0113 14.9719 24.0676 14.8922 24.2457C14.85 24.3441 14.836 24.9863 14.836 26.8145C14.836 29.5473 14.8266 29.4535 15.1875 30.0723C16.0172 31.4973 18.225 32.7441 20.8641 33.2832C22.0688 33.5316 22.4297 33.5645 24 33.5645C25.5703 33.5645 25.9313 33.5316 27.136 33.2832C30.1125 32.6738 32.4985 31.1738 33.0563 29.5613C33.1641 29.252 33.1641 29.2379 33.1641 26.6926C33.1641 24.2363 33.1594 24.1238 33.075 24.0301C33.0235 23.9738 32.9485 23.9316 32.9063 23.9316C32.8641 23.9316 32.6391 24.0441 32.4094 24.1848Z" fill="#7C6FFD"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3049" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3049"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3049" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3049" x="10.5" y="11.5" width="29" height="24.5645" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3049"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3049" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

  <div class="col-6 text-end">
    <span  class="badge bg-purpal text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Total Tuition</h5>

  </div>
</div>
</div>



</div>
  </div>
  <div class="col-lg-6 text-center">
    <img src="../../images/assets/pi.png" alt="">
  </div>
</div>


</div>
</div>

</div>
</div>
</div>
<!-- tution chart end -->

<!-- Gurdian chart -->
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100" style="background: var(--1, linear-gradient(90deg, #FFF4ED -7.21%, rgba(255, 244, 237, 0.00) 105.88%));">
        <div class="card-body position-relative">
          <h5 class="card-title fs-6 mb-1">Gurdian Chart</h5>
          <p class="mb-0">Welcome to Our Dashboard</p>
          <div class="mt-6">

<div class="row">
  <div class="col-lg-6">
<div class="row">
    <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3118)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#0675C1" fill-opacity="0.1" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3118)">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7788 16.5173C18.0217 13.8278 19.3751 11.9539 21.5961 11.2425C22.5157 10.9475 25.1878 10.9128 26.1248 11.1904C27.0444 11.4507 28.4846 12.3877 28.9704 13.047C29.6124 13.9146 30.0636 15.2853 30.1677 16.7429C30.2197 17.489 30.3412 18.1483 30.428 18.2004C30.7056 18.3739 30.5841 20.352 30.2197 21.0287C30.0289 21.4104 29.8207 21.7401 29.7513 21.7748C29.6645 21.7921 29.3348 22.3647 29.0051 23.0241C28.3111 24.4469 26.7668 26.1126 25.691 26.5985C23.2965 27.6743 20.5377 26.2341 18.924 23.0241C18.5943 22.3821 18.1605 21.688 17.9696 21.4625C17.4144 20.8378 17.1541 19.3109 17.4491 18.3913C17.5879 17.9922 17.7267 17.142 17.7788 16.5173ZM27.3221 16.6735C27.0271 16.552 25.8645 16.4652 24.4938 16.4479C23.2098 16.4305 21.8043 16.3611 21.3705 16.2917C20.6591 16.1703 20.5203 16.205 20.0518 16.5867C19.7568 16.8296 19.3751 17.3675 19.2016 17.784C19.0107 18.2004 18.7158 18.6342 18.5596 18.7556C17.987 19.1721 18.3514 21.393 18.9934 21.393C19.0975 21.393 19.3404 21.7574 19.5313 22.1912C20.4162 24.3601 22.3248 25.9738 23.9732 25.9738C25.5522 25.9565 27.2179 24.6204 28.1896 22.5903C28.502 21.9483 28.849 21.4104 28.9531 21.4104C29.6298 21.3757 29.9595 19.1721 29.3695 18.7556C29.1787 18.6168 28.9704 18.3045 28.9184 18.0616C28.7969 17.5584 27.8079 16.3264 27.7905 16.6561C27.7905 16.8296 27.6864 16.8296 27.3221 16.6735ZM14.1342 28.6638C14.8109 28.0218 15.7653 27.6574 17.1534 27.5013C19.1488 27.2584 19.2355 27.2757 19.357 27.5533C19.4958 27.9351 20.4501 28.473 21.5259 28.7853C23.8857 29.462 27.6857 28.8373 28.5359 27.6401C28.7788 27.3104 28.8656 27.2931 30.4793 27.4839C31.4509 27.588 32.4747 27.8136 32.8217 27.9871C34.1057 28.6465 35.1468 30.104 35.8408 32.2209C36.3614 33.8346 35.5979 35.0318 33.6546 35.6738C31.0345 36.524 28.2236 36.871 23.9725 36.871C18.1598 36.871 14.0822 36.0902 12.6594 34.7368C12.0694 34.1816 12 34.0254 12 33.2446C12 31.8218 12.937 29.7917 14.1342 28.6638Z" fill="#0675C1"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3118" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3118"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3118" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3118" x="10.5" y="8.50049" width="29" height="30.8706" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3118"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3118" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

 <div class="col-6 text-end">
    <span  class="badge bg-navi text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Male Guardian</h5>

  </div>
</div>
</div>

  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3110)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#FD6F71" fill-opacity="0.15" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3110)">
    <path d="M22.4155 10.7307C18.9223 11.3306 17.017 14.7884 17.4051 19.7635C17.4933 20.8397 17.5639 22.6392 17.5639 23.7507C17.5639 25.5149 17.5109 25.8854 17.1581 26.6087C16.8053 27.3321 16.6641 27.4379 16.0643 27.5438C14.6705 27.7731 13.4003 29.061 12.5358 31.1075C11.5479 33.401 11.9007 34.6359 13.8061 35.5357C15.8879 36.5237 19.1517 36.9824 23.9504 37C28.8902 37 32.0481 36.5413 34.1828 35.5533C35.6295 34.8653 36 34.3889 36 33.1364C36 32.3601 35.8589 31.8661 35.2943 30.7017C34.4828 29.0081 33.3713 27.9142 32.1893 27.6143C31.7659 27.5085 31.3248 27.2968 31.1837 27.1203C30.478 26.3088 30.231 24.1741 30.5485 21.5454C30.9367 18.4404 30.725 16.1469 29.8781 14.2415C29.1019 12.4597 27.8669 11.2953 26.3321 10.8895C25.397 10.6249 23.4387 10.5543 22.4155 10.7307ZM22.6448 16.3233C23.1388 16.6056 24.7266 17.4171 26.138 18.1581C28.4491 19.3401 28.7667 19.446 28.996 19.2166C29.4018 18.8109 29.6488 19.0931 29.6488 19.9752C29.6488 20.6104 29.5429 20.875 29.1725 21.2631C28.8902 21.5454 28.4668 22.2158 28.1845 22.7627C27.6023 23.9624 26.4732 25.2503 25.5558 25.709C23.6152 26.6969 21.3746 25.5678 19.9632 22.8686C19.628 22.2335 19.2046 21.616 19.0458 21.4925C18.4107 21.0514 18.199 18.9873 18.7812 18.9873C18.9047 18.9873 19.0987 18.6168 19.2222 18.1581C19.5751 16.7644 20.4043 15.9705 21.5863 15.8293C21.6569 15.8117 22.1332 16.041 22.6448 16.3233ZM21.4275 26.1324C22.292 26.8028 23.4387 27.138 24.3914 27.0321C25.2735 26.9439 26.4379 26.4323 26.8084 25.9736C27.1083 25.6208 27.5317 25.6031 27.5317 25.9383C27.5317 26.0795 27.7787 26.397 28.061 26.644C28.6961 27.1733 28.6255 27.4908 27.6729 28.1965C26.4379 29.1139 25.7851 29.308 24.0033 29.308C22.5566 29.308 22.2038 29.2374 21.4628 28.8669C20.9865 28.6199 20.3161 28.1612 19.9809 27.8437L19.381 27.2438L20.0161 26.6617C20.369 26.3441 20.6513 25.9912 20.6513 25.8854C20.6513 25.6031 20.7924 25.6384 21.4275 26.1324Z" fill="#D81B60"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3110" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3110"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3110" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3110" x="10.5" y="8.13367" width="29" height="31.3663" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3110"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3110" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

   <div class="col-6 text-end">
    <span  class="badge bg-pink text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Female Guardian</h5>

  </div>
</div>
</div>

  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3128)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#7C6FFD" fill-opacity="0.15" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3128)">
    <path d="M28.9317 13.9666C26.0855 14.4519 24.5331 17.2496 24.8493 21.2749C24.9212 22.1456 24.9787 23.6016 24.9787 24.5009C24.9787 25.9283 24.9356 26.228 24.6481 26.8133C24.3606 27.3985 24.2456 27.4842 23.7568 27.5698C22.6212 27.7554 21.5863 28.7974 20.8819 30.4532C20.0769 32.3088 20.3644 33.308 21.9169 34.036C23.6131 34.8353 26.2724 35.2064 30.1823 35.2207C34.2072 35.2207 36.7803 34.8496 38.5196 34.0502C39.6984 33.4935 40.0002 33.1081 40.0002 32.0947C40.0002 31.4666 39.8852 31.0669 39.4253 30.1249C38.764 28.7545 37.8584 27.8696 36.8953 27.6269C36.5503 27.5412 36.1909 27.37 36.0759 27.2272C35.501 26.5706 35.2997 24.8434 35.5585 22.7166C35.8747 20.2044 35.7022 18.3487 35.0122 16.8071C34.3797 15.3655 33.3735 14.4234 32.1229 14.0951C31.3611 13.881 29.7655 13.8239 28.9317 13.9666ZM29.1186 18.4915C29.5211 18.7199 30.8148 19.3765 31.9648 19.976C33.8479 20.9323 34.1066 21.018 34.2935 20.8324C34.6241 20.5041 34.8254 20.7325 34.8254 21.4462C34.8254 21.9601 34.7391 22.1742 34.4372 22.4882C34.2072 22.7166 33.8622 23.259 33.6323 23.7015C33.1579 24.6722 32.2379 25.7142 31.4904 26.0853C29.9092 26.8846 28.0836 25.9711 26.9336 23.7872C26.6605 23.2733 26.3155 22.7737 26.1862 22.6738C25.6687 22.3169 25.4962 20.6469 25.9705 20.6469C26.0712 20.6469 26.2293 20.3471 26.3299 19.976C26.6174 18.8483 27.293 18.206 28.2561 18.0918C28.3136 18.0775 28.7017 18.2631 29.1186 18.4915ZM28.1267 26.4279C28.8311 26.9703 29.7655 27.2415 30.5417 27.1558C31.2604 27.0845 32.2092 26.6705 32.511 26.2994C32.7554 26.0139 33.1004 25.9996 33.1004 26.2709C33.1004 26.385 33.3016 26.642 33.5316 26.8418C34.0491 27.27 33.9916 27.527 33.2154 28.0979C32.2092 28.8402 31.6773 28.9972 30.2254 28.9972C29.0467 28.9972 28.7592 28.9401 28.1555 28.6404C27.7674 28.4405 27.2211 28.0694 26.948 27.8125L26.4593 27.3271L26.9768 26.8561C27.2643 26.5992 27.4943 26.3137 27.4943 26.228C27.4943 25.9996 27.6093 26.0282 28.1267 26.4279Z" fill="#FF6155"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1347 17.9037C13.3506 15.5131 14.5536 13.8474 16.5278 13.2151C17.3452 12.9529 19.7203 12.9221 20.5532 13.1688C21.3706 13.4002 22.6507 14.233 23.0826 14.8191C23.6532 15.5902 24.0542 16.8086 24.1467 18.1042C24.193 18.7674 24.301 19.3534 24.3781 19.3997C24.6249 19.5539 24.5169 21.3122 24.193 21.9137C24.0234 22.253 23.8383 22.546 23.7766 22.5768C23.6995 22.5923 23.4064 23.1012 23.1134 23.6873C22.4965 24.952 21.1238 26.4326 20.1676 26.8644C18.0392 27.8207 15.587 26.5405 14.1526 23.6873C13.8596 23.1166 13.474 22.4997 13.3044 22.2992C12.8108 21.744 12.5795 20.3868 12.8417 19.5694C12.9651 19.2146 13.0885 18.4589 13.1347 17.9037ZM21.6174 18.0425C21.3552 17.9345 20.3218 17.8574 19.1034 17.842C17.9621 17.8266 16.7129 17.7649 16.3273 17.7032C15.6949 17.5952 15.5716 17.6261 15.1551 17.9654C14.8929 18.1813 14.5536 18.6594 14.3994 19.0296C14.2298 19.3997 13.9676 19.7853 13.8288 19.8932C13.3198 20.2634 13.6437 22.2375 14.2143 22.2375C14.3069 22.2375 14.5228 22.5614 14.6924 22.947C15.479 24.8749 17.1755 26.3092 18.6407 26.3092C20.0442 26.2938 21.5248 25.1062 22.3885 23.3017C22.6661 22.7311 22.9746 22.253 23.0671 22.253C23.6686 22.2221 23.9617 20.2634 23.4373 19.8932C23.2676 19.7699 23.0826 19.4922 23.0363 19.2763C22.9283 18.8291 22.0492 17.734 22.0338 18.0271C22.0338 18.1813 21.9413 18.1813 21.6174 18.0425ZM9.89703 28.7014C10.4985 28.1307 11.3468 27.8068 12.5806 27.668C14.3543 27.4521 14.4314 27.4675 14.5393 27.7143C14.6627 28.0536 15.511 28.5317 16.4672 28.8093C18.5647 29.4108 21.9424 28.8556 22.6981 27.7914C22.914 27.4984 22.9911 27.4829 24.4255 27.6526C25.2892 27.7451 26.1991 27.9456 26.5076 28.0999C27.6489 28.6859 28.5743 29.9815 29.1912 31.8631C29.6539 33.2974 28.9753 34.3616 27.2479 34.9322C24.919 35.688 22.4205 35.9964 18.6419 35.9964C13.4752 35.9964 9.85076 35.3024 8.58607 34.0994C8.06169 33.6059 8 33.4671 8 32.773C8 31.5083 8.83284 29.7038 9.89703 28.7014Z" fill="#0675C1"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3128" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3128"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3128" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3128" x="6.5" y="10.5" width="37" height="27.9965" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3128"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3128" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

   <div class="col-6 text-end">
    <span  class="badge bg-purpal text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Total Guardian</h5>

  </div>
</div>
</div>




</div>
  </div>
  <div class="col-lg-6 text-center">
    <img src="../../images/assets/pi.png" alt="">
  </div>
</div>


</div>
</div>

</div>
</div>
</div>
<!-- Gurdian chart end -->

<!-- Tutor chart -->
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100" style="background: var(--1, linear-gradient(90deg, #FFF4ED -7.21%, rgba(255, 244, 237, 0.00) 105.88%));">
        <div class="card-body position-relative">
          <h5 class="card-title fs-6 mb-1">Tutor Chart</h5>
          <p class="mb-0">Welcome to Our Dashboard</p>
          <div class="mt-6">

<div class="row">

  <div class="col-lg-6">
<div class="row">
    <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3118)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#0675C1" fill-opacity="0.1" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3118)">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7788 16.5173C18.0217 13.8278 19.3751 11.9539 21.5961 11.2425C22.5157 10.9475 25.1878 10.9128 26.1248 11.1904C27.0444 11.4507 28.4846 12.3877 28.9704 13.047C29.6124 13.9146 30.0636 15.2853 30.1677 16.7429C30.2197 17.489 30.3412 18.1483 30.428 18.2004C30.7056 18.3739 30.5841 20.352 30.2197 21.0287C30.0289 21.4104 29.8207 21.7401 29.7513 21.7748C29.6645 21.7921 29.3348 22.3647 29.0051 23.0241C28.3111 24.4469 26.7668 26.1126 25.691 26.5985C23.2965 27.6743 20.5377 26.2341 18.924 23.0241C18.5943 22.3821 18.1605 21.688 17.9696 21.4625C17.4144 20.8378 17.1541 19.3109 17.4491 18.3913C17.5879 17.9922 17.7267 17.142 17.7788 16.5173ZM27.3221 16.6735C27.0271 16.552 25.8645 16.4652 24.4938 16.4479C23.2098 16.4305 21.8043 16.3611 21.3705 16.2917C20.6591 16.1703 20.5203 16.205 20.0518 16.5867C19.7568 16.8296 19.3751 17.3675 19.2016 17.784C19.0107 18.2004 18.7158 18.6342 18.5596 18.7556C17.987 19.1721 18.3514 21.393 18.9934 21.393C19.0975 21.393 19.3404 21.7574 19.5313 22.1912C20.4162 24.3601 22.3248 25.9738 23.9732 25.9738C25.5522 25.9565 27.2179 24.6204 28.1896 22.5903C28.502 21.9483 28.849 21.4104 28.9531 21.4104C29.6298 21.3757 29.9595 19.1721 29.3695 18.7556C29.1787 18.6168 28.9704 18.3045 28.9184 18.0616C28.7969 17.5584 27.8079 16.3264 27.7905 16.6561C27.7905 16.8296 27.6864 16.8296 27.3221 16.6735ZM14.1342 28.6638C14.8109 28.0218 15.7653 27.6574 17.1534 27.5013C19.1488 27.2584 19.2355 27.2757 19.357 27.5533C19.4958 27.9351 20.4501 28.473 21.5259 28.7853C23.8857 29.462 27.6857 28.8373 28.5359 27.6401C28.7788 27.3104 28.8656 27.2931 30.4793 27.4839C31.4509 27.588 32.4747 27.8136 32.8217 27.9871C34.1057 28.6465 35.1468 30.104 35.8408 32.2209C36.3614 33.8346 35.5979 35.0318 33.6546 35.6738C31.0345 36.524 28.2236 36.871 23.9725 36.871C18.1598 36.871 14.0822 36.0902 12.6594 34.7368C12.0694 34.1816 12 34.0254 12 33.2446C12 31.8218 12.937 29.7917 14.1342 28.6638Z" fill="#0675C1"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3118" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3118"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3118" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3118" x="10.5" y="8.50049" width="29" height="30.8706" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3118"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3118" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

 <div class="col-6 text-end">
    <span  class="badge bg-navi text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Male Guardian</h5>

  </div>
</div>
</div>

  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3110)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#FD6F71" fill-opacity="0.15" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3110)">
    <path d="M22.4155 10.7307C18.9223 11.3306 17.017 14.7884 17.4051 19.7635C17.4933 20.8397 17.5639 22.6392 17.5639 23.7507C17.5639 25.5149 17.5109 25.8854 17.1581 26.6087C16.8053 27.3321 16.6641 27.4379 16.0643 27.5438C14.6705 27.7731 13.4003 29.061 12.5358 31.1075C11.5479 33.401 11.9007 34.6359 13.8061 35.5357C15.8879 36.5237 19.1517 36.9824 23.9504 37C28.8902 37 32.0481 36.5413 34.1828 35.5533C35.6295 34.8653 36 34.3889 36 33.1364C36 32.3601 35.8589 31.8661 35.2943 30.7017C34.4828 29.0081 33.3713 27.9142 32.1893 27.6143C31.7659 27.5085 31.3248 27.2968 31.1837 27.1203C30.478 26.3088 30.231 24.1741 30.5485 21.5454C30.9367 18.4404 30.725 16.1469 29.8781 14.2415C29.1019 12.4597 27.8669 11.2953 26.3321 10.8895C25.397 10.6249 23.4387 10.5543 22.4155 10.7307ZM22.6448 16.3233C23.1388 16.6056 24.7266 17.4171 26.138 18.1581C28.4491 19.3401 28.7667 19.446 28.996 19.2166C29.4018 18.8109 29.6488 19.0931 29.6488 19.9752C29.6488 20.6104 29.5429 20.875 29.1725 21.2631C28.8902 21.5454 28.4668 22.2158 28.1845 22.7627C27.6023 23.9624 26.4732 25.2503 25.5558 25.709C23.6152 26.6969 21.3746 25.5678 19.9632 22.8686C19.628 22.2335 19.2046 21.616 19.0458 21.4925C18.4107 21.0514 18.199 18.9873 18.7812 18.9873C18.9047 18.9873 19.0987 18.6168 19.2222 18.1581C19.5751 16.7644 20.4043 15.9705 21.5863 15.8293C21.6569 15.8117 22.1332 16.041 22.6448 16.3233ZM21.4275 26.1324C22.292 26.8028 23.4387 27.138 24.3914 27.0321C25.2735 26.9439 26.4379 26.4323 26.8084 25.9736C27.1083 25.6208 27.5317 25.6031 27.5317 25.9383C27.5317 26.0795 27.7787 26.397 28.061 26.644C28.6961 27.1733 28.6255 27.4908 27.6729 28.1965C26.4379 29.1139 25.7851 29.308 24.0033 29.308C22.5566 29.308 22.2038 29.2374 21.4628 28.8669C20.9865 28.6199 20.3161 28.1612 19.9809 27.8437L19.381 27.2438L20.0161 26.6617C20.369 26.3441 20.6513 25.9912 20.6513 25.8854C20.6513 25.6031 20.7924 25.6384 21.4275 26.1324Z" fill="#D81B60"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3110" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3110"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3110" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3110" x="10.5" y="8.13367" width="29" height="31.3663" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3110"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3110" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

   <div class="col-6 text-end">
    <span  class="badge bg-pink text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Female Guardian</h5>

  </div>
</div>
</div>

  <!--single Card -->
  <div class="col-6">
    <div class="card w-80">
      <div class="card-body position-relative">
<div class="row">

  <div class="col-6">
<!-- svg -->

<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
  <g filter="url(#filter0_d_737_3128)">
    <rect x="3" y="3" width="42" height="42" rx="12" fill="#7C6FFD" fill-opacity="0.15" shape-rendering="crispEdges"/>
  </g>
  <g filter="url(#filter1_d_737_3128)">
    <path d="M28.9317 13.9666C26.0855 14.4519 24.5331 17.2496 24.8493 21.2749C24.9212 22.1456 24.9787 23.6016 24.9787 24.5009C24.9787 25.9283 24.9356 26.228 24.6481 26.8133C24.3606 27.3985 24.2456 27.4842 23.7568 27.5698C22.6212 27.7554 21.5863 28.7974 20.8819 30.4532C20.0769 32.3088 20.3644 33.308 21.9169 34.036C23.6131 34.8353 26.2724 35.2064 30.1823 35.2207C34.2072 35.2207 36.7803 34.8496 38.5196 34.0502C39.6984 33.4935 40.0002 33.1081 40.0002 32.0947C40.0002 31.4666 39.8852 31.0669 39.4253 30.1249C38.764 28.7545 37.8584 27.8696 36.8953 27.6269C36.5503 27.5412 36.1909 27.37 36.0759 27.2272C35.501 26.5706 35.2997 24.8434 35.5585 22.7166C35.8747 20.2044 35.7022 18.3487 35.0122 16.8071C34.3797 15.3655 33.3735 14.4234 32.1229 14.0951C31.3611 13.881 29.7655 13.8239 28.9317 13.9666ZM29.1186 18.4915C29.5211 18.7199 30.8148 19.3765 31.9648 19.976C33.8479 20.9323 34.1066 21.018 34.2935 20.8324C34.6241 20.5041 34.8254 20.7325 34.8254 21.4462C34.8254 21.9601 34.7391 22.1742 34.4372 22.4882C34.2072 22.7166 33.8622 23.259 33.6323 23.7015C33.1579 24.6722 32.2379 25.7142 31.4904 26.0853C29.9092 26.8846 28.0836 25.9711 26.9336 23.7872C26.6605 23.2733 26.3155 22.7737 26.1862 22.6738C25.6687 22.3169 25.4962 20.6469 25.9705 20.6469C26.0712 20.6469 26.2293 20.3471 26.3299 19.976C26.6174 18.8483 27.293 18.206 28.2561 18.0918C28.3136 18.0775 28.7017 18.2631 29.1186 18.4915ZM28.1267 26.4279C28.8311 26.9703 29.7655 27.2415 30.5417 27.1558C31.2604 27.0845 32.2092 26.6705 32.511 26.2994C32.7554 26.0139 33.1004 25.9996 33.1004 26.2709C33.1004 26.385 33.3016 26.642 33.5316 26.8418C34.0491 27.27 33.9916 27.527 33.2154 28.0979C32.2092 28.8402 31.6773 28.9972 30.2254 28.9972C29.0467 28.9972 28.7592 28.9401 28.1555 28.6404C27.7674 28.4405 27.2211 28.0694 26.948 27.8125L26.4593 27.3271L26.9768 26.8561C27.2643 26.5992 27.4943 26.3137 27.4943 26.228C27.4943 25.9996 27.6093 26.0282 28.1267 26.4279Z" fill="#FF6155"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1347 17.9037C13.3506 15.5131 14.5536 13.8474 16.5278 13.2151C17.3452 12.9529 19.7203 12.9221 20.5532 13.1688C21.3706 13.4002 22.6507 14.233 23.0826 14.8191C23.6532 15.5902 24.0542 16.8086 24.1467 18.1042C24.193 18.7674 24.301 19.3534 24.3781 19.3997C24.6249 19.5539 24.5169 21.3122 24.193 21.9137C24.0234 22.253 23.8383 22.546 23.7766 22.5768C23.6995 22.5923 23.4064 23.1012 23.1134 23.6873C22.4965 24.952 21.1238 26.4326 20.1676 26.8644C18.0392 27.8207 15.587 26.5405 14.1526 23.6873C13.8596 23.1166 13.474 22.4997 13.3044 22.2992C12.8108 21.744 12.5795 20.3868 12.8417 19.5694C12.9651 19.2146 13.0885 18.4589 13.1347 17.9037ZM21.6174 18.0425C21.3552 17.9345 20.3218 17.8574 19.1034 17.842C17.9621 17.8266 16.7129 17.7649 16.3273 17.7032C15.6949 17.5952 15.5716 17.6261 15.1551 17.9654C14.8929 18.1813 14.5536 18.6594 14.3994 19.0296C14.2298 19.3997 13.9676 19.7853 13.8288 19.8932C13.3198 20.2634 13.6437 22.2375 14.2143 22.2375C14.3069 22.2375 14.5228 22.5614 14.6924 22.947C15.479 24.8749 17.1755 26.3092 18.6407 26.3092C20.0442 26.2938 21.5248 25.1062 22.3885 23.3017C22.6661 22.7311 22.9746 22.253 23.0671 22.253C23.6686 22.2221 23.9617 20.2634 23.4373 19.8932C23.2676 19.7699 23.0826 19.4922 23.0363 19.2763C22.9283 18.8291 22.0492 17.734 22.0338 18.0271C22.0338 18.1813 21.9413 18.1813 21.6174 18.0425ZM9.89703 28.7014C10.4985 28.1307 11.3468 27.8068 12.5806 27.668C14.3543 27.4521 14.4314 27.4675 14.5393 27.7143C14.6627 28.0536 15.511 28.5317 16.4672 28.8093C18.5647 29.4108 21.9424 28.8556 22.6981 27.7914C22.914 27.4984 22.9911 27.4829 24.4255 27.6526C25.2892 27.7451 26.1991 27.9456 26.5076 28.0999C27.6489 28.6859 28.5743 29.9815 29.1912 31.8631C29.6539 33.2974 28.9753 34.3616 27.2479 34.9322C24.919 35.688 22.4205 35.9964 18.6419 35.9964C13.4752 35.9964 9.85076 35.3024 8.58607 34.0994C8.06169 33.6059 8 33.4671 8 32.773C8 31.5083 8.83284 29.7038 9.89703 28.7014Z" fill="#0675C1"/>
  </g>
  <defs>
    <filter id="filter0_d_737_3128" x="0.5" y="0.5" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 0 0.811765 0 0 0 1 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3128"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3128" result="shape"/>
    </filter>
    <filter id="filter1_d_737_3128" x="6.5" y="10.5" width="37" height="27.9965" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dx="1"/>
      <feGaussianBlur stdDeviation="1.25"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_737_3128"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_737_3128" result="shape"/>
    </filter>
  </defs>
</svg>

<!-- svg -->
  </div>

   <div class="col-6 text-end">
    <span  class="badge bg-purpal text-light fs-6 fw-bold my-3 mx-3">15</span>
  </div>

</div>
<h5 class="card-title fs-6 mt-1">Total Guardian</h5>

  </div>
</div>
</div>




</div>
  </div>
  <div class="col-lg-6 text-center">
    <img src="../../images/assets/pi.png" alt="">
  </div>
</div>


</div>
</div>

</div>
</div>
</div>
<!-- Tutor chart end -->





  </div>
</div>
</div>

</div>
</template>

<script>
  import Sidebar from '@/components/admin/Sidebar.vue';

export default {
  components: {
    Sidebar,
  }
 

}
</script>