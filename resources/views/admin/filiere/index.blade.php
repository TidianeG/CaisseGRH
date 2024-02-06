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
                                                        <h5 class="container-fluid"> <i class="fa-solid fa-list"></i> Liste des Filières</h5>
                                                    </div>
                                                    <div>
                                                        <button type="button" data-toggle="modal" data-target="#add_new_filiere" class="btn btn-primary">
                                                            <i class="fa-solid fa-home"></i> Nouvelle Filière
                                                        </button>
                                                        <button type="button" data-toggle="modal" data-target="#add_new_filieres_lot" class="btn btn-primary">
                                                            <i class="fa-solid fa-home"></i> Importer
                                                        </button>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="myTable">
                                                        <thead>
                                                            <tr >
                                                                <th>Code Filière</th>
                                                                <th>Nom Filière</th>
                                                                <th>Description</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($filieres as $filiere)
                                                                <tr style="cursor: pointer;" class="clickable-row" data-href="{{route('get_filiere',['slug'=>$filiere->id])}}">
                                                                    <td scope="row">
                                                                        <i class="fa-solid fa-home  fa-lg text-primary me-3"></i>
                                                                        {{$filiere->code_filiere_emploi}}
                                                                    </td>
                                                                    <td> {{$filiere->nom_filiere_emploi}}</td>
                                                                    <td> {{$filiere->description}}</td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-start">
                                                                            <a href="#" class="mr-5"><i class="fa-solid fa-edit"></i></a>
                                                                            <a href="#"> <i class="fa-solid fa-trash-can bg-red" style="color: red;"></i></a>
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

                <!-- modal add Site -->
                    <div class="modal fade" id="add_new_filiere" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                <h5 class="mb-0">Nouvelle Filière</h5>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('add_filiere')}}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Nom Filière</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" name="nom_filiere" class="form-control" id="nom_filiere" placeholder="Nom Filiere" required  aria-describedby="basic-icon-default-fullname2" />
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Description</label>
                                                                <div class="input-group input-group-merge">
                                                                    <textarea name="description_filiere" id="description_filiere" class="form-control" cols="30" rows="5"></textarea>
                                                                    <!-- <input type="text class="form-control" id="description_type_consultation" placeholder="Description"  aria-describedby="basic-icon-default-fullname2" /> -->
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
                <!--/ modal add Filière -->


                <!-- modal add Filières par Lot-->
                <div class="modal fade" id="add_new_filieres_lot" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                    <h5 class="mb-0">Nouvelles Filières</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('add_filieres_lot')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Fichier</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="file" name="fichier" class="form-control" id="fichier"  required  aria-describedby="basic-icon-default-fullname2" />
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
                <!--/ modal add Site par Lot-->
                <script>
                    const alerts = document.querySelectorAll('[class*="alert-"]')
                    for (const alert of alerts) {
                        setTimeout( function() {
                            const bootstrapAlert = bootstrap.Alert.getOrCreateInstance(alert);
                            bootstrapAlert.close();
                        }, 5000);
                    }
                </script>
        @endsection