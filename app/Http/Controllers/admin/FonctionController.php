<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Fonction;
use Illuminate\Http\Request;

class FonctionController extends Controller
{
     /**
     * Code Site de 601 à 750.
     *
     */

     public function __construct() {
        $this->middleware('admin');
    }

    public function getFonctions(){
        $fonctions = Fonction::all();
        return view('admin.fonction.index', compact('fonctions'));
    }

    public function create(Request $request){
        $fonction = new Fonction();
        do {
            $code = rand(601, 750);
            $code_exsit = Fonction::where('code_fonction', $code)->first();
        } while (!empty($code_exsit));

        $nom_fonction_existe = Fonction::where('nom_fonction', $request->input('nom_fonction'))->first();
        if (empty($nom_fonction_existe)) {
            $fonction->code_fonction = $code;
            $fonction->nom_fonction = $request->input('nom_fonction');
            $fonction->description = $request->input('description_fonction');
            
            //dd($site);
            if ($fonction->save()) {
                return redirect()->back()->with(['success' => 'Fonction créée avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création du site']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom de la Fonction existe dèja !!!']);
        }
        
    }

    public function getSection($slug){

        $fonction = Fonction::find($slug);

        return view('admin.fonction.show', compact('fonction'));
    }
}
