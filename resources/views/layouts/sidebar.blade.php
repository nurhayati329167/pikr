<aside class="left-sidebar" data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        class="{{ Request::routeIs('dashboarded') ? 'active' : '' }}" href="{{ url('dashboarded')}}"
                        aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>
                <li class="sidebar-item 
                @if (Route::current()->getName() == 'artikel.index' ||
                        Route::current()->getName() == 'artikel.create' ||
                        Route::current()->getName() == 'artikel.edit') @endif">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link " href="{{ url('artikel')}}"
                        aria-expanded="false"><i class="mdi mdi mdi-note-outline"></i><span
                            class="hide-menu">Artikel</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Profil
                        </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        @foreach($profils as $prof)
                        <li class="sidebar-item">
                            <a href="{{ route('profil.edit', $prof->id)}}" class="sidebar-link"><i
                                    class="mdi mdi-sitemap"></i><span class="hide-menu"> Profil
                                </span></a>
                        </li>
                        @endforeach
                        <li class="sidebar-item">
                            <a href="{{ url('proker')}}" class="sidebar-link"><i class="mdi mdi-worker"></i><span
                                    class="hide-menu"> Program Kerja
                                </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('struktur')}}" class="sidebar-link"><i class="mdi mdi-sitemap"></i><span
                                    class="hide-menu"> Struktur Organisasi
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('konselor')}}"
                        aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Konselor</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('remaja')}}"
                        aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">Remaja</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('laporan')}}"
                        aria-expanded="false"><i class="mdi mdi-newspaper"></i><span
                            class="hide-menu">Laporan</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('logout')}}"
                        aria-expanded="false"><i class="mdi mdi-logout"></i><span class="hide-menu">Keluar</span></a>
                </li>

            </ul>
        </nav>
    </div>
</aside>