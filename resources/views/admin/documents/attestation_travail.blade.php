@extends('layouts.appdocument')
    @section('content')
         <div class=" mt-3" style="margin-top: 70px !important;">
            <table class="table table-responsive" style="margin-bottom: 70px !important;">
                <thead>
                    <tr>
                        <th>
                            <h4>DATE : <?php echo date('d/m/Y') ?></h4>
                            <h4>HEURE : <?php echo date('H:i:s') ?></h4>
                        </th>
                        <th style="text-align: center;"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets\img\logo_CSS.png'))) }}" style="width: 250px; height: 110px;" ></th>
                        <th>
                            <h4>DRH/SPF</h4>
                            <h4>Utilisateur : {{Auth::user()->name}}</h4>
                        </th>
                    </tr>
                </thead>
            </table>
            <div style="margin-bottom: 70px !important;">
                <span style="min-width: 110px !important; text-decoration: underline !important;"></span><span class=""  ">/DRH/SPF</span>
            </div>
            
            <div class="mb-5" style="margin-bottom: 60px !important;">
                <h1 style="text-align: center;">ATTESTATION DE TRAVAIL </h1>
            </div>
            <div style="margin-bottom: 100px !important;">
                    <p style="text-align: justify; ">Nous soussigné Directeur Général de la Caisse de Sécurité Sociale, attestons que <span style="font-weight: bold;">{{$civilite}} {{$prenom}} {{$nom}}</span> {{$ne}} le <span style="font-weight: bold;">{{$date_naissance}}</span> à <span style="font-weight: bold;">{{$lieu_naissance}}</span>, est {{$emp}} dans notre Institution depuis le <span style="font-weight: bold;">{{$date_embauche}}</span>.</p>
                    <p style="text-align: justify; ">L'intéressé occupe actuellement les fonctions de <span style="font-weight: bold;">{{$fonction}}</span> en service à la <span style="font-weight: bold;">{{$service}}</span> catégorie <span style="font-weight: bold;">{{$categorie}}</span> @if ($mode != 'normal')
                       sera admise à la retraite à 60 ans 
                    @endif.</p>
                    <p style="text-align: justify; ">La présente attestation est délivrée à l'intéréssée sur sa demande, pour serveir et valoir ce que de droit.</p>
            </div>

            <div style="text-align: right; font-weight: 100;" >
                <h4 style="font-weight: 100;">{{$signer}}</h4>
                <br><br>
                <h4>KHADIM DIAGNE</h4>
            </div>
         </div>
        <style>

        </style>
    @endsection