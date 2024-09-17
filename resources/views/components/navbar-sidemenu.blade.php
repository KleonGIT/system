<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>

        <div class="nk-sidebar-brand">
            <a href="#" class="logo-link nk-sidebar-logo">
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
                    <li class="nk-menu-heading pt-0">
                        <h6 class="overline-title text-primary-alt">menu</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/dashboard" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/customers" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Customers</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
