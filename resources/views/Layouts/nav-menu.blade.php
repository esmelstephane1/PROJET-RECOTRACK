<!-- Begin page -->

<div class="wrapper">



    <!-- ========== Topbar Start ========== -->
    <div class="navbar-custom">
        <div class="topbar container-fluid">
            <div class="d-flex align-items-center gap-lg-2 gap-1">


                @if (auth()->user()->hasRole('administrateur'))

                <!-- Topbar Brand Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="{{route('admin.index')}}" class="logo-light">
                        <span class="logo-lg">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                        <span class="logo-sm">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="{{route('admin.index')}}" class="logo-dark">
                        <span class="logo-lg">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                        <span class="logo-sm">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                    </a>
                </div>
                @elseif(auth()->user()->hasRole('operateur'))
                <!-- Topbar Brand Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="{{route('operators.index')}}" class="logo-light">
                        <span class="logo-lg">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                        <span class="logo-sm">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="{{route('operators.index')}}" class="logo-dark">
                        <span class="logo-lg">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                        <span class="logo-sm">
                            <h1 class="text-start" style="">PRAD+</h1>
                        </span>
                    </a>
                </div>

                @endif


                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>


            </div>

            <ul class="topbar-menu d-flex align-items-center gap-3">
                <li class="dropdown d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ri-search-line font-22"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>



                <li class="d-none d-sm-inline-block">
                    <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                        <i class="ri-moon-line font-22"></i>
                    </div>
                </li>


                <li class="d-none d-md-inline-block">
                    <a class="nav-link" href="#" data-toggle="fullscreen">
                        <i class="ri-fullscreen-line font-22"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="{{asset('assets/images/users/images.png')}}" alt="user-image" width="32" class="rounded-circle">
                        </span>
                        <span class="d-lg-flex flex-column gap-1 d-none">
                            <h5 class="my-0">{{strtoupper(Auth::user()->name)}}</h5>
                            <h6 class="my-0 fw-normal">{{strtoupper(ucwords(Auth::user()->getRoleNames()->first()))}}</h6>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        @if (auth()->user()->hasRole('administrateur'))
                        <a href="{{route('admin.account')}}" class="dropdown-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>Mon Profil</span>
                        </a>
                        @elseif(auth()->user()->hasRole('operateur'))
                        <a href="{{route('operators.account')}}" class="dropdown-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>Mon Profil</span>
                        </a>
                        @endif



                        <!-- item-->
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <input type="hidden" name="email" value="{{auth()->user()->email}}">
                            <button type="submit" class="btn btn-danger text-center mt-2">
                                <i class="mdi mdi-logout me-1"></i>
                                Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">
        @if(auth()->user()->hasRole('administrateur'))
        <!-- Brand Logo Light -->
        <a href="{{route('admin.index')}}" class="logo logo-light">
            <span class="logo-lg">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
            <span class="logo-sm">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{route('admin.index')}}" class="logo logo-dark">
            <span class="logo-lg">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
            <span class="logo-sm">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
        </a>
        @elseif(auth()->user()->hasRole('operateur'))
        <!-- Brand Logo Light -->
        <a href="{{route('operators.index')}}" class="logo logo-light">
            <span class="logo-lg">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
            <span class="logo-sm">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{route('operators.index')}}" class="logo logo-dark">
            <span class="logo-lg">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
            <span class="logo-sm">
                <h1 class="text-start" style="">PRAD+</h1>
            </span>
        </a>
        @endif


        <!-- Sidebar Hover Menu Toggle Button -->
        <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
            <i class="ri-checkbox-blank-circle-line align-middle"></i>
        </div>

        <!-- Full Sidebar Menu Close Button -->
        <div class="button-close-fullsidebar">
            <i class="ri-close-fill align-middle"></i>
        </div>

        <!-- Sidebar -->
        <div class="h-100" id="leftside-menu-container" data-simplebar>
            <!-- Leftbar User -->
            <div class="leftbar-user">
                <a href="pages-profile.html">
                    <img src="{{asset('assets/images/users/images.png')}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                    <span class="leftbar-user-name mt-2">{{strtoupper(Auth::user()->name)}}</span>
                </a>
            </div>

            <!--- Sidemenu -->
            <ul class="side-nav">

                <li class="side-nav-title">Version P1.0.1</li>



                @if(auth()->user()->hasRole('administrateur'))
                <style>
                    li span:hover {
                        color: red;
                    }

                </style>
                <li class="side-nav-item">
                    <a href="{{route('admin.index')}}" class="side-nav-link">

                        <span> Dashboard</span>
                    </a>
                    <a href="{{route('manage-subscriber.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Gestion des Abonné(e)s</span>
                    </a>
                    <a href="{{route('admin.manage-nas.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span>Gestion des Nas </span>
                    </a>
                    {{-- <a href="{{route('session.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Sessions PPPOE</span>
                    </a> --}}
                    <a href="{{route('admin.create-user')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Gestion des Opérateurs </span>
                    </a>
                    <a href="{{route('admin.boxe.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Gestion des Boxes</span>
                    </a>
                    <a href="{{route('admin.offre.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Gestion des Offres</span>
                    </a>
                    <a href="{{route('admin.role.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Gestion des Rôles </span>
                    </a>

                    <a href="{{route('admin.systeme.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span>Rapport</span>
                    </a>
                    <a href="{{route('admin.systeme.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Info Systèmes</span>
                    </a>



                </li>
                @elseif(auth()->user()->hasRole('operateur'))
                <li class="side-nav-item">
                    <a href="{{route('operators.index')}}" class="side-nav-link">

                        <span> Dashboard</span>
                    </a>
                    <a href="{{route('manage-subscriber.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Gestion des abonnés</span>
                    </a>
                    <a href="{{route('session.index')}}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Session Management</span>
                    </a>



                </li>
                @endif



            </ul>
            <!--- End Sidemenu -->

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->



</div>

<!-- END wrapper -->

