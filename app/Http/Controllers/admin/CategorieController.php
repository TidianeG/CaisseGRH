<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
     /**
     * Code Site de 501 à 600.
     *
     */

     public function __construct() {
        $this->middleware('admin');
    }

    public function getCategories(){
        $categories = Categorie::all();
        return view('admin.categorie.index', compact('categories'));
    }

    public function create(Request $request){
        $categorie = new Categorie();
        do {
            $code = rand(851, 1000);
            $code_exsit = Categorie::where('code_categorie', $code)->first();
        } while (!empty($code_exsit));

        $nom_categorie_existe = Categorie::where('nom_categorie', $request->input('nom_categorie'))->first();
        if (empty($nom_categorie_existe)) {
            $categorie->code_categorie = $code;
            $categorie->nom_categorie = $request->input('nom_categorie');
            $categorie->description = $request->input('description_categorie');
            //dd($site);
            if ($categorie->save()) {
                return redirect()->back()->with(['success' => 'Catégorie créée avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création du site']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom de la Catégorie existe dèja !!!']);
        }
        
    }

    public function getCategorie($slug){

        $categorie = Categorie::find($slug);

        return view('admin.categorie.show', compact('categorie'));
    }
}
