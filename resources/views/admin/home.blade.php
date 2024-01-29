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
                                                
                                                <div class="row">
                                                    <div class="col-auto " style="display: flex; flex-direction: column; justify-content: center;">
                                                        <h5 class="container-fluid">Période de pointage des agents</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <select name="" id="" class="form-control">
                                                            <option value="2024">2024</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-auto">
                                                        <select name="" id="" class="form-control">
                                                            <option value="Fevrier">Février</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-auto">
                                                        <select name="" id="" class="form-control">
                                                            <option value="25">25</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-primary">Valider</button>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="myTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Matricule</th>
                                                                <th>Prénom</th>
                                                                <th>Nom</th>
                                                                <th>Fonction</th>
                                                                <th>Service</th>
                                                                <th>Heure d'arrivée</th>
                                                                <th>Heure de départ</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <th scope="row"></th>
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
                                    <!-- [ basic-table ] end -->

                                </div>
                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            
  
    @endsection