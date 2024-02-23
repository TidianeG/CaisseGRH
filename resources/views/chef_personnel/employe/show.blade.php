@extends('layouts.appadmin')
        @section('content')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- [ breadcrumb ] start -->
                        <!-- [ breadcrumb ] end -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ Main Content ] start -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="col-auto mt-2" style="font-weight: bold;"> 
                                                        <span class="pcoded-micon mr-3"><i class="fa-solid fa-folder"></i></span>
                                                        <span class="pcoded-mtext">{{$employe->employee->prenom}} {{$employe->employee->nom}}</span>
                                                    </h6>
                                                    <h6 class="mt-2 mr-4" style="font-weight: bold;">
                                                        <span>Matricule : </span>
                                                        <span style="font-weight: bold;">{{$employe->matricule}}</span>
                                                    </h6>
                                                    
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="d-flex justify-content-end mb-3">
                                                    <button data-target="#add_new_document_attest" data-toggle="modal" class="btn btn-primary"><i class="fa-solid fa-file"></i> Générer une attestation</button>
                                                    <button data-target="#add_new_fin_contrat" data-toggle="modal" class="btn btn-danger"><i class="fa-solid fa-file-circle-xmark"></i> Fin Contrat</button>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12" >
                                                        <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="box-shadow: 15px -15px 8px 3px rgba(0, 0, 0, 0.2);">
                                                            <li><a class="nav-link text-left active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="font-weight: bold;">Détails</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-mouvement" role="tab" aria-controls="v-pills-mouvement" aria-selected="false" style="font-weight: bold;">Mouvements</a></li>

                                                            <li><a class="nav-link text-left" id="v-pills-enfants-tab"  data-toggle="pill"  href="#v-pills-enfants" role="tab" aria-controls="v-pills-enfants" aria-selected="false" style="font-weight: bold;">Enfants</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-conjoints-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-conjoints" aria-selected="false" style="font-weight: bold;">Conjoints</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-parents-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-parents" aria-selected="false" style="font-weight: bold;">Parents</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Certificats Medicaux</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Conges</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Reports</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Permissions</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Avancements</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Diplomes</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Formations</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Sanctions</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Notes Obtenues</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Accidents du Travail</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Fiche Poste</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Filiere Emploi</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Prénom : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->prenom}}</h6></li>
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Nom : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->nom}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Date Naissance : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->date_naissance}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Lieu Naissance : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->lieu_naissance}}</h6></li>
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Adresse : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->adresse}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Numéro Téléphone : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->telephone}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Genre : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->genre}}</h6></li>
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Situation Familiale : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->situation_familiale}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Religion : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->religion}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Statut : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->statut}}</h6></li>
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Date d'embauche : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->date_embauche}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >N.I.N : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->nin}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >N° Ipres : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->employee->numero_ipres}}</h6></li>
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Fonction : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->fonction->nom_fonction}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Site : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->site->nom_site}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Direction : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->section->subdivision->direction->nom_direction}}</h6></li>
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Subdivision : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->section->subdivision->nom_subdivision}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Section : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->section->nom_section}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Ref. Embauche : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;"></h6></li>
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Catégorie : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->categorie->nom_categorie}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Emploi : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->emploi->nom_emploi}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class=" " ><h6 class="mr-2" >Filière : </h6></li>
                                                                                <li class=" "><h6 style="font-weight: bold;">{{$employe->filiere_emploi->nom_filiere_emploi}}</h6></li>
                                                                                
                                                                            </ol>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="tab-pane fade" id="v-pills-enfants" role="tabpanel" aria-labelledby="v-pills-enfants-tab">
                                                                <div class="card-block table-border-style">
                                                                    <div class="d-flex justify-content-end mb-3">
                                                                        <button data-target="#add_new_enfants" data-toggle="modal" class="btn btn-primary"><i class="fa-solid fa-person"></i> Créer enfant</button>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table  " id="myTable">
                                                                            <thead class="" style="background-color: #002278;color:#fff;">
                                                                                <tr >
                                                                                    <th>Prénom & Nom</th>
                                                                                    <th>Date de Naissance</th>
                                                                                    
                                                                                    <th>Lieu de Naissance</th>
                                                                                    <th>Genre</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>   
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-conjoints" role="tabpanel" aria-labelledby="v-pills-conjoints-tab">
                                                                <div class="card-block table-border-style">
                                                                    <div class="d-flex justify-content-end mb-3">
                                                                        <button data-target="#add_new_conjoint" data-toggle="modal" class="btn btn-primary"><i class="fa-solid fa-person"></i> Créer enfant</button>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table  " id="myTable">
                                                                            <thead class="" style="background-color: #002278;color:#fff;">
                                                                                <tr >
                                                                                    <th>Prénom & Nom</th>
                                                                                    <th>Date de Naissance</th>
                                                                                    
                                                                                    <th>Lieu de Naissance</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>  
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>   
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-mouvement" role="tabpanel" aria-labelledby="v-pills-mouvement-tab">
                                                                <div class="card-block table-border-style">
                                                                    <div class="d-flex justify-content-end mb-3">
                                                                        <button id="mouv_agent"  class="btn btn-primary"><i class="fa-solid fa-person"></i> Nouveau mouvement</button>
                                                                    </div>
                                                                    <div  class="mt-2 p-3 " style="display: none; border: 2px solid #ee9d28; border-radius:5px;" id="form_mouv">
                                                                        <form action="{{route('mouvement.store')}}" method="post">
                                                                            @csrf
                                                                            <div class="row mb-3">

                                                                                <input type="hidden" name="matricule_mouv" id="matricule_mouv" value="{{$employe->matricule}}">
                                                                                <input type="hidden" name="id_mouv" id="id_mouv" value="{{$employe->id}}">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Site </label>
                                                                                        <select name="site_mouv" id="site_mouv" class="form-control">
                                                                                            <option value="{{$employe->site->id}}">{{$employe->site->nom_site}}</option>
                                                                                            @foreach ($sites as $site)
                                                                                                <option value="{{$site->id}}">{{$site->nom_site}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Direction </label>
                                                                                        <select name="direction_mouv" id="direction_mouv" class="form-control">
                                                                                            <option value="{{$employe->section->subdivision->direction->id}}">{{$employe->section->subdivision->direction->nom_direction}}</option>
                                                                                            @foreach ($directions as $direction)
                                                                                                @if ($direction->nom_direction != $employe->section->subdivision->direction->nom_direction)
                                                                                                    <option value="{{$direction->id}}">{{$direction->nom_direction}}</option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Subdivision </label>
                                                                                        <select name="subdivision_mouv" id="subdivision_mouv" class="form-control">
                                                                                            <option value="{{$employe->section->subdivision->id}}">{{$employe->section->subdivision->nom_subdivision}}</option>
                                                                                            @foreach ($subdivisions as $subdivision)
                                                                                                @if ($subdivision->nom_subdivision != $employe->section->subdivision->nom_subdivision)
                                                                                                    <option value="{{$subdivision->id}}">{{$subdivision->nom_subdivision}}</option>
                                                                                                @endif
                                                                                                
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Section</label>
                                                                                        <select name="section_mouv" id="section_mouv" class="form-control">
                                                                                            <option value="{{$employe->section->id}}">{{$employe->section->nom_section}}</option>
                                                                                            @foreach ($sections as $section)
                                                                                                @if ($section->nom_section != $employe->section->nom_section)
                                                                                                    <option value="{{$section->id}}">{{$section->nom_section}}</option>
                                                                                                @endif
                                                                                                
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Fonction </label>
                                                                                        <select name="fonction_mouv" id="fonction_mouv" class="form-control">
                                                                                            <option value="{{$employe->fonction->id}}">{{$employe->fonction->nom_fonction}}</option>
                                                                                            @foreach ($fonctions as $fonction)
                                                                                                @if ($fonction->nom_fonction != $employe->fonction->nom_fonction)
                                                                                                    <option value="{{$fonction->id}}">{{$fonction->nom_fonction}}</option>
                                                                                                @endif
                                                                                                
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Emploi </label>
                                                                                        <select name="emploi_mouv" id="emploi_mouv" class="form-control">
                                                                                            <option value="{{$employe->emploi->id}}">{{$employe->emploi->nom_emploi}}</option>
                                                                                            @foreach ($emplois as $emploi)
                                                                                                @if ($emploi->nom_emploi != $employe->emploi->nom_emploi)
                                                                                                    <option value="{{$emploi->id}}">{{$emploi->nom_emploi}}</option>
                                                                                                @endif
                                                                                                
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Filière</label>
                                                                                        <select name="filiere_mouv" id="filiere_mouv" class="form-control">
                                                                                            <option value="{{$employe->filiere_emploi->id}}">{{$employe->filiere_emploi->nom_filiere_emploi}}</option>
                                                                                            @foreach ($filiere_emplois as $filiere_emploi)
                                                                                                @if ($filiere_emploi->nom_filiere_emploi != $employe->filiere_emploi->nom_filiere_emploi)
                                                                                                    <option value="{{$filiere_emploi->id}}">{{$filiere_emploi->nom_filiere_emploi}}</option>
                                                                                                @endif
                                                                                                
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Date début</label>
                                                                                        <input type="date" name="date_debut" id="date_debut" value="{{$employe->date_debut}}" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Date Fin</label>
                                                                                        <input type="date" name="date_fin" id="date_fin" value="{{$employe->date_fin}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                
                                                                            <div class="d-flex justify-content-center">
                                                                                <button type="submit" class="btn btn-primary">Valider</button>
                                                                                <button type="button" class="btn btn-danger" id="annuler_mouv_agent">Annuler</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table" id="myTable">
                                                                            <thead class="" style="background-color: #002278;color:#fff;">
                                                                                <tr >
                                                                                    <th>Matricule</th>
                                                                                    <th>Site</th>
                                                                                    <th>Direction</th>
                                                                                    <th>Service</th>
                                                                                    <th>Section</th>
                                                                                    <th>Fonction</th>
                                                                                    <th>emploi</th>
                                                                                    <th>Date</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>  
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>  
                                                                                    <td></td>   
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal create attestation travil -->
                    <div class="modal fade" id="add_new_document_attest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <nav class="navbar navbar-light ">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#" style="background-color: #fff;">
                                                <img src="{{asset('assets/img/logo_CSS.png')}}" alt="" width="50%" height="50%" class=" ">
                                            </a>
                                        </div>
                                    </nav>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body" style="padding-top:0px !important;">
                                    <div class="row">
                                        <div class="col-xl">
                                            <div class="card mb-4">
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0">Nouveau document</h5>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('genere_document')}}" id="form_attest">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Matricule</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" class="form-control"  disabled value="{{$employe->matricule}}"  aria-describedby="basic-icon-default-fullname2" />
                                                                    <input type="hidden" name="matricule_emp" class="form-control" id="matricule_emp"  value="{{$employe->matricule}}"   aria-describedby="basic-icon-default-fullname2" />

                                                                </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Type de document</label>
                                                                <div class="input-group input-group-merge">
                                                                    <select name="document_type" id="document_type">
                                                                        @foreach ($documents as $document)
                                                                            <option value="{{$document->id}}">{{strtoupper($document->nom_document)}}</option>  
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Mode</label>
                                                                <div class="input-group input-group-merge">
                                                                    <select name="mode" id="mode" class="form-control">
                                                                            <option value="normal">Normal</option>
                                                                            <option value="date_retraite">Avec date retraite</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Générer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <!--/ modal create attestation travil -->

                <!-- modal create Enfant  -->
                    <div class="modal fade" id="add_new_enfants" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <nav class="navbar navbar-light ">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#" style="background-color: #fff;">
                                                <img src="{{asset('assets/img/logo_CSS.png')}}" alt="" width="50%" height="50%" class=" ">
                                            </a>
                                        </div>
                                    </nav>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body" style="padding-top:0px !important;">
                                    <div class="row">
                                        <div class="col-xl">
                                            <div class="card mb-4">
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0">Création Enfant</h5>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="#">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label" for="basic-icon-default-fullname">Prénom</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <!-- <input type="text" class="form-control"  disabled value="{{$employe->matricule}}"  aria-describedby="basic-icon-default-fullname2" /> -->
                                                                        <input type="text" name="prenom_enfant" required class="form-control" id="prenom_enfant" placeholder="Prénom" aria-describedby="basic-icon-default-fullname2" />

                                                                    </div>
                                                            </div>
                                                            <div class="col mb-3">
                                                                <label class="form-label" for="basic-icon-default-fullname">Nom</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <!-- <input type="text" class="form-control"  disabled value="{{$employe->matricule}}"  aria-describedby="basic-icon-default-fullname2" /> -->
                                                                        <input type="text" name="nom_enfant" class="form-control" required id="nom_enfant"  placeholder="Nom"   aria-describedby="basic-icon-default-fullname2" />

                                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Date de Naissance</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <input type="text" class="form-control"  disabled value="{{$employe->matricule}}"  aria-describedby="basic-icon-default-fullname2" /> -->
                                                                    <input type="date" name="date_naissance_enfant" required class="form-control" id="date_naissance_enfant"     aria-describedby="basic-icon-default-fullname2" />

                                                                </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Lieu de Naissance</label>
                                                                <div class="input-group input-group-merge">
                                                                    <!-- <input type="text" class="form-control"  disabled value="{{$employe->matricule}}"  aria-describedby="basic-icon-default-fullname2" /> -->
                                                                    <input type="text" name="lieu_naissance_enfant" required class="form-control" id="lieu_naissance_enfant"  placeholder="Lieu de Naissance"   aria-describedby="basic-icon-default-fullname2" />

                                                                </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Genre</label>
                                                                <div class="input-group input-group-merge">
                                                                    <select name="mode" id="mode" required class="form-control">
                                                                            <option value="masculin">Masculin</option>
                                                                            <option value="feminin">Féminin</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Créer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <!--/ modal create attestation travil -->

                <!-- modal Fin Contrat -->
                <div class="modal fade" id="add_new_fin_contrat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <nav class="navbar navbar-light ">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#" style="background-color: #fff;">
                                                <img src="{{asset('assets/img/logo_CSS.png')}}" alt="" width="50%" height="50%" class=" ">
                                            </a>
                                        </div>
                                    </nav>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body" style="padding-top:0px !important;">
                                    <div class="row">
                                        <div class="col-xl">
                                            <div class="card mb-4">
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0">Fin Contrat</h5>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('genere_document')}}" id="form_attest">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Matricule</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" class="form-control"  disabled value="{{$employe->matricule}}"  aria-describedby="basic-icon-default-fullname2" />
                                                                    <input type="hidden" name="matricule_emp" class="form-control" id="matricule_emp"  value="{{$employe->matricule}}"   aria-describedby="basic-icon-default-fullname2" />

                                                                </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Motif</label>
                                                                <div class="input-group input-group-merge">
                                                                    <select name="document" id="document">
                                                                        <option value="">Retraite</option>
                                                                        <option value="">Décè</option>
                                                                        <option value="">Autres</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Description</label>
                                                                <div class="input-group input-group-merge">
                                                                    <textarea name="description" id="description" cols="30" rows="5"></textarea>
                                                                </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Valider</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <!--/ modal Fin Contrat -->

                <script>
                    $('#mouv_agent').click(function(){
                        
                        $('#form_mouv').show();
                    });

                    $('#annuler_mouv_agent').click(function(){
                        
                        $('#form_mouv').hide();
                    });

                    $('#form_attest').submit(function(e){
                        e.preventDefault();
                        $('#add_new_document_attest').modal('hide');
                        $('#form_attest').submit();
                    });

                </script>
        @endsection


                                