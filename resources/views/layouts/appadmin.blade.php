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
    <!-- <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
        <div class="navbar-wrapper " >
            <div class="navbar-brand header-logo mb-5 mt-3" style="margin-bottom: 25px;">
                <a href="{{route('admin_space')}}" class="b-brand">
                    <img class=" mt-4 " src="{{asset('assets/img/logo_CSS_White.png')}}" alt="Logo" width="190" height="100">

                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            @if (Auth::user()->profil=='admin')
                @include('layouts.sidebar.sidebar_admin')
            @elseif (Auth::user()->profil=='chef_personnel')
                @include('layouts.sidebar.sidebar_chef_personnel')
            @elseif (Auth::user()->profil=='payroll')
                @include('layouts.sidebar.sidebar_payroll')
            @elseif (Auth::user()->profil=='comptable')
                @include('layouts.sidebar.sidebar_comptable')
            @elseif (Auth::user()->profil=='employe')
                @include('layouts.sidebar.sidebar_employe')
            @endif
            
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
                                <span>{{Auth::user()->name}}</span>
                                
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
                @if (Auth::user()->profil=='admin')
                    <div class="card m-4" style="margin-bottom: 0px !important;">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-auto">
                                    <a href="{{route('employe.index')}}" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-users"></i></span><span class="ml-2">Personnel</span></a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('configuration.getDirections')}}" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="ml-2">Directions</span></a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-person-circle-exclamation"></i></span><span class="ml-2">Congés</span></a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-users"></i></span><span class="ml-2">Formations</span></a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-file"></i></span><span class="ml-2">Documents</span></a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-clipboard-user"></i></span><span class="ml-2">Pointage</span></a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-primary" style="background-color: #002278;"><span class="pcoded-micon"><i class="fa-solid fa-user"></i></span><span class="ml-2">Users</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
     <!-- [ Main Content ] end -->
    <style>
        .nav-bord{
            font-size: 16px;
            font-weight: bold;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- <script src="{{asset('assets/js/jquery.js')}}"></script> -->
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
        

