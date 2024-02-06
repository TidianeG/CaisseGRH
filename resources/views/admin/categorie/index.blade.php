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
                                                        <h5 class="container-fluid"> <i class="fa-solid fa-list"></i> Liste des Catégories</h5>
                                                    </div>
                                                    <div>
                                                        <button type="button" data-toggle="modal" data-target="#add_new_site" class="btn btn-primary">
                                                            <i class="fa-solid fa-home"></i> Nouvelle Catégorie
                                                        </button>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="myTable">
                                                        <thead>
                                                            <tr >
                                                                <th>Code Catégorie</th>
                                                                <th>Nom Catégorie</th>
                                                                <th>Description</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categories as $categorie)
                                                                <tr style="cursor: pointer;" class="clickable-row" data-href="{{route('get_categorie',['slug'=>$categorie->id])}}">
                                                                    <td scope="row">
                                                                        <i class="fa-solid fa-home  fa-lg text-primary me-3"></i>
                                                                        {{$categorie->code_categorie}}
                                                                    </td>
                                                                    <td> {{$categorie->nom_categorie}}</td>
                                                                    <td> {{$categorie->description}}</td>
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
                    <div class="modal fade" id="add_new_site" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="padding-top:0px !important;">
                                    <div class="row">
                                        <div class="col-xl">
                                            <div class="card mb-4">
                                                <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="mb-0">Nouvelle Catégorie</h5>
                                                
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{route('add_categorie')}}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Nom Catégorie</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" name="nom_categorie" class="form-control" id="nom_categorie" placeholder="Nom Catégorie" required  aria-describedby="basic-icon-default-fullname2" />
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-icon-default-fullname">Description</label>
                                                                <div class="input-group input-group-merge">
                                                                    <textarea name="description_categorie" id="description_categorie" class="form-control" cols="30" rows="5"></textarea>
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
                <!--/ modal add Site -->

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