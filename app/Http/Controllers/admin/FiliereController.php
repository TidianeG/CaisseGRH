<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Imports\ImportFiliereEmploi;
use App\Models\FiliereEmploi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FiliereController extends Controller
{
    
     /**
     * Code Site de 1001 à 2000.
     *
     */

     public function __construct() {
        $this->middleware('admin');
    }

    public function getFilieres(){
        $filieres = FiliereEmploi::all();
        return view('admin.filiere.index', compact('filieres'));
    }

    public function create(Request $request){
        $filiere = new FiliereEmploi();
        do {
            $code = rand(1001, 2000);
            $code_exsit = FiliereEmploi::where('code_filiere_emploi', $code)->first();
        } while (!empty($code_exsit));

        $nom_filiere_existe = FiliereEmploi::where('nom_filiere_emploi', $request->input('nom_filiere'))->first();
        if (empty($nom_direction_existe)) {
            $filiere->code_filiere_emploi = $code;
            $filiere->nom_filiere_emploi = strtoupper($request->input('nom_filiere'));
            $filiere->description = $request->input('description_filiere');
            //dd($site);
            if ($filiere->save()) {
                return redirect()->back()->with(['success' => 'Filière créée avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom de la Filière existe dèja !!!']);
        }
        
    }

    //// Insertion Sites par Lot
    public function createFiliereImportLot(Request $request){
        
        $excel = Excel::import(new ImportFiliereEmploi, $request->file('fichier')->store('files'));
         //dd($excel);
        if ($excel) {
            return redirect()->back()->with('success', 'Fichier chargé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Aucune donnée n\'est ajoutée.');
        } 
    }
    //// Fin Insertion Sites par Lot

    public function getFiliere($slug){

        $filiere = FiliereEmploi::find($slug);

        return view('admin.filiere.show', compact('filiere'));
    }
}
