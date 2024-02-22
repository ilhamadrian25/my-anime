<aside
    class="sidenav bg-default navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    data-color="primary" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            {{-- <img src="#" class="navbar-brand-img h-100" alt="main_logo"> --}}
            <span class="ms-1 font-weight-bold">Sarana dan Prasarana </span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Dashboards</span>
                </a>
                <div class="collapse  show " id="dashboardsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="/">
                                <span class="sidenav-mini-icon"> H </span>
                                <span class="sidenav-normal">Home</span>
                            </a>
                        </li>
                    </ul>
                </div>
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">TABLE</h6>
            </li>
            </li>
            {{-- sarana --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link " aria-controls="pagesExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Anime</span>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('detail.index') }}">
                                <span class="sidenav-mini-icon"> TA </span>
                                <span class="sidenav-normal"> Tambah Anime</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            {{-- <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link "
                    aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Completed Anime</span>
                </a>
                <div class="collapse " id="applicationsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="#">
                                <span class="sidenav-mini-icon">C </span>
                                <span class="sidenav-normal"> Completed </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesCollapseError" class="nav-link " aria-controls="pagesExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Movie Anime</span>
                </a>
                <div class="collapse " id="pagesCollapseError">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="#">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal"> MOvie </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="nav-item">
                <hr class="horizontal dark" />
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">DOC</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#basicexamples" class="nav-link " aria-controls="basicExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-warning text-sm"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Category</span>
                </a>
                <div class="collapse " id="basicexamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('type.index') }}">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Type </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('genre.index') }}">
                                <span class="sidenav-mini-icon"> G </span>
                                <span class="sidenav-normal"> Genre </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('studio.index') }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Studio </span>
                            </a>
                        </li>
                        
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('status.index') }}">
                                <span class="sidenav-mini-icon"> St </span>
                                <span class="sidenav-normal"> Status </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('musim.index') }}">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal"> Musim </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('country.index') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Country </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('season.index') }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Season </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('type_url.index') }}">
                                <span class="sidenav-mini-icon"> Tu </span>
                                <span class="sidenav-normal"> Type Url </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link "
                    aria-controls="componentsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-danger text-sm"></i>
                    </div>
                    <span class="nav-link-text ms-1">Table Pelaporan</span>
                </a>
                <div class="collapse " id="componentsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="#">
                                <span class="sidenav-mini-icon"> PK </span>
                                <span class="sidenav-normal"> Pelaporan Kerusakan </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
        </ul>
    </div>
</aside>
