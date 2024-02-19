
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
                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>{{ session('error') }}</strong> 
                                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> 
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ session('success') }}</strong> 
                                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    
                                    <div class="" id="grad1">
                                        <div class="">
                                            <div class="">
                                                <div class="card p-4 pt-4 pb-0 mt-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-12 m-4 pr-5">
                                                        <h3 class="">Nouvel Employé</h3>
                                                            <form id="msform" action="{{route('employe.store')}}" method="post">
                                                                <!-- progressbar -->
                                                                @csrf
                                                                <ul id="progressbar">
                                                                    <li class="active" id="account"><strong>Employé</strong></li>
                                                                    <li id="personal"><strong>Affectation & Contrat</strong></li>
                                                                    <li id="payment"><strong>Terminé</strong></li>
                                                                </ul>
                                                                <!-- fieldsets -->
                                                                <fieldset>
                                                                    <div class="form-card">
                                                                        <h4 class="fs-title">Information Employer</h4>
                                                                        <div class="row mb-3">
                                                                            
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Prénom <span style="color: red;">*</span></label>
                                                                                        <input type="text" class="form-control obligatoire_info" required id="prenom" aria-describedby="emailHelp" placeholder="Prénom" name="prenom">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Nom <span style="color: red;">*</span></label>
                                                                                        <input type="text" class="form-control obligatoire_info" required id="nom" aria-describedby="emailHelp" placeholder="Nom" name="nom">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Date de Naissance <span style="color: red;">*</span></label>
                                                                                        <input type="date" class="form-control obligatoire_info"  id="date_naissance" aria-describedby="emailHelp" name="date_naissance">
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Lieu de Naissance <span style="color: red;">*</span></label>
                                                                                        <input type="text" class="form-control obligatoire_info" required id="lieu_naissance" aria-describedby="emailHelp"  name="lieu_naissance">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Adresse <span style="color: red;">*</span></label>
                                                                                        <input type="text" class="form-control obligatoire_info" required id="adresse" aria-describedby="emailHelp" name="adresse">
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Numéro Téléphone <span style="color: red;">*</span></label>
                                                                                        <input type="text" class="form-control" required id="telephone" aria-describedby="emailHelp"  name="telephone">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Photo</label>
                                                                                        <input type="file" class="form-control" required id="photo" aria-describedby=""  name="photo">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Situation Familiale <span style="color: red;">*</span></label>
                                                                                        <select name="situation_familiale" required id="situation_familiale" class="form-control">
                                                                                            <option value="marie">Marié</option>
                                                                                            <option value="celibataire">Célibataire</option>
                                                                                            <option value="divorce">Divorcé</option>
                                                                                            <option value="veuf">Veuf</option>
                                                                                        </select>
                                                                                        
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Genre <span style="color: red;">*</span></label>
                                                                                        <select name="genre" id="genre" required class="form-control">
                                                                                            <option value="masculin">Masculin</option>
                                                                                            <option value="feminin">Féminin</option>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Religion <span style="color: red;">*</span></label>
                                                                                        <select name="religion" required id="religion" class="form-control">
                                                                                            <option value="musulmane">Musulmane</option>
                                                                                            <option value="chretienne">Chrétienne</option>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">N.I.N <span style="color: red;">*</span></label>
                                                                                        <input type="text" class="form-control obligatoire_info" required id="nin" aria-describedby="emailHelp" name="nin">
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Statut <span style="color: red;">*</span></label>
                                                                                        <select name="statut" id="statut" required class="form-control">
                                                                                            <option value="non fonctionnaire">Non Fonctionnaire</option>
                                                                                            <option value="fonctionnaire">Fonctionnaire</option>
                                                                                            <option value="substitue">Non Fonctionnaire</option>
                                                                                            <option value="contrat special">Fonctionnaire</option>
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Numéro IPRES</label>
                                                                                        <input type="text" class="form-control" id="num_ipres" aria-describedby="emailHelp"  name="num_ipres">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" name="next" id="next1" class=" action-button" value="Suivant"/>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="form-card">
                                                                        <h4 class="fs-title">Détails Affectation & Contrat</h4>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="" class="label-input">Références Embauche <span style="color: red;">*</span></label>
                                                                                    <input type="text" class="form-control obligatoire-contrat" required id="ref_embauche" aria-describedby="emailHelp" name="ref_embauche">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="" class="label-input">Date d'Embauche <span style="color: red;">*</span></label>
                                                                                    <input type="date" class="form-control obligatoire-contrat"  id="date_embauche" aria-describedby="emailHelp"  name="date_embauche">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Type contrat <span style="color: red;">*</span></label>
                                                                                        <select name="type_contrat" id="type_contrat" required class="form-control obligatoire-contrat">
                                                                                            @foreach ($contrats as $contrat)
                                                                                                <option value="{{$contrat->id}}">{{$contrat->nom_contrat}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3" hidden>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="" class="label-input">Début Contrat <span style="color: red;">*</span></label>
                                                                                    <input type="date" class="form-control"  id="debut_contrat" aria-describedby="emailHelp" name="debut_contrat">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="" class="label-input">Fin Contrat <span style="color: red;">*</span></label>
                                                                                    <input type="date" class="form-control"  id="fin_contrat" aria-describedby="emailHelp"  name="fin_contrat">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Fonction <span style="color: red;">*</span></label>
                                                                                        <select name="fonction" id="fonction" required class="form-control obligatoire-contrat">
                                                                                            @foreach ($fonctions as $fonction)
                                                                                                <option value="{{$fonction->id}}">{{$fonction->nom_fonction}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Proféssion <span style="color: red;">*</span></label>
                                                                                        <select name="emploi" id="emploi" required class="form-control obligatoire-contrat">
                                                                                            @foreach ($emplois as $emploi)
                                                                                                <option value="{{$emploi->id}}">{{$emploi->nom_emploi}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Catégorie</label>
                                                                                        <select name="categorie" id="categorie" required class="form-control obligatoire-contrat">
                                                                                            @foreach ($categories as $categorie)
                                                                                                <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Site <span style="color: red;">*</span></label>
                                                                                        <select name="site" id="site" required class="form-control obligatoire-contrat">
                                                                                            @foreach ($sites as $site)
                                                                                                <option value="{{$site->id}}">{{$site->nom_site}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Direction <span style="color: red;">*</span></label>
                                                                                        <select name="direction" id="direction" required class="form-control obligatoire-contrat" required>
                                                                                            <option value=""></option>
                                                                                            @foreach ($directions as $direction)
                                                                                                <option value="{{$direction->id}}">{{$direction->nom_direction}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Subdivision <span style="color: red;">*</span></label>
                                                                                        <select name="subdivision" required id="subdivision" class="form-control obligatoire-contrat">
                                                                                            
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="" class="label-input">Section <span style="color: red;">*</span></label>
                                                                                        <select name="section" required id="section" class="form-control obligatoire-contrat">
                                                                                            
                                                                                        </select>
                                                                                        
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="" class="label-input">Filiére Emploi <span style="color: red;">*</span></label>
                                                                                        <select name="filiere_emploi" required id="filiere_emploi" class="form-control obligatoire-contrat">
                                                                                            <option value=""></option>
                                                                                            @foreach ($filieres as $filiere)
                                                                                                <option value="{{$filiere->id}}">{{$filiere->nom_filiere_emploi}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                                                                    <input type="button" name="next" id="next2" class="action-button" value="Suivant"/>
                                                                </fieldset>

                                                                <fieldset>
                                                                    <div class="form-card">
                                                                        
                                                                        <div class="row mb-3">
                                                                            <div class='col-6' >
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h4 class="fs-title">Récapitulatif Informations Employé</h4>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Prénom : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="prenom_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Nom : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="nom_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Adresse : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="adresse_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Date Naissance : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="date_naiss_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Téléphone : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="telephone_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Situation Matri... : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="situation_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Genre : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="genre_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Religion : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="religion_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Statut : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="statut_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Numéro Ipres : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="numero_ip_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >N.I.N : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="nin_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Lieu naissance : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="lieu_naiss_recap"></h6></li>
                                                                                                         
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class='col-6' >
                                                                                <div class="card">
                                                                                <div class="card-header">
                                                                                        <h4 class="fs-title">Récapitulatif Affectation & Contrat</h4>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Références Embauche : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="ref_embauche_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Date d'Embauche : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="date_embauche_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Type Contrat : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="contrat_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Fonction : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="fonction_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Proféssion : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="profession_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Catégorie : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="categorie_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Site : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="site_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Direction : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="direction_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="d-flex justify-content-between">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Service : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="service_recap"></h6></li>
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Section : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="section_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="">
                                                                                            <div class="col-6">
                                                                                                <nav aria-label="breadcrumb">
                                                                                                    <ol class="breadcrumb">
                                                                                                        <li class=" " ><h6 class="mr-2" >Filiére : </h6></li>
                                                                                                        <li class=" "><h6 style="font-weight: bold;" id="filiere_recap"></h6></li>
                                                                                                        
                                                                                                    </ol>
                                                                                                </nav>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                                                                    <input type="submit" class="action-button" id="submit_form" value="Confirmer"/>
                                                                </fieldset>
                                                            </form>
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
            </div>
        </div>
        <style>
            .label-input{
                font-weight: bold !important;
                color: #000 !important;
            }
            /*form styles*/
            #msform {
                text-align: center;
                position: relative;
                margin-top: 20px;
            }
            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 0.5rem;
                box-sizing: border-box;
                width: 100%;
                margin: 0;
                padding-bottom: 20px;

                /*stacking fieldsets above each other*/
                position: relative;
            }

            /*Hide all except first fieldset*/
            #msform fieldset:not(:first-of-type) {
                display: none;
            }

            #msform fieldset .form-card {
                text-align: left;
                color: #9E9E9E;
            }
            /*Blue Buttons*/
            #msform .action-button {
                width: 100px;
                background: #ee9d28;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 0px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;
            }

            #msform .action-button:hover, #msform .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #ee9d28;
            }

            /*Previous Buttons*/
            #msform .action-button-previous {
                width: 100px;
                background: #002278;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 0px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;
            }

            #msform .action-button-previous:hover, #msform .action-button-previous:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #002278;
            }

            /*Dropdown List Exp Date*/
            select.list-dt {
                border: none;
                outline: 0;
                border-bottom: 1px solid #ccc;
                padding: 2px 5px 3px 5px;
                margin: 2px;
            }

            select.list-dt:focus {
                border-bottom: 2px solid #ee9d28;
            }

            /*The background card*/
            .card {
                z-index: 0;
                border: none;
                border-radius: 0.5rem;
                position: relative;
            }

            /*FieldSet headings*/
            .fs-title {
                font-size: 18px;
                color: #ee9d28;
                margin-bottom: 10px;
                font-weight: bold;
                text-align: left;
                margin-bottom: 20px;
            }

            /*progressbar*/
            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                color: lightgrey;
            }

            #progressbar .active {
                color: #000000;
            }

            #progressbar li {
                list-style-type: none;
                font-size: 16px;
                font-weight: bold;
                width: 33.33%;
                float: left;
                position: relative;
            }

            /*Icons in the ProgressBar*/
            #progressbar #account:before {
                font-family: FontAwesome;
                content: "\f007";
            }

            #progressbar #personal:before {
                font-family: FontAwesome;
                content: "\f56c";
            }

            #progressbar #payment:before {
                font-family: FontAwesome;
                content: "\e53e";
            }


            /*ProgressBar before any progress*/
            #progressbar li:before {
                width: 50px;
                height: 50px;
                line-height: 45px;
                display: block;
                font-size: 18px;
                color: #ffffff;
                background: lightgray;
                border-radius: 50%;
                margin: 0 auto 10px auto;
                padding: 2px;
            }

            /*ProgressBar connectors*/
            #progressbar li:after {
                content: '';
                width: 100%;
                height: 2px;
                background: lightgray;
                position: absolute;
                left: 0;
                top: 25px;
                z-index: -1;
            }

            /*Color number of the step and the connector before it*/
            #progressbar li.active:before, #progressbar li.active:after {
                background: #ee9d28;
            }

            /*Imaged Radio Buttons*/
            .radio-group {
                position: relative;
                margin-bottom: 25px;
            }

            .radio {
                display:inline-block;
                width: 204;
                height: 104;
                border-radius: 0;
                background: #ee9d28;
                box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                box-sizing: border-box;
                cursor:pointer;
                margin: 8px 2px; 
            }

            .radio:hover {
                box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
            }

            .radio.selected {
                box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
            }

            /*Fit image in bootstrap div*/
            .fit-image{
                width: 100%;
                object-fit: cover;
            }
            
        </style>
        <script>
            $(document).ready(function(){

                $(".obligatoire_contrat").focus(function(){
                    $(".obligatoire_contrat").classList.remove('alert','alert-danger');
                });

                $(".obligatoire_info").change(function(){
                    $(".obligatoire_info").classList.remove('alert','alert-danger');
                });
                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;
                $("#next1").click(function(){
                    
                        let obligatoire_info = document.getElementsByClassName('obligatoire_info');
                        let valid_input = true;
                        for (let index = 0; index < obligatoire_info.length; index++) {
                            //let valid_input = true;
                            //obligatoire_info[index].addEventListener('change', function(){
                                
                                if (obligatoire_info[index].value==="") {
                                    obligatoire_info[index].classList.add('alert','alert-danger');
                                    valid_input = false;
                                }
                            //});    
                        }

                        if (valid_input) {
                            //obligatoire_info.classList.remove('alert','alert-danger');
                            current_fs = $(this).parent();
                            next_fs = $(this).parent().next();
                            
                            //Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            
                            //show the next fieldset
                            next_fs.show();
                            //hide the current fieldset with style
                            current_fs.animate({opacity: 0}, {
                                step: function(now) {
                                    // for making fielset appear animation
                                    opacity = 1 - now;
                        
                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({'opacity': opacity});
                                }, 
                                duration: 600
                            });
                        }

                    
                });

                $("#next2").click(function(){
                        let obligatoire_contrat = document.getElementsByClassName('obligatoire-contrat');
                        let valid_input_c = true;
                        for (let index = 0; index < obligatoire_contrat.length; index++) {
                            //let valid_input = true;
                            //obligatoire_info[index].addEventListener('change', function(){
                                
                                if (obligatoire_contrat[index].value==="") {
                                    obligatoire_contrat[index].classList.add('alert','alert-danger');
                                    valid_input_c = false;
                                }
                            //});    
                        }

                        if (valid_input_c) {
                            for (let index = 0; index < obligatoire_contrat.length; index++) {
                                obligatoire_contrat[index].classList.remove('alert','alert-danger');
                            }
                            current_fs = $(this).parent();
                            next_fs = $(this).parent().next();
                            
                            //Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            
                            //show the next fieldset
                            next_fs.show();
                            //hide the current fieldset with style
                            current_fs.animate({opacity: 0}, {
                                step: function(now) {
                                    // for making fielset appear animation
                                    opacity = 1 - now;
                        
                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({'opacity': opacity});
                                }, 
                                duration: 600
                            });

                            $("#prenom_recap").text($("#prenom").val());
                            $("#lieu_naiss_recap").text($("#lieu_naissance").val());
                            $("#date_naiss_recap").text($("#date_naissance").val());
                            $("#nom_recap").text($("#nom").val());
                            $("#adresse_recap").text($("#adresse").val());
                            $("#telephone_recap").text($("#telephone").val());
                            $("#situation_recap").text($("#situation_familiale option:selected").text());
                            $("#genre_recap").text($("#genre option:selected").text());
                            $("#religion_recap").text($("#religion option:selected").text());
                            $("#statut_recap").text($("#statut option:selected").text());
                            $("#numero_ip_recap").text($("#num_ipres").val());
                            $("#nin_recap").text($("#nin").val());
                            $("#ref_embauche_recap").text($("#ref_embauche").val());
                            $("#date_embauche_recap").text($("#date_embauche").val());
                            $("#contrat_recap").text($("#type_contrat option:selected").text());
                            $("#fonction_recap").text($("#fonction option:selected").text());
                            $("#profession_recap").text($("#emploi option:selected").text());
                            $("#categorie_recap").text($("#categorie option:selected").text());
                            $("#site_recap").text($("#site option:selected").text());
                            $("#direction_recap").text($("#direction option:selected").text());
                            $("#service_recap").text($("#subdivision option:selected").text());
                            $("#section_recap").text($("#section option:selected").text());
                            $("#filiere_recap").text($("#filiere_emploi option:selected").text());
                        }
                    
                    
                });
                
                $(".previous").click(function(){
                    
                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();
                    
                    //Remove class active
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    
                    //show the previous fieldset
                    previous_fs.show();
                
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;
                
                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            previous_fs.css({'opacity': opacity});
                        }, 
                        duration: 600
                    });
                });
                
                $('.radio-group .radio').click(function(){
                    $(this).parent().find('.radio').removeClass('selected');
                    $(this).addClass('selected');
                });
                
                $("#submit_form").click(function(){
                    $("#msform").submit();
                })
                    
            });
        </script>

        <script>


            // $(document).ready(function (){

                $('#direction').change(function(){
                    getSubdivisions(document.getElementById('direction').value);  
                });

                $('#subdivision').change(function(){
                    getSections(document.getElementById('subdivision').value);  
                });
                
                // Selection d'une subdivision entraine la selection de toutes les sections liées
                    function getSections(idSubdivision){
                        let slug_id = parseInt(idSubdivision);
                            //alert(slug_id);
                                $.ajax({
                                    type: "GET",
                                    url: '/admin/employes/create/getSections/'+slug_id,
                                    dataType : "json",
                                })
                                .done(function(response){
                                        //let data = JSON.stringify(response);
                                       // console.log(response['sections']);
                                        if (response['sections']) {
                                            $("#section option").remove();
                                            $('#section').append("<option value=''></option>");
                                            for(i = 0; i < response['sections'].length ; i++){
                                                $('#section').append("<option value='"+response['sections'][i].id+"'>" + response['sections'][i].nom_section + "</option>");
                                            }
                                        }
                                        else{
                                            
                                        }
                                })
                                .fail(function(error){
                                    alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
                                });
                    } 
                // Fin Selection d'une subdivision
                
                    function getSubdivisions(idDirection){
                        let slug_id = parseInt(idDirection);
                        //alert(slug_id);
                            $.ajax({
                                type: "GET",
                                url: '/admin/employes/create/getSubdivisions/'+slug_id,
                                dataType : "json",
                            })
                            .done(function(response){
                                    //let data = JSON.stringify(response);
                                    //console.log(response['subdivisions'][0]);
                                    if (response['subdivisions']) {
                                        $("#subdivision option").remove();
                                        $('#subdivision').append("<option value=''></option>");
                                        for(i = 0; i < response['subdivisions'].length ; i++){
                                            $('#subdivision').append("<option value='"+response['subdivisions'][i].id+"'>" + response['subdivisions'][i].nom_subdivision + "</option>");
                                        }
                                    }
                                    else{
                                        
                                    }
                            })
                            .fail(function(error){
                                alert("La requête s'est terminée en échec. Infos : " + JSON.stringify(error));
                            });
                    }

           
        </script>
    @endsection



                                