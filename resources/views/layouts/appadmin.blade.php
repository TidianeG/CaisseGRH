<!DOCTYPE html>
<html lang="en">

<head>
    <title>GRH|CSS</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets/img/logo_CSS_SMALL.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('assets/plugins/animation/css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <script src="https://kit.fontawesome.com/3b01b14772.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
     rel="stylesheet"
     href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"
   />
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar" style="">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo mb-5 mt-3" style="">
                <a href="index.html" class="b-brand">
                    <img class=" mt-4 " src="{{asset('assets/img/logo_CSS_White.png')}}" alt="Logo" width="190" height="100">

                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                   
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="{{route('admin_space')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Accueil</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Employés</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-users"></i></span><span class="pcoded-mtext">Gestion Personnel</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="/admin/employes" class="">Personnel</a></li>
                            <li class=""><a href="#" class="">Mouvement</a></li>
                            <li class=""><a href="#" class="">dossier médical</a></li>
                            <li class=""><a href="#" class="">Sanctions</a></li>
                            <li class=""><a href="#" class=""></a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Structure</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-folder-tree"></i></span><span class="pcoded-mtext">Configuration</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-house-chimney-window"></i></span><span class="pcoded-mtext">Site</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Direction</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-city"></i></span><span class="pcoded-mtext">Subdivision</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-people-roof"></i></span><span class="pcoded-mtext">Section</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-address-book"></i></span><span class="pcoded-mtext">Fonction</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-user-tie"></i></span><span class="pcoded-mtext">Emploi</span></a></li>
                            
                        </ul>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-file-invoice"></i></span><span class="pcoded-mtext">Documents</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-house-chimney-window"></i></span><span class="pcoded-mtext">Site</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Direction</span></a></li>
                            
                        </ul>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Congés</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Formation & Abscence</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="chart-morris.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Formations</span></a></li>
                    <li data-username="Maps Google" class="nav-item"><a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Abscences et Pointages</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Paie</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-regular fa-money-bill-1"></i></span><span class="pcoded-mtext">Gestion Paie</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Salaire</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Indemnité</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-box" style="">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="p-3"><h4 style="font-weight: bold; color: #002278">CAISSE SECURITE SOCIALE | DRH</h4></div>
        <div class="collapse navbar-collapse">
             
            <ul class="navbar-nav ml-auto">
                
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('assets/img/user.jpg')}}" class="img-radius" width="40" height="40" alt="User-Profile-Image">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <span>John Doe</span>
                                
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Parametres</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profil</a></li>
                                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="feather icon-log-out"></i> Déconnexion</a>
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            
            <main class="" style="">
                <div class="card m-4" style="margin-bottom: 0px !important;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-users"></i></span><span class="ml-2">Employés</span></a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="ml-2">Directions</span></a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-person-circle-exclamation"></i></span><span class="ml-2">Congés</span></a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-users"></i></span><span class="ml-2">Formations</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </main>
        </div>
    </div>
    
    <script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
    
        $(document).ready( function () {
            //$('#myTable').DataTable();
            new DataTable('#myTable', {
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json',
                },
            });
        });

        jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
        
        } );
    </script>
</body>
</html>
        

