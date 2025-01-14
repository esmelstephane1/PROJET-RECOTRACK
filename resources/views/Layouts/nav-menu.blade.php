<<<<<<< HEAD
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

=======
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" />
        <img class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="../../assets/img/team/profile-picture-3.jpg"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green" />
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2>
                    <a href="../../pages/examples/sign-in.html"
                        class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="../../index.html" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="../../assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo" />
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">RECOTRACK</span>
                </a>
            </li>
            <li class="nav-item active">
                <a href="../../pages/dashboard/dashboard.html" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://demo.themesberg.com/volt-pro/pages/kanban.html" target="_blank"
                    class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Accueil</span>
                    </span>

                </a>
            </li>
            <li class="nav-item">
                <a href="../../pages/transactions.html" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                            <path fill-rule="evenodd"
                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Recommandations</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../pages/settings.html" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Notifications</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://demo.themesberg.com/volt-pro/pages/calendar.html" target="_blank"
                    class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Paramètres</span>
                    </span>

                </a>
            </li>



        </ul>
    </div>
</nav>
>>>>>>> 45634212fc3d463db4c6490e5a42cad1a3db825f
