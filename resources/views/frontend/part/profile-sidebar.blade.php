<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#">My Repository</a>
            <div id="close-sidebar">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="sidebar-header">
            <button class="btn btn-light btn-utrun hvr-sweep-to-blue btn-upload">
                <i class="fa fa-plus"></i>  Upload Files
            </button>
        </div>
        <div class="sidebar-menu">
            <ul>
                <!-- <li class="header-menu">
                    <span>General</span>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-tachometer-alt"></i>
                        <span>My Files</span>
                        <span class="badge badge-pill badge-danger">New</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="">All Files</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                <li class="header-menu">
                    <span>My Files</span>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-tachometer-alt"></i>
                        All Files
                    </a>
                </li>
                @foreach($category as $cat)
                    <li>
                        <a href="">
                            <i class="{{ $cat->faicon }}"></i>{{ $cat->category }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <br>
            <div class="container">
                <span>Usage disk : {{ $disk }}kb</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ $usageDisk }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
        <!-- <a href="#">
            <i class="fa fa-bell"></i>
            <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
            <i class="fa fa-envelope"></i>
            <span class="badge badge-pill badge-success notification">7</span>
        </a> -->
        <a href="{{ url('profile/settings') }}">
            <i class="fa fa-cog"></i>
        </a>
        <a href="{{ url('profile/logout') }}">
            <i class="fa fa-power-off"></i>
        </a>
    </div>
</nav>