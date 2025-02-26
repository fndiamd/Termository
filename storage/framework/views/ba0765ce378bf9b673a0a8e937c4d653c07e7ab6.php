<!-- partial:partials/_settings-panel.html -->
<div class="theme-setting-wrapper">
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close mdi mdi-close"></i>
    <div class="d-flex align-items-center justify-content-between border-bottom">
      <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
    </div>
    <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
    <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
    <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles primary"></div>
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles pink"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <img src="<?php echo e(asset('backend/images/faces/face1.jpg')); ?>" alt="profile image">
      <p class="text-center font-weight-medium">Admin Tamvan</p>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('admin')); ?>">
        <i class="menu-icon icon-diamond"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('admin/admin-view')); ?>">
        <i class="menu-icon icon-lock"></i>
        <span class="menu-title">Admin</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('admin/user-view')); ?>">
        <i class="menu-icon icon-user"></i>
        <span class="menu-title">User</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('admin/category-view')); ?>">
        <i class="menu-icon icon-grid"></i>
        <span class="menu-title">Category</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('admin/file-view')); ?>">
        <i class="menu-icon icon-folder"></i>
        <span class="menu-title">File</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('admin/order-view')); ?>">
        <i class="menu-icon icon-basket"></i>
        <span class="menu-title">Order</span>
      </a>
    </li>
    <li class="nav-item d-none d-md-block">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="menu-icon icon-notebook"></i>
        <span class="menu-title">Log</span>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('admin/log-download-view')); ?>">Log Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('admin/log-view-view')); ?>">Log View</a>
          </li>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('admin/feature-view')); ?>">
        <i class="menu-icon icon-layers"></i>
        <span class="menu-title">Feature</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
        <i class="menu-icon icon-settings"></i>
        <span class="menu-title">Apps</span>
        <div class="badge badge-info">2</div>
      </a>
      <div class="collapse" id="apps-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/email.html')}}">E-mail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/calendar.html')}}">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/todo.html')}}">Todo List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/gallery.html')}}">Gallery</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/widgets.html')}}">
        <i class="menu-icon icon-speedometer"></i>
        <span class="menu-title">Widgets</span>
        <div class="badge badge-warning">7</div>
      </a>
    </li>
    <li class="nav-item d-none d-md-block">
      <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
        <i class="menu-icon icon-layers"></i>
        <span class="menu-title">Sidebar Layouts</span>
      </a>
      <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/compact-menu.html')}}">Compact menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-collapsed.html')}}">Icon menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-hidden.html')}}">Sidebar Hidden</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html')}}">Sidebar Overlay</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-fixed.html')}}">Sidebar Fixed</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon icon-star"></i>
        <span class="menu-title">Basic UI Elements</span>
        <div class="badge badge-danger">2</div>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/accordions.html')}}">Accordions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/buttons.html')}}">Buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/badges.html')}}">Badges</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/breadcrumbs.html')}}">Breadcrumbs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/dropdowns.html')}}">Dropdowns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/modals.html')}}">Modals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/progress.html')}}">Progress bar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/pagination.html')}}">Pagination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/tabs.html')}}">Tabs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/typography.html')}}">Typography</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/tooltips.html')}}">Tooltips</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
        <i class="menu-icon icon-equalizer"></i>
        <span class="menu-title">Advanced Elements</span>
        <div class="badge badge-success">3</div>
      </a>
      <div class="collapse" id="ui-advanced">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/dragula.html')}}">Dragula</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/clipboard.html')}}">Clipboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/context-menu.html')}}">Context menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/slider.html')}}">Sliders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/carousel.html')}}">Carousel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/colcade.html')}}">Colcade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/loaders.html')}}">Loaders</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="menu-icon icon-screen-desktop"></i>
        <span class="menu-title">Form elements</span>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html')}}">Basic Elements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/advanced_elements.html')}}">Advanced Elements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/validation.html')}}">Validation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/wizard.html')}}">Wizard</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
        <i class="menu-icon icon-loop"></i>
        <span class="menu-title">Editors</span>
      </a>
      <div class="collapse" id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/text_editor.html')}}">Text editors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/code_editor.html')}}">Code editors</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="menu-icon icon-pie-chart"></i>
        <span class="menu-title">Charts</span>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html')}}">ChartJs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/morris.html')}}">Morris</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/flot-chart.html')}}">Flot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/google-charts.html')}}">Google charts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/sparkline.html')}}">Sparkline js</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/c3.html')}}">C3 charts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartist.html')}}">Chartists</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/justGage.html')}}">JustGage</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="menu-icon icon-grid"></i>
        <span class="menu-title">Tables</span>
        <div class="badge badge-danger">4</div>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html')}}">Basic table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/data-table.html')}}">Data table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/js-grid.html')}}">Js-grid</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/sortable-table.html')}}">Sortable table</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/ui-features/popups.html')}}">
        <i class="menu-icon icon-bubbles"></i>
        <span class="menu-title">Popups</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/ui-features/notifications.html')}}">
        <i class="menu-icon icon-support"></i>
        <span class="menu-title">Notifications</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="menu-icon icon-badge"></i>
        <span class="menu-title">Icons</span>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/flag-icons.html')}}">Flag icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html')}}">Font Awesome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/simple-line-icon.html')}}">Simple line icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/themify.html')}}">Themify icons</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
        <i class="menu-icon icon-map"></i>
        <span class="menu-title">Maps</span>
      </a>
      <div class="collapse" id="maps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/maps/mapeal.html')}}">Mapeal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/maps/vector-map.html')}}">Vector Map</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/maps/google-maps.html')}}">Google Map</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon icon-lock"></i>
        <span class="menu-title">User Pages</span>
        <div class="badge badge-danger">4</div>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html')}}"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login-2.html')}}"> Login 2 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html')}}"> Register </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register-2.html')}}"> Register 2 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/lock-screen.html')}}"> Lockscreen </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="menu-icon icon-folder"></i>
        <span class="menu-title">Error pages</span>
        <div class="badge badge-info">1</div>
      </a>
      <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-404.html')}}"> 404 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-500.html')}}"> 500 </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <i class="menu-icon icon-user"></i>
        <span class="menu-title">General Pages</span>
        <div class="badge badge-success">2</div>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/blank-page.html')}}"> Blank Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/profile.html')}}"> Profile </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/faq.html')}}"> FAQ </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/faq-2.html')}}"> FAQ 2 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/news-grid.html')}}"> News grid </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/timeline.html')}}"> Timeline </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/search-results.html')}}"> Search Results </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/portfolio.html')}}"> Portfolio </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
        <i class="menu-icon icon-briefcase"></i>
        <span class="menu-title">E-commerce</span>
      </a>
      <div class="collapse" id="e-commerce">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/invoice.html')}}"> Invoice </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/pricing-table.html')}}"> Pricing Table </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/orders.html')}}"> Orders </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="documentation/documentation.html')}}">
        <i class="menu-icon icon-docs"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> -->
  </ul>
</nav>
<!-- partial -->
