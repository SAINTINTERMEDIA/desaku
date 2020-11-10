@extends('layout.nav')

@section('side')

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">
                        Menu
                    </div>
                        <a class="nav-link" href="/back">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                            </div>
                            Dashboard
                        </a>
                        @if (Auth::user()->is_admin == '2')    
                        <div class="sb-sidenav-menu-heading">
                                Interface
                            </div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i>
                                </div>
                                Kartu Keluarga
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                        </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="/family">  
                                            <div class="sb-nav-link-icon"><i class="fa fa-address-book" aria-hidden="true"></i>
                                            </div>
                                             Kepala Keluarga
                                        </a>
                                        <a class="nav-link" href="/population">
                                            <div class="sb-nav-link-icon"><i class="fa fa-id-card" aria-hidden="true"></i>
                                            </div>
                                            Penduduk
                                        </a>
                                        <a class="nav-link" href="/perempuan">
                                            <div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                            </div>
                                            Jenis Kelamin
                                        </a>
                                    </nav>
                                </div>
                                @endif
                    @if (Auth::user()->is_admin == '1' ||Auth::user()->is_admin == '2' )
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            Surat Online
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="/suratmenikah">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        SKB Menikah
                                    </a>
                                    <a class="nav-link collapsed" href="/sktmampu">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        SK Tidak Mampu
                                    </a>
                                    <a class="nav-link collapsed" href="/suratketerangandomisili">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        SK Berdomisili
                                    </a>
                                    <a class="nav-link collapsed" href="/suratkelakuanbaik">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        SK Kelakuan Baik
                                    </a>
                                    <a class="nav-link collapsed" href="/suratbersihdiri">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        SK Bersih Diri
                                    </a>
                                    <a class="nav-link collapsed" href="/pkk">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        PKK
                                    </a>
                                    <a class="nav-link collapsed" href="/karangtaruna">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        Karang Taruna
                                    </a>
                                </nav>
                            </div>
                            
                    @endif
                    @if (Auth::user()->is_admin == '2'||Auth::user()->is_admin == '0' )
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseberita" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                                Berita
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseberita" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="/berita">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        Lihat Berita
                                    </a>
                                </nav>
                            </div>
                    @endif
                
                    @if (Auth::user()->is_admin == '2' )
                    <div class="sb-sidenav-menu-heading">Master Admin</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Admin Desa
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                            
                        <div class="collapse" id="collapseAdmin" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                    >
                                    <div class="sb-nav-link-icon"><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </div>
                                    BPD
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="/login">Login</a>
                                                <a class="nav-link" href="register.html">Register</a>
                                                <a class="nav-link" href="password.html">Forgot Password</a>
                                            </nav>
                                        </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesLPM" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    <div class="sb-nav-link-icon"><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </div>
                                    LPM
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                    <div class="collapse" id="pagesLPM" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="/login">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" href="/katar">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        KATAR
                                    </a>
                                    <a class="nav-link collapsed" href="/pkk">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        PKK
                                    </a>
                                    <a class="nav-link collapsed" href="/bumdes">
                                        <div class="sb-nav-link-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        </div>
                                        BUMDES
                                    </a>
                            </nav>
                        </div>
                        @endif

                        
                        @if (Auth::user()->is_admin == '2' )
                        {{-- <div class="sb-sidenav-menu-heading">Master Admin</div> --}}
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Admin User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                                <div class="collapse" id="collapseUser" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a href="/lihatuser" class="nav-link collapsed">
                                            <div class="sb-nav-link-icon">
                                                <i class="fa fa-bookmark" aria-hidden="true">

                                                </i>
                                               
                                            </div>
                                            Lihat User
                                            {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                                        </a>
                                                {{-- <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="/login">Login</a>
                                                        <a class="nav-link" href="register.html">Register</a>
                                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                                    </nav>
                                                </div> --}}
                                    </nav>
                                </div>
                            @endif

                            @if (Auth::user()->is_admin == '1')
                                    <div class="sb-sidenav-menu-heading">Defnaker
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedefnaker" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Defnaker Desa
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                        
                                    <div class="collapse" id="collapsedefnaker" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                <a class="nav-link" href="/defnakercreate">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i>
                                                    </div>
                                                    Lihat Lamaran 
                                                </a>
                                                

                                                <a class="nav-link" href="tables.html">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                                    Info Loker Perusahaan
                                                </a>
                                        </nav>
                                    </div>
                            </div>
                            @endif
                            <div class="sb-sidenav-footer">
                                <div class="small">Logged in as:</div>
                                Sidesba
                            </div>
                        </nav>
                    </div>
                    <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid">
                                <div class="row">
                                    @yield('content')
                                    @yield('cont')
                                    @yield('createfam')
                                    @yield('content_PDF')
                                </div>
                            
                            </div>
                        </main>
                </div>
        </div>
    @endsection


