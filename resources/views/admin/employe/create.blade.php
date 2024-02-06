
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
                                    <h5 class="mt-4">Nouvel Employé</h5>
                                    <hr>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-info_employe-tab"  data-toggle="pill" href="#pills-employee" role="tab" aria-controls="pills-info_employe" aria-selected="true">Informations de l'employé</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-recrutement-tab"  data-toggle="pill" href="#pills-recrutement" role="tab" aria-controls="pills-recrutement" aria-selected="false">Recrutement</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-recap-tab" data-toggle="pill" href="#pills-recap" role="tab" aria-controls="pills-recap" aria-selected="false">Contrat</a>
                                        </li>
                                    </ul>
                                    <form action="{{route('saveEmployee')}}" method="post">
                                        @csrf
                                        <div class="tab-content" id="pills-tabContent">
                                            
                                                <!-- Début Tab Informations de l'employé -->
                                                    <div class="tab-pane fade show active" id="pills-employee" role="tabpanel" aria-labelledby="pills-info_employe-tab">
                                                        
                                                            <h5>Informations de l'employé</h5>
                                                            <hr>
                                                
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="" class="label-input">Matricule <span style="color: red;">*</span></label>
                                                                            <input type="text" class="form-control" id="matricule" aria-describedby="emailHelp" name="matricule">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="" class="label-input">Prénom <span style="color: red;">*</span></label>
                                                                            <input type="text" class="form-control" required id="prenom" aria-describedby="emailHelp" placeholder="Prénom" name="prenom">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="" class="label-input">Nom <span style="color: red;">*</span></label>
                                                                            <input type="text" class="form-control" required id="nom" aria-describedby="emailHelp" placeholder="Nom" name="nom">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="" class="label-input">Date de Naissance <span style="color: red;">*</span></label>
                                                                            <input type="date" class="form-control"  id="date_naissance" aria-describedby="emailHelp" name="date_naissance">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="" class="label-input">Lieu de Naissance <span style="color: red;">*</span></label>
                                                                            <input type="text" class="form-control" required id="lieu_naissance" aria-describedby="emailHelp"  name="lieu_naissance">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="" class="label-input">Date d'Embauche <span style="color: red;">*</span></label>
                                                                            <input type="date" class="form-control"  id="date_embauche" aria-describedby="emailHelp"  name="date_embauche">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="" class="label-input">Adresse <span style="color: red;">*</span></label>
                                                                            <input type="text" class="form-control" required id="adresse" aria-describedby="emailHelp" name="adresse">
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
                                                                            <input type="text" class="form-control" required id="nin" aria-describedby="emailHelp" name="nin">
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
                                                            <div class="row mb-3">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="" class="label-input">Références Embauche <span style="color: red;">*</span></label>
                                                                        <input type="text" class="form-control" required id="ref_embauche" aria-describedby="emailHelp" name="ref_embauche">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-12 d-flex justify-content-end">
                                                                    <button type="button" id="suivant_recrutement" class="btn btn-primary">Suivant</button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                <!-- Fin Tab Informations de l'employé -->

                                                <!-- Début Tab Recrutement -->
                                                    <div class="tab-pane fade" id="pills-recrutement" role="tabpanel" aria-labelledby="pills-recrutement-tab">
                                                        <h5>Recrutement</h5>
                                                        <hr>
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Fonction</label>
                                                                        <select name="fonction" id="fonction" required class="form-control">
                                                                            @foreach ($fonctions as $fonction)
                                                                                <option value="{{$fonction->id}}">{{$fonction->nom_fonction}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Proféssion</label>
                                                                        <select name="emploi" id="emploi" required class="form-control">
                                                                            @foreach ($emplois as $emploi)
                                                                                <option value="{{$emploi->id}}">{{$emploi->nom_emploi}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Catégorie</label>
                                                                        <select name="categorie" id="categorie" required class="form-control">
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
                                                                        <label for="">Site</label>
                                                                        <select name="site" id="site" required class="form-control">
                                                                            @foreach ($sites as $site)
                                                                                <option value="{{$site->id}}">{{$site->nom_site}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Direction</label>
                                                                        <select name="direction" id="direction" required class="form-control" required>
                                                                            <option value=""></option>
                                                                            @foreach ($directions as $direction)
                                                                                <option value="{{$direction->id}}">{{$direction->nom_direction}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Subdivision</label>
                                                                        <select name="subdivision" required id="subdivision" class="form-control">
                                                                            
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Section</label>
                                                                        <select name="section" required id="section" class="form-control">
                                                                            
                                                                        </select>
                                                                        
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Filiére Emploi</label>
                                                                        <select name="filiere_emploi" required id="filiere_emploi" class="form-control">
                                                                            <option value=""></option>
                                                                            @foreach ($filieres as $filiere)
                                                                                <option value="{{$filiere->id}}">{{$filiere->nom_filiere_emploi}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <button type="button" id="suivant_recap" class="btn btn-primary">Suivant</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- Fin Tab Recrutement -->

                                                <!-- Début Tab Récap Nouvel Agent -->
                                                    <div class="tab-pane fade" id="pills-recap" role="tabpanel" aria-labelledby="pills-recap-tab">
                                                        <div class="row">
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <button type="submit" id="" class="btn btn-primary">Valider</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- Fin Tab Récap Nouvel Agent  -->
                                            
                                        </div>
                                    </form>
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
        </style>
        <script>

            $('#direction').change(function(){
                getSubdivisions(document.getElementById('direction').value);  
            });

            $('#subdivision').change(function(){
                getSections(document.getElementById('subdivision').value);  
            })
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
           // $( document ).ready(function() {
                $('#suivant_recrutement').on('click', function (evt) {
                    evt.preventDefault();
                    $('#pills-recrutement-tab').trigger('click');
                   
                });
            //});

            $('#suivant_recap').on('click', function (evt) {
                    evt.preventDefault();
                    $('#pills-recap-tab').trigger('click');
                   
                });


           
        </script>
    @endsection



                                