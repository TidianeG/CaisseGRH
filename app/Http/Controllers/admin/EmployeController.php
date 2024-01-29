<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeActivite;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function getEmployes(){

        $employe_activite = EmployeeActivite::all();

        return view('admin.employe.index', compact('employe_activite'));
    }

    public function create(){

        return view('admin.employe.create');
    }

    public function saveEmployee(Request $request){


        $employe = new Employee();
        //$employe_activite
    }
}
