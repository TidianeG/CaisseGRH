<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function __construct() {
        return $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contrats = Contrat::all();

        return view('admin.contrats.index', compact('contrats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom_contrat' => 'required|string|max:255',
            'description_contrat' => 'required|string'
            //'date_naissance' => 'required',
            
        ]);

        $contrats = Contrat::create([
            'nom_contrat' => $request->nom_contrat,
            'description' => $request->description_contrat
        ]);

        if ($contrats) {
            return redirect()->back()->with(['success' => 'Type de contrat ajouté']);
        } else {
            return redirect()->back()->with(['error' => 'Type de contrat non ajouté']);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Contrat $contrat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contrat $contrat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contrat $contrat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrat $contrat)
    {
        //
    }
}
