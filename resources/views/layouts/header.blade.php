<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="index.html">
                <b class="logo-icon ps-2">
                    <img src="{{ asset('matrix/assets/images/pik-r.png')}}" alt="homepage" class="light-logo"
                        width="45" />
                </b>
                <span class="logo-text ms-2"></span>
                <p class="mt-3">PIKR-</p>
                <br>
                <p class="mt-3"> Karangampel</p>
                </span>
                <a class="nav-toggler waves-effect waves-light d-block d-md-none"><i class="ti-menu ti-close"></i>
                </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown inner font-light text-white">
                    <a class="nav-link dropdown-toggle inner font-light text-white" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Selamat bekerja, {{Auth::user()->nama}}
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>