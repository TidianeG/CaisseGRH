
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
                                                        <h5 class="container-fluid"> <i class="fa-solid fa-list"></i> Liste des utilisateurs</h5>
                                                    </div>
                                                    <div>
                                                        <a href="" class="btn btn-primary"><i class="fa-solid fa-person"></i> Nouvel utilisateur</a>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table " id="myTable">
                                                        <thead class="" style="background-color: #002278;color:#fff;">
                                                            <tr >
                                                                <th>Matricule</th>
                                                                <th>Prénom & Nom</th>
                                                                <th>Fonction</th>
                                                                <th>Profil</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($users as $user)
                                                                <tr class=""  style="" >

                                                                    <td></td>
                                                                    <td>{{$user->name}}</td>
                                                                    <td></td>
                                                                    <td>{{$user->profil}}</td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-start">
                                                                            <a href="#" class="mr-5"><i class="fa-solid fa-eye"></i></a>
                                                                            
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
  