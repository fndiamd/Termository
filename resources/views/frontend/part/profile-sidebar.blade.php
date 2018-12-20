<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="{{ url('profile') }}">My Repository</a>
            <div id="close-sidebar">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="sidebar-header">
            <a href="{{ url('profile/upload-files') }}" class="btn btn-light btn-utrun hvr-sweep-to-blue btn-upload">
                <i class="fa fa-plus"></i>  Upload Files
            </a>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>My Files</span>
                </li>
                <li>
                    <a href="{{ url('profile/my-files') }}">
                        <i class="fa fa-tachometer-alt"></i>
                        All Files
                    </a>
                </li>
                @foreach($category as $cat)
                    <li>
                        <a href="{{ url('profile/file/'.$cat->category) }}">
                            <i class="{{ $cat->faicon }}"></i>{{ $cat->category }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a href="{{ url('profile/trash') }}">
                        <i class="fa fa-trash"></i>
                        Trash
                    </a>
                </li>
            </ul>
            <br>
            <div class="container">
                <span>Usage disk : {{ number_format(ceil($disk), 0, ",", ".") }} Kb / 150.000 Kb</span>
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
<script>
    jQuery(function ($) {
        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if ($(this).parent().hasClass("active")) {
                $(".sidebar-dropdown").removeClass("active");
                $(this).parent().removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this).next(".sidebar-submenu").slideDown(200);
                $(this).parent().addClass("active");
            }
        });

        $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
        });
        
        $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
        });
    });
</script>