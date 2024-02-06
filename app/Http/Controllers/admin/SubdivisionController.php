<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportSubdivision;
use App\Models\Direction;
use App\Models\Subdivision;
use Maatwebsite\Excel\Facades\Excel;

class SubdivisionController extends Controller
{
      
     /**
     * Code Site de 401 à 500.
     *
     */

     public function __construct() {
        $this->middleware('admin');
    }

    public function getSubdivisions(){
        $directions = Direction::all();
        $subdivisions = Subdivision::all();
        return view('admin.subdivision.index', compact('directions','subdivisions'));
    }

    public function create(Request $request){
        $subdivision = new Subdivision();
        do {
            $code = rand(401, 500);
            $code_exsit = Subdivision::where('code_subdivision', $code)->first();
        } while (!empty($code_exsit));

        $nom_subdivision_existe = Subdivision::where('nom_subdivision', $request->input('nom_subdivision'))->first();
        if (empty($nom_subdivision_existe)) {
            $subdivision->code_subdivision = $code;
            $subdivision->nom_subdivision = $request->input('nom_subdivision');
            $subdivision->description = $request->input('description_subdivision');
            $subdivision->direction_id = intval($request->input('direction_id'));
            //dd($site);
            if ($subdivision->save()) {
                return redirect()->back()->with(['success' => 'Subdivision créée avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom de la Subdivision existe dèja !!!']);
        }
        
    }

    //// Insertion Subdivisions par Lot
    public function createSubdivisionImportLot(Request $request){
        
        $excel = Excel::import(new ImportSubdivision, $request->file('fichier')->store('files'));
         //dd($excel);
        if ($excel) {
            return redirect()->back()->with('success', 'Fichier chargé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Aucune donnée n\'est ajoutée.');
        } 
    }
//// Fin Insertion Subdivisions par Lot

    public function getSubdivision($slug){

        $subdivision = Subdivision::find($slug);

        return view('admin.subdivision.show', compact('subdivision'));
    }
}
