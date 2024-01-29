<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DocumentController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function getDocuments(){

        return view('admin.documents.list_documents');
    }

    public function genereDocument()  {
        

        $pdf = PDF::loadView('admin.documents.attestation_travail');

        return $pdf->stream("Attestation.pdf");
        
    }
}
