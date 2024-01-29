@extends('layouts.appdocument')
    @section('content')
        

         <div class=" mt-3" style="margin-top: 70px !important;">
            <table class="table table-responsive" style="margin-bottom: 70px !important;">
                <thead>
                    <tr>
                        <th>
                            <h4>DATE : 28/12/2023</h4>
                            <h4>HEURE : 12:07:42</h4>
                        </th>
                        <th style="text-align: center;"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets\img\logo_CSS.png'))) }}" style="width: 250px; height: 110px;" ></th>
                        <th>
                            <h4>DRH/SPF</h4>
                            <h4>Utilisateur : Cheikh Gaye</h4>
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
                    <p style="text-align: justify; font-weight: 200;">Nous soussigné Directeur Général de la Caisse de Sécurité Sociale, attestons que Madame BOUYA BA née le 15 Septembre 1968 à DIOURBEL, est eployée dans notre Institution depuis le 1er Juin 2006.</p>
                    <p style="text-align: justify; font-weight: 200;">L'intéressé occupe actuellement les fonctions de MAITRESSE SAGE FEMME en service à la DIVISION DES PRESTATIONS SOCIALES ET SAN catégorie M4 échelon A.</p>
                    <p style="text-align: justify; font-weight: 200;">La présente attestation est délivrée à l'intéréssée sur sa demande, pour serveir et valoir ce que de droit.</p>
            </div>

            <div style="text-align: right; font-weight: 100;" >
                <h4 style="font-weight: 100;">PAR LA DIRECTION DES RESSOURCES HUMAINES</h4>
                <h4 style="font-weight: 100;">ET PAR DELEGATION</h4>
                <h4 style="font-weight: 100;">LE CHEF DU PERSONNEL</h4>
                <br><br>
                <h4>KHADIM DIAGNE</h4>
            </div>
         </div>
        <style>

        </style>
    @endsection