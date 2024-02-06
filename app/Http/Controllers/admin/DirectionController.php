<?php

namespace App\Http\Controllers\admin;

use App\Models\Direction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportDirection;
use Maatwebsite\Excel\Facades\Excel;

class DirectionController extends Controller
{
     
     /**
     * Code Site de 300 à 400.
     *
     */

     public function __construct() {
        $this->middleware('admin');
    }

    public function getDirections(){
        $directions = Direction::all();
        return view('admin.directions.index', compact('directions'));
    }

    public function create(Request $request){
        $direction = new Direction();
        do {
            $code = rand(300, 400);
            $code_exsit = Direction::where('code_direction', $code)->first();
        } while (!empty($code_exsit));

        $nom_direction_existe = Direction::where('nom_direction', $request->input('nom_direction'))->first();
        if (empty($nom_direction_existe)) {
            $direction->code_direction = $code;
            $direction->nom_direction = strtoupper($request->input('nom_direction'));
            $direction->description = $request->input('description_direction');
            //dd($site);
            if ($direction->save()) {
                return redirect()->back()->with(['success' => 'direction créée avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom de la direction existe dèja !!!']);
        }
        
    }

//// Insertion Sites par Lot
    public function createDirectionImportLot(Request $request){
        
        $excel = Excel::import(new ImportDirection, $request->file('fichier')->store('files'));
         //dd($excel);
        if ($excel) {
            return redirect()->back()->with('success', 'Fichier chargé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Aucune donnée n\'est ajoutée.');
        } 
    }
//// Fin Insertion Sites par Lot

    public function getDirection($slug){

        $direction = Direction::find($slug);

        return view('admin.directions.show', compact('direction'));
    }
}
