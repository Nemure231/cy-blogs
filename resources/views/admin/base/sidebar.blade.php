<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                {{-- <a class="nav-link  {{Request::is('dashboard') ? 'active' : ''}} pindah-halaman" 
                
                href="{{url('dashboard')}}"
                data-slug="dashboard"
                href="javascript:void(0)"
                
                >
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a> --}}
                <div class="sb-sidenav-menu-heading">Tulisan</div>
                <a class="nav-link collapsed  {{Request::is(['posting', 'kategori']) ? 'active' : ''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posting
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse  {{Request::is(['posting', 'kategori', 'dashboard']) ? 'show' : ''}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{Request::is('posting') ? 'active' : ''}} pindah-halaman" 
                            
                            href="javascript:void(0)"
                            data-slug="posting"
                            {{-- href="{{url('posting')}}" --}}
                            >Post
                        </a>
                        <a class="nav-link {{Request::is('kategori') ? 'active' : ''}} pindah-halaman"
                            {{-- href="{{url('kategori')}}" --}}
                            href="javascript:void(0)"
                            data-slug="kategori"
                            
                            >Kategori
                        </a>
                        <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}} pindah-halaman"
                            {{-- href="{{url('kategori')}}" --}}
                            href="javascript:void(0)"
                            data-slug="dashboard"
                            
                            >Dashboard
                        </a>
                        
                    </nav>
                </div>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>