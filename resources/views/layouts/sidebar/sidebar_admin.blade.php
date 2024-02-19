<div class="navbar-content scroll-div" style="padding-bottom: 100px;">
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
                            <li class="{{Request::routeIs('employe.index') ? 'active' : ''}} nav-item pcoded-hasmenu">
                                <a href="javascript:" class="">Personnel</a>
                                <ul class="pcoded-submenu">
                                    <li class="{{Request::routeIs('employe.index') ? 'active' : ''}}">
                                        <a href="{{route('employe.index')}}" class="">Tous</a>
                                        
                                    </li>
                                    <li class=""><a href="#" class="">Retraité</a></li>
                                    <li class=""><a href="#" class="">EN Activité</a></li>
                                </ul>
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
                    
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu {{Request::routeIs('configuration.*') ? 'active pcoded-trigger' : ''}}">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-folder-tree"></i></span><span class="pcoded-mtext nav-bord">Configuration</span></a>
                        <ul class="pcoded-submenu">
                            <li class="{{Request::routeIs('configuration.getSites*') ? 'active' : ''}}"><a href="{{route('configuration.getSites')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-house-chimney-window"></i></span><span class="pcoded-mtext">Site</span></a></li>
                            <li class="{{Request::routeIs('configuration.getDirections*') ? 'active' : ''}}"><a href="{{route('configuration.getDirections')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Direction</span></a></li>
                            <li class="{{Request::routeIs('configuration.getSubdivisions*') ? 'active' : ''}}"><a href="{{route('configuration.getSubdivisions')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-city"></i></span><span class="pcoded-mtext">Subdivision</span></a></li>
                            <li class="{{Request::routeIs('configuration.getSections*') ? 'active' : ''}}"><a href="{{route('configuration.getSections')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-people-roof"></i></span><span class="pcoded-mtext">Section</span></a></li>
                            <li class="{{Request::routeIs('configuration.getFonctions*') ? 'active' : ''}}"><a href="{{route('configuration.getFonctions')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-address-book"></i></span><span class="pcoded-mtext">Fonction</span></a></li>
                            <li class="{{Request::routeIs('configuration.getEmplois*') ? 'active' : ''}}"><a href="{{route('configuration.getEmplois')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-user-tie"></i></span><span class="pcoded-mtext">Emploi</span></a></li>
                            <li class="{{Request::routeIs('configuration.getFilieres*') ? 'active' : ''}}"><a href="{{route('configuration.getFilieres')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-user-tie"></i></span><span class="pcoded-mtext">Filière</span></a></li>
                            <li class="{{Request::routeIs('configuration.getCategories*') ? 'active' : ''}}"><a href="{{route('configuration.getCategories')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-layer-group"></i></span><span class="pcoded-mtext">Catégorie</span></a></li>
                            <li class="{{Request::routeIs('configuration.getSignataires*') ? 'active' : ''}}"><a href="{{route('configuration.getSignataires')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-sign"></i></span><span class="pcoded-mtext">Signataire</span></a></li>                           

                        </ul>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="{{route('contrats.index')}}" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-file-contract"></i></span><span class="pcoded-mtext nav-bord">Contrats</span></a>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item">
                        <a href="{{route('document.index')}}" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-file-invoice"></i></span><span class="pcoded-mtext nav-bord">Documents</span></a>
                        
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
                    <li class="nav-item pcoded-menu-caption">
                        <label>Paie</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-regular fa-money-bill-1"></i></span><span class="pcoded-mtext nav-bord">Gestion Paie</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="#" class="" target="_blank">Salaire</a></li>
                            <li class=""><a href="#" class="" target="_blank">Indemnité</a></li>
                        </ul>
                    </li>
                    
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-file-invoice"></i></span><span class="pcoded-mtext nav-bord">Parametres</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{route('users.index')}}" class="">  <span class="pcoded-micon"><i class="fa-solid fa-house-chimney-window"></i></span><span class="pcoded-mtext">Utilisateurs</span></a></li>
                            <li class=""><a href="#" class="">  <span class="pcoded-micon"><i class="fa-solid fa-building-circle-arrow-right"></i></span><span class="pcoded-mtext">Catégories</span></a></li>
                            
                        </ul>
                    </li>

                </ul>
            </div>