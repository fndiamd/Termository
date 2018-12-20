<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{url('admin')}}">
      <h3 style="margin-top: 10px; padding: 10px;"> Termository </h3>
    </a>
    <a class="navbar-brand brand-logo-mini">
      <img src="{{asset('backend/images/logo-mini.svg')}}" alt="logo"  href="{{url('admin')}}" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <div class="dropdown-toggle-wrapper">
            <div class="inner">
              <img class="img-xs rounded-circle" src="{{asset('backend/images/faces/face1.jpg')}}" alt="Profile image">
            </div>
            <div class="inner">
              <div class="inner">
                <span class="profile-text font-weight-bold">{{ Auth::user()->name }}</span>
                <small class="profile-text small">Admin</small>
              </div>
              <div class="inner">
                <div class="icon-wrapper">
                  <i class="mdi mdi-chevron-down"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item mt-2">
            Manage Accounts
          </a>
          <a class="dropdown-item">
            Change Password
          </a>
          <a class="dropdown-item" href="{{ url('admin/logout') }}">
            Sign Out
          </a>
        </div>
      </li>
      <li class="nav-item dropdown color-setting d-none d-md-block">
        <a class="nav-link count-indicator" href="#">
          <i class="mdi mdi-invert-colors"></i>
        </a>
      </li>
    </ul>

    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
<!-- partial -->
