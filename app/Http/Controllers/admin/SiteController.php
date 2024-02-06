<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Imports\ImportSite;
use App\Models\Site;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SiteController extends Controller
{
    
     /**
     * Code Site de 100 à 300.
     *
     */

    public function __construct() {
        $this->middleware('admin');
    }

    public function getSites(){
        $sites = Site::all();
        return view('admin.sites.index', compact('sites'));
    }

    public function create(Request $request){
        $site = new Site();
        do {
            $code = rand(100, 300);
            $code_exsit = Site::where('code_site', $code)->first();
        } while (!empty($code_exsit));

        $nom_site_existe = Site::where('nom_site', $request->input('nom_site'))->first();
        if (empty($nom_site_existe)) {
            $site->code_site = $code;
            $site->nom_site = $request->input('nom_site');
            $site->description = $request->input('description_site');
            //dd($site);
            if ($site->save()) {
                return redirect()->back()->with(['success' => 'Site créé avec succès']);

            }

            else {
                return redirect()->back()->with(['error' => 'Erreur lors de la création du site']);
            }
        }

        else {
            return redirect()->back()->with(['error' => 'Le nom du site existe dèja !!!']);
        }
        
    }

    public function createSiteImportLot(Request $request){
        
        $excel = Excel::import(new ImportSite, $request->file('fichier')->store('files'));
         //dd($excel);
        if ($excel) {
            return redirect()->back()->with('success', 'CSV file imported successfully.');
        } else {
            return redirect()->back()->with('error', 'Aucune n\'est ajoutée.');
        } 
    }

    public function getSite($slug){

        $site = Site::find($slug);

        return view('admin.sites.show', compact('site'));
    }
}
