<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="#">
                <b class="logo-icon ps-2">
                    <img src="{{ asset('matrix/assets/images/pik-r.png')}}" alt="homepage" class="light-logo"
                        width="45" />
                </b>
                <span class="logo-text ms-2"></span>
                <p class="mt-3">PIKR-</p>
                <br>
                <p class="mt-3"> Karangampel</p>
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                </li>
                <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                            class="mdi mdi-magnify fs-4"></i></a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter" />
                        <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown inner font-light text-white">
                    <a class="nav-link dropdown-toggle inner font-light text-white" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Selamat bekerja, {{Auth::user()->nama}}
                    </a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="font-24 mdi mdi-comment-processing"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                        <ul class="list-style-none">
                            <li>
                                <div class="">
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span
                                                class="btn btn-success btn-circle d-flex align-items-center justify-content-center"><i
                                                    class="mdi mdi-calendar text-white fs-4"></i></span>
                                            <div class="ms-2">
                                                <h5 class="mb-0">Event today</h5>
                                                <span class="mail-desc">Just a reminder that event</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span
                                                class="btn btn-info btn-circle d-flex align-items-center justify-content-center"><i
                                                    class="mdi mdi-settings fs-4"></i></span>
                                            <div class="ms-2">
                                                <h5 class="mb-0">Settings</h5>
                                                <span class="mail-desc">You can customize this template</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span
                                                class="btn btn-primary btn-circle d-flex align-items-center justify-content-center"><i
                                                    class="mdi mdi-account fs-4"></i></span>
                                            <div class="ms-2">
                                                <h5 class="mb-0">Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span
                                                class="btn btn-danger btn-circle d-flex align-items-centerjustify-content-center"><i
                                                    class="mdi mdi-link fs-4"></i></span>
                                            <div class="ms-2">
                                                <h5 class="mb-0">Luanch Admin</h5>
                                                <span class="mail-desc">Just see the my new admin!</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-white">Selamat bekerja,
                            name<b class="caret"></b></a>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> My
                            Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet me-1 ms-1"></i> My
                            Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-settings me-1 ms-1"></i>
                            Account
                            Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off me-1 ms-1"></i>
                            Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="ps-4 p-10">
                            <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white">View
                                Profile</a>
                        </div>
                    </ul>
                </li> -->
            </ul>
        </div>
    </nav>
</header>