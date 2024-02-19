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
                                                
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12" >
                                                        <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="box-shadow: 15px -15px 8px 3px rgba(0, 0, 0, 0.2);">
                                                            <li><a class="nav-link text-left active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="font-weight: bold;">Détails</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-doc_attest-tab" data-toggle="pill" href="#v-pills-doc_attest" role="tab" aria-controls="v-pills-doc_attest" aria-selected="false" style="font-weight: bold;">Attestation de Travail</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-enfants-tab"  data-toggle="pill"  href="#v-pills-enfants" role="tab" aria-controls="v-pills-enfants" aria-selected="false" style="font-weight: bold;">Enfants</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-conjoints-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-conjoints" aria-selected="false" style="font-weight: bold;">Conjoints</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-parents-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-parents" aria-selected="false" style="font-weight: bold;">Parents</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Certificats Medicaux</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Conges</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Reports</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Permissions</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Avancements</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Diplomes</a></li>
                                                            <li><a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="font-weight: bold;">Mouvements</a></li>
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
                                                                                <li class=" "><h6 style="font-weight: bold;"></h6></li>
                                                                                
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
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-doc_attest" role="tabpanel" aria-labelledby="v-pills-doc_attest-tab">
                                                                <div class="card-block table-border-style">
                                                                    <div class="d-flex justify-content-end mb-3">
                                                                        <button data-target="#add_new_document_attest" data-toggle="modal" class="btn btn-primary"><i class="fa-solid fa-person"></i> Nouveau document</button>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table  " id="myTable">
                                                                            <thead class="" style="background-color: #002278;color:#fff;">
                                                                                <tr >
                                                                                    <th>Type document</th>
                                                                                    <th>Généré le</th>
                                                                                    <th>Motif</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($document_employes as $document_employe)
                                                                                    <tr>
                                                                                        <td>{{$document_employe->document->nom_document}}</td>  
                                                                                        <td>{{$document_employe->created_at}}</td>  
                                                                                        <td></td>  
                                                                                        <td><i class="fa fa-trach"></i></td>  
                                                                                    </tr>
                                                                                @endforeach
                                                                                
                                                                            </tbody>
                                                                        </table>
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
                                                    <form method="POST" action="{{route('genere_document')}}">
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
        @endsection


                                