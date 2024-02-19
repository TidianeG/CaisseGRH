<?php

namespace App\Http\Controllers;

use App\Enums\EmployeGenreEnum;
use App\Models\Document;
use App\Models\DocumentEmployeeActivite;
use App\Models\EmployeeActivite;
use App\Models\Signataire;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        $signataires = Signataire::all();
        return view('admin.documents.index', compact('documents','signataires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $documents = Document::create([
            'nom_document' => $request->nom_document,
            'signataire_id' => $request->signataire
        ]);

        if ($documents) {
            return redirect()->back()->with(['success' => 'Ducument Créer']);
        } else {
            return redirect()->back()->with(['error' => 'Erreur de  Création']);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }

    public function getDocuments(){

        return view('admin.documents.list_documents');
    }

    public function genereDocument(Request $request)  {
        
        $matricule = $request->matricule_emp;
        $mode = $request->mode;
        
        $employe = EmployeeActivite::where('matricule', $matricule)->first();

        $document_employe = DocumentEmployeeActivite::create([
            'document_id' => $request->document_type,
            'employee_activite_id' => $employe->id
        ]);

        if ($document_employe) {
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
                // 'signataire' => $document_employe->document->signataire->employee_activite->employee->prenom."".$document_employe->document->signataire->employee_activite->employee->nom,
                'signer' =>$document_employe->document->signataire->signer,
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
        } else {
            return redirect()->back()->with(['error' => 'Erreur de  Création']);
        }
        
        
        
    }
}
