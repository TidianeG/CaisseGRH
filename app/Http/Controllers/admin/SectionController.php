<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Imports\ImportSection;
use App\Models\Section;
use App\Models\Subdivision;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SectionController extends Controller
{
     /**
     * Code Site de 501 à 600.
     *
     */

     public function __construct() {
        $this->middleware('admin');
    }

    public function getSections(){
        $sections = Section::all();
        $subdivisions = Subdivision::all();
        return view('admin.sections.index', compact('sections','subdivisions'));
    }

    public function create(Request $request){
        $section = new Section();
        do {
            $code = rand(501, 600);
            $code_exsit = Section::where('code_section', $code)->first();
        } while (!empty($code_exsit));

        $nom_section_existe = Section::where('nom_section', $request->input('nom_section'))->first();
        if (empty($nom_section_existe)) {
            $section->code_section = $code;
            $section->nom_section = $request->input('nom_section');
            $section->description = $request->input('description_section');
            $section->subdivision_id = intval($request->input('subdivision_id'));
            //dd($site);
            if ($section->save()) {
                return redirect()->back()->with(['success' => 'Section créée avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création du site']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom de la Section existe dèja !!!']);
        }
        
    }

    //// Insertion Subdivisions par Lot
    public function createSectionImportLot(Request $request){
        
        $excel = Excel::import(new ImportSection, $request->file('fichier')->store('files'));
         //dd($excel);
        if ($excel) {
            return redirect()->back()->with('success', 'Fichier chargé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Aucune donnée n\'est ajoutée.');
        } 
    }
//// Fin Insertion Subdivisions par Lot


    public function getSection($slug){

        $section = Section::find($slug);

        return view('admin.sections.show', compact('section'));
    }
}
