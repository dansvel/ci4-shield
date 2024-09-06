<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
        </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <span class="nav-link fw-bold"><?= env('app.name') ?></span>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="d-none d-md-inline"><?= auth()->user()->username ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm-end">
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-people-fill me-2"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/logout" class="dropdown-item">
                        <i class="bi bi-people-fill me-2"></i> Logout
                    </a>
                </div>
            </li> <!--end::User Menu Dropdown-->

        </ul><!--end::End Navbar Links-->
    </div> <!--end::Container-->
</nav>