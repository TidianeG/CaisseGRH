
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
                                    <h5 class="mt-4">Nouvel Employé</h5>
                                    <hr>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Informations de l'emplyé</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Recrutement</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contrat</a>
                                        </li>
                                    </ul>
                                    <form action="#" method="post">
                                        <div class="tab-content" id="pills-tabContent">
                                            
                                                <!-- Début Tab Informations de l'employé -->
                                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                        
                                                            <h5>Informations de l'employé</h5>
                                                            <hr>
                                                
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="">Matricule</label>
                                                                            <input type="text" class="form-control" id="matricule" aria-describedby="emailHelp" name="matricule">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Prénom</label>
                                                                            <input type="text" class="form-control" id="prenom" aria-describedby="emailHelp" placeholder="Prénom" name="prenom">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Nom</label>
                                                                            <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Nom" name="nom">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="">Date de Naissance</label>
                                                                            <input type="date" class="form-control" id="date_naissance" aria-describedby="emailHelp" name="date_naissance">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Lieu de Naissance</label>
                                                                            <input type="text" class="form-control" id="lieu_naissance" aria-describedby="emailHelp"  name="lieu_naissance">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Date d'Embauche</label>
                                                                            <input type="date" class="form-control" id="date_embauche" aria-describedby="emailHelp"  name="date_embauche">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="">Situation Familiale</label>
                                                                            <select name="situation_matri" id="situation_matri" class="form-control">
                                                                                <option value="2">Marié</option>
                                                                                <option value="1">Célibataire</option>
                                                                                <option value="3">Divorcé</option>
                                                                                <option value="4">Veuf</option>
                                                                            </select>
                                                                            
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Genre</label>
                                                                            <select name="situation_matri" id="situation_matri" class="form-control">
                                                                                <option value="2">Masculin</option>
                                                                                <option value="1">Féminin</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Religion</label>
                                                                            <select name="situation_matri" id="situation_matri" class="form-control">
                                                                                <option value="2">Musulmane</option>
                                                                                <option value="1">Chrétienne</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="">N.I.N</label>
                                                                            <input type="text" class="form-control" id="nin" aria-describedby="emailHelp" name="nin">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Statut</label>
                                                                            <select name="statut" id="statut" class="form-control">
                                                                                <option value="2">Non Fonctionnaire</option>
                                                                                <option value="1">Fonctionnaire</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                            <label for="">Numéro IPRES</label>
                                                                            <input type="text" class="form-control" id="num_ipres" aria-describedby="emailHelp"  name="num_ipres">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="">Références Embauche</label>
                                                                        <input type="text" class="form-control" id="ref_embauche" aria-describedby="emailHelp" name="ref_embauche">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-12 justify-content-start">
                                                                    <button type="button" id="suivant_agent" class="btn btn-primary">Suivant</button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                <!-- Fin Tab Informations de l'employé -->

                                                <!-- Début Tab Recrutement -->
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                        <h5>Recrutement</h5>
                                                        <hr>
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Catégorie</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">M</option>
                                                                            <option value="1">C</option>
                                                                            <option value="3">A</option>
                                                                            <option value="4">B</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Site</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">Siège</option>
                                                                            <option value="1">Dakar</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Emploi</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">Supérieur</option>
                                                                            <option value="1">Mas</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Fonction</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">Informaticien</option>
                                                                            <option value="1">Contable</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Direction</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">DRH</option>
                                                                            <option value="1">DSI</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Subdivision</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">Supérieur</option>
                                                                            <option value="1">Mas</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Section</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">RH</option>
                                                                            <option value="1">RH</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                        <label for="">Filiére Emploi</label>
                                                                        <select name="situation_matri" id="situation_matri" class="form-control">
                                                                            <option value="2">DRH</option>
                                                                            <option value="1">DSI</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 justify-content-start">
                                                                <button type="button" id="suivant_recrutement" class="btn btn-primary">Suivant</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- Fin Tab Recrutement -->

                                                <!-- Début Tab Récap Nouvel Agent -->
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                        <p class="mb-0">Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem. Ullamco ut ad minim do mollit labore ipsum laboris ipsum commodo sunt tempor enim incididunt. Commodo quis sunt dolore aliquip aute tempor irure magna enim minim reprehenderit. Ullamco consectetur culpa veniam sint cillum aliqua incididunt velit ullamco sunt ullamco quis quis commodo voluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua pariatur mollit voluptate voluptate consequat non.</p>
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
    @endsection



                                