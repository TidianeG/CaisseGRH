<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeActivite;
use App\Models\Signataire;
use Illuminate\Http\Request;

class SignataireController extends Controller
{
    public function __construct() {
        return $this->middleware('admin');
    }

    public function getSignataires(){

        $signataires = Signataire::all();
        $emps = Employee::all();
        return view('admin.signataire.index', compact('signataires','emps'));
    }

    public function getSignataire($slug){
        $signataire = Signataire::find($slug);

        return view('admin.signataire.show', compact('signataire'));
    }

    public function create(Request $request){

    }
}
