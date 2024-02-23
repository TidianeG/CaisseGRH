<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeActivite;
use App\Models\EmployeHistorique;
use Illuminate\Http\Request;

class EmployeHistoriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $site_mouv = $request->input('site_mouv');
        
        $section = $request->section_mouv;
        $fonction_mouv = $request->fonction_mouv;
        $emploi_mouv = $request->emploi_mouv;
        $filiere_mouv = $request->filiere_mouv;
        $employe_historique = new EmployeHistorique();

        $employe_active = EmployeeActivite::find($request->id_mouv);
        $employe_active_exit = EmployeeActivite::where('matricule', $request->matricule_mouv)
                                    ->where('site_id', $site_mouv)
                                    ->where('section_id', $section)
                                    ->where('fonction_id', $fonction_mouv)
                                    ->where('emploi_id', $emploi_mouv)->first();
        
        
        if (is_null($employe_active_exit)) {
           // dd($employe_active_exit);
            $employe_historique->matricule = $employe_active->matricule;
            $employe_historique->employee_id = $employe_active->employee_id;
            $employe_historique->section_id = $employe_active->section_id;
            $employe_historique->fonction_id = $employe_active->fonction_id;
            $employe_historique->filiere_emploi_id = $employe_active->filiere_emploi_id;
            $employe_historique->categorie_id = $employe_active->categorie_id;
            $employe_historique->emploi_id = $employe_active->emploi_id;
            $employe_historique->date_debut = $employe_active->date_debut;
            $employe_historique->date_fin = $employe_active->date_fin;
            $employe_historique->site_id = $employe_active->site_id;
            $employe_historique->save();
            if ($employe_historique) {
                $employe_active->section_id = $section;
                $employe_active->fonction_id = $fonction_mouv;
                $employe_active->emploi_id = $emploi_mouv;
                $employe_active->site_id = $site_mouv;
                $employe_active->filiere_emploi_id = $filiere_mouv;
                if ($employe_active->save()) {
                    return redirect()->back()->with(['success' => 'Mouvement effectué']);
                }
                else {
                    return redirect()->back()->with(['error' => 'Mouvement non effectué']);
                }
                
                
            }
        }
        else {
            return redirect()->back();
        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeHistorique $employeHistorique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeHistorique $employeHistorique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeHistorique $employeHistorique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeHistorique $employeHistorique)
    {
        //
    }
}
