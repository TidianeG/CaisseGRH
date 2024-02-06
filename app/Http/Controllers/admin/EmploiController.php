<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Emploi;
use Illuminate\Http\Request;

class EmploiController extends Controller
{
     /**
     * Code Site de 751 à 850.
     *
     */

     public function __construct() {
        $this->middleware('admin');
    }

    public function getEmplois(){
        $emplois = Emploi::all();
        return view('admin.emploi.index', compact('emplois'));
    }

    public function create(Request $request){
        $emploi = new Emploi();
        do {
            $code = rand(751, 850);
            $code_exsit = Emploi::where('code_emploi', $code)->first();
        } while (!empty($code_exsit));

        $nom_emploi_existe = Emploi::where('nom_emploi', $request->input('nom_emploi'))->first();
        if (empty($nom_emploi_existe)) {
            $emploi->code_emploi = $code;
            $emploi->nom_emploi = $request->input('nom_emploi');
            $emploi->description = $request->input('description_emploi');
            
            //dd($site);
            if ($emploi->save()) {
                return redirect()->back()->with(['success' => 'Emploi créé avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création du site']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom de l\'emploi existe dèja !!!']);
        }
        
    }

    public function getEmploi($slug){

        $emploi = Emploi::find($slug);

        return view('admin.emploi.show', compact('emploi'));
    }
}
