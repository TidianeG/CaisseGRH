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
                                        <div class="card">
                                            <div class="card-header">
                                                
                                                <div class="d-flex justify-content-between">
                                                    <div class="col-auto " style="display: flex; flex-direction: column; justify-content: center;">
                                                        <h5 class="container-fluid"> <i class="fa-solid fa-list"></i> Liste des Signataires</h5>
                                                    </div>
                                                    <div>
                                                        <a href="#" data-toggle="modal" data-target="#add_new_signataire" class="btn btn-primary"><i class="fa-solid fa-sign"></i> Nouveau Signataire</a>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table " id="myTable">
                                                        <thead class="" style="background-color: #002278;color:#fff;">
                                                            <tr>
                                                                <th>Prénom & Nom</th>
                                                                <th>Fonction</th>
                                                                <th>Signer</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($signataires as $signataire)
                                                                
                                                                <tr class=""  style="">
                                                                    <td>{{$signataire->employee_activite->employee->prenom ?? ""}} {{$signataire->employee_activite->employee->nom ?? ""}}</td>
                                                                    <td>{{$signataire->employe_activite->fonction->nom_fonction}}</td>
                                                                    <td>{{$signataire->signer}}</td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-start">
                                                                            <a href="" class="mr-5"><i class="fa-solid fa-eye"></i></a>
                                                                            
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

                <!-- modal create Signataire  -->
                <div class="modal fade" id="add_new_signataire" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                <h5 class="mb-0">Nouveau Signataire</h5>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('configuration.add_signataire')}}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Signataire</label>
                                                                <div class="input-group input-group-merge">
                                                                    <select name="signataire" id="signataire" class="form-control">
                                                                        <option value=""></option>
                                                                        @foreach ($emps as $emp)
                                                                            <option value="{{$emp->id}}">{{$emp->prenom}} {{$emp->nom}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Libelé</label>
                                                                <div class="input-group input-group-merge">
                                                                    <textarea name="signer" id="signer" cols="30" rows="5" class="form-control"></textarea>
                                                                </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <!--/ modal create Signataire  -->
                <style>
                    .table-hover:hover{
                        background-color: #ee9d28;
                        color: #fff;
                    }
                </style>

        @endsection