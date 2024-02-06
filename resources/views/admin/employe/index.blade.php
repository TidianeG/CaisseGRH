
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
                                    <!-- [ basic-table ] start -->
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                
                                                <div class="d-flex justify-content-between">
                                                    <div class="col-auto " style="display: flex; flex-direction: column; justify-content: center;">
                                                        <h5 class="container-fluid"> <i class="fa-solid fa-list"></i> Liste des employés</h5>
                                                    </div>
                                                    <div>
                                                        <a href="{{route('createEmploye')}}" class="btn btn-primary"><i class="fa-solid fa-person"></i> Nouvel Employé</a>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table " id="myTable">
                                                        <thead class="" style="background-color: #002278;color:#fff;">
                                                            <tr >
                                                                <th>Photo</th>
                                                                <th>Matricule</th>
                                                                <th>Prénom</th>
                                                                <th>Nom</th>
                                                                <th>Fonction</th>
                                                                <th>Catégorie</th>
                                                                <th>Affectation</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($employe_activites as $employe_activite)
                                                                <tr class=""  style="" >
                                                                    <td scope="row">
                                                                        <img class="fa-solid fa-person-breastfeeding fa-lg text-primary " style="margin-top: -7px;" src="{{asset('assets/img/logo_CSS_SMALL.png')}}" width="40" height="40">
                                                                    
                                                                    </td>
                                                                    <td>{{$employe_activite->matricule}}</td>
                                                                    <td>{{$employe_activite->employee->prenom}}</td>
                                                                    <td>{{$employe_activite->employee->nom}}</td>
                                                                    <td>{{$employe_activite->fonction->nom_fonction}}</td>
                                                                    <td>{{$employe_activite->categorie->nom_categorie}}</td>
                                                                    <td>{{$employe_activite->section->nom_section}}</td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-start">
                                                                            <a href="{{route('get_employe',['slug'=>$employe_activite->employee_id])}}" class="mr-5"><i class="fa-solid fa-eye"></i></a>
                                                                            
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- [ basic-table ] end -->

                                </div>
                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .table-hover:hover{
                        background-color: #ee9d28;
                        color: #fff;
                    }
                </style>
        @endsection
  