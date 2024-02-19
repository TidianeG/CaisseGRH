<div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">                  
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="{{Request::routeIs('admin_space') ? 'active' : ''}} nav-item ">
                        <a href="{{route('admin_space')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext nav-bord">Accueil</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Employés</label>
                    </li>

                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu {{Request::routeIs('employe.*') ? 'active pcoded-trigger' : ''}}">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-users"></i></span><span class="pcoded-mtext nav-bord">Gestion Personnel</span></a>
                        <ul class="pcoded-submenu">
                            <li class="{{Request::routeIs('employe.index') ? 'active' : ''}}">
                                <a href="{{route('employe.index')}}" class="">Personnel</a>
                            </li>
                            <li class=""><a href="#" class="">Mouvement</a></li>
                            <li class=""><a href="#" class="">Dossier médical</a></li>
                            <li class=""><a href="#" class="">Sanctions</a></li>
                            <li class=""><a href="#" class=""></a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Structure</label>
                    </li>
                    
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="{{route('contrats.index')}}" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-file-contract"></i></span><span class="pcoded-mtext nav-bord">Contrats</span></a>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-file-invoice"></i></span><span class="pcoded-mtext nav-bord">Documents</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-house-chimney-window"></i></span><span class="pcoded-mtext">Attestation de Travail</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Certificat de Travail</span></a></li>                            
                        </ul>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-file-invoice"></i></span><span class="pcoded-mtext nav-bord">Statistiques (Etats)</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-house-chimney-window"></i></span><span class="pcoded-mtext">Employés</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Catégories</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Directions</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Fonctions</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Emplois</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Services</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Catégories</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Filières</span></a></li> 
                        </ul>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext nav-bord">Congés</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Formation & Abscence</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext nav-bord">Formations</span></a></li>
                    <li data-username="Maps Google" class="nav-item"><a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext nav-bord">Abscences et Pointages</span></a></li>
                    
                </ul>
            </div>