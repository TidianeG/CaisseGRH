
    @extends('layouts.appadmin')
        @section('content')
            <div class="">
                <div class="">
                    <div class="breadcrumb-path mb-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><img src="../assets/img/dash.png" class="mr-2" alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active"> Employees / Documents</li>
                        </ul>
                        <h3>Employees</h3>
                    </div>
                    
                </div>
                <div class="d-flex justify-content-end mb-4"> 
                    <a class="btn-add" href="#" data-toggle="modal" data-target="#create_document"><i class="fa fa-plus"></i> Nouveau document</a>
                </div>
                <div class=" mb-4 ">
                    <div id="" class="">
                        <div class="card p-3">
                            <div class="table-heading">
                                <h2>Documents générés</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table  custom-table table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Type de document</th>
                                            <th>Date de génération</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr  class="" style="cursor: pointer;">
                                            <td></td>
                                            <td><label for=""></label></td>
                                            <td><label for=""></label></td>
                                            <td><label for=""></label></td>
                                            <td><label for=""></label></td>
                                            <td><label for=""></label></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <!-- modal create document -->
        <div class="modal fade" id="create_document" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <nav class="navbar navbar-light ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('assets/img/logo_CSS.png')}}" alt="" width="70%" height="70%" class="d-inline-block align-text-center ">
                            </a>
                        </div>
                    </nav>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                
                                                <input type="text" name="matricule" class="form-control" id="matricule" placeholder="Matricule"  aria-describedby="basic-icon-default-fullname2" />
                                            </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Type de document</label>
                                        
                                            <div class="col input-group input-group-merge">
                                                
                                                <select name="type_document" id="type_document" required class="form-control">
                                                    <option value="certificat">Certificat de travail</option>
                                                    <option value="attestation">Attestation de travail</option>
                                                </select>
                                            </div>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-phone">Motif</label>
                                        <div class="input-group input-group-merge">
                                           
                                            <textarea name="" id="" cols="30" rows="30" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-add">Généré</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <!--/ modal end  create consultation -->
        @endsection
  
