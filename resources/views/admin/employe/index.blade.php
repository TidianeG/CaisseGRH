
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
                                                    <table class="table table-hover" id="myTable">
                                                        <thead>
                                                            <tr >
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
                                                            <tr class="cursor-pointer" style="cursor: pointer;">
                                                                <th scope="row">
                                                                    <img class="fa-solid fa-person-breastfeeding fa-lg text-primary me-3" src="{{asset('assets/img/logo_CSS_SMALL.png')}}" width="40" height="40">
                                                                </th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <th scope="row"></th>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            
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
        @endsection
  