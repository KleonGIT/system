<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">

        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>

        <div class="nk-sidebar-brand">
            <a href="/dashboard" class="logo-link nk-sidebar-logo">
                <img class="logo-dark" style="height: 50px;" src="{{ asset('/storage/logo.png') }}"
                    srcset="{{ asset('/storage/logo.png') }} 2x" alt="logo">
                <img class="logo-img mt-1 pt-0" style="height: 60px;" src="{{ asset('/storage/logo.png') }}"
                    srcset="{{ asset('/storage/logo.png') }} 2x" alt="logo-small">
            </a>
        </div>

    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                            <span class="nk-menu-text">Registrar</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/dashboard" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/semester" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calendar-alt"></em></span>
                                    <span class="nk-menu-text">Semester</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                            <span class="nk-menu-text">Department</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/department" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-list"></em></span>
                                    <span class="nk-menu-text">Departments</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/faculty" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">Faculty</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                            <span class="nk-menu-text">Student</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/students" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">Students</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/subject" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-book"></em></span>
                                    <span class="nk-menu-text">Subject</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/grading" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-check-circle"></em></span>
                            <span class="nk-menu-text">Grading</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>