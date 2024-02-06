<?php

namespace App\Http\Controllers\admin;

use App\Enums\EmployeGenreEnum;
use App\Http\Controllers\Controller;
use App\Models\EmployeeActivite;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;

class DocumentController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function getDocuments(){

        return view('admin.documents.list_documents');
    }

    public function genereDocument(Request $request)  {
        
        $matricule = $request->matricule_emp;
        $mode = $request->mode;
        
        $employe = EmployeeActivite::where('matricule', $matricule)->first();

        $date_naissance = new DateTime($employe->employee->date_naissance);
        $date_naissance = $date_naissance->format('d/M/Y');

        $date_embauche = new DateTime($employe->employee->date_embauche);
        $date_embauche = $date_embauche->format('d/M/Y');
        if ($employe->employee->genre === EmployeGenreEnum::Masculin) {
            $civilite = 'Monsieur';
            $ne = 'né';
            $emp = 'employé';
        } else {
            $civilite = 'Madame';
            $ne = 'née';
            $emp = 'employée';
        }
        
        $data = [
            'mode' => $mode,
            'civilite' => $civilite,
            'prenom' => $employe->employee->prenom,
            'nom' => $employe->employee->nom,
            'date_naissance' => $date_naissance,
            'lieu_naissance' => $employe->employee->lieu_naissance,
            'date_embauche' => $date_embauche,
            'fonction' => $employe->fonction->nom_fonction,
            'service' => $employe->section->subdivision->nom_subdivision,
            'categorie' => $employe->categorie->nom_categorie,
            'ne' => $ne,
            'emp' =>$emp
        ]; 

        $pdf = PDF::loadView('admin.documents.attestation_travail',$data);

        return $pdf->download("Attestation.pdf");
        
    }
}
