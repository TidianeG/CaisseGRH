<?php

namespace App\Http\Controllers\admin;

use App\Enums\EmployeGenreEnum;
use App\Enums\EmployeReligionEnum;
use App\Enums\EmployeSituationFamilialeEnum;
use App\Enums\EmployeStatutEnum;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Contrat;
use App\Models\Direction;
use App\Models\Document;
use App\Models\DocumentEmployeeActivite;
use App\Models\Emploi;
use App\Models\Employee;
use App\Models\EmployeeActivite;
use App\Models\FiliereEmploi;
use App\Models\Fonction;
use App\Models\Section;
use App\Models\Site;
use App\Models\Subdivision;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Date;

class EmployeController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function getEmployes(){

        $employe_activites = EmployeeActivite::all();

        return view('chef_personnel.employe.index', compact('employe_activites'));
    }

    public function create(){
        $directions = Direction::all();
        $categories = Categorie::all();
        $emplois = Emploi::all();
        $fonctions = Fonction::all();
        $sections = Section::all();
        $sites = Site::all();
        $subdivisions = Subdivision::all();
        $filieres = FiliereEmploi::all();
        $contrats = Contrat::all();
        return view('chef_personnel.employe.create', compact('directions','categories','emplois','fonctions','sections','sites','subdivisions','filieres','contrats'));
    }

    public function saveEmployee(Request $request){

        $this->validate($request, [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            //'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            //'date_embauche' => 'required',
            'nin' => 'required',
            'num_ipres' => 'required',
            'ref_embauche' => 'required',
            'genre' => ['required', new Enum(EmployeGenreEnum::class)],
            'situation_familiale' => ['required', new Enum(EmployeSituationFamilialeEnum::class)],
            'statut' => ['required', new Enum(EmployeStatutEnum::class)],
            'religion' => ['required', new Enum(EmployeReligionEnum::class)]
        ]);


        do {
            $matricule = rand(100,300).'/E';
            $matricule_exist = Employee::where('matricule',$matricule)->first();
        } while (!empty($matricule_exist));

        $employe = new Employee();
        $employe->matricule = $matricule;
        $employe->prenom = $request->prenom;
        $employe->nom = $request->nom;
        $employe->lieu_naissance = $request->lieu_naissance;
        $employe->nin = $request->nin;
        $employe->numero_ipres = $request->num_ipres;
        $employe->genre = $request->genre;
        $employe->situation_familiale = $request->situation_familiale;
        $employe->statut = $request->statut;
        $employe->religion = $request->religion;
        $employe->adresse = $request->adresse;
        $employe->telephone = $request->telephone;
        $employe->date_naissance = $request->date_naissance;
        $employe->date_embauche = $request->date_embauche;
        
        
        //dd($request);
        if ($employe->save()) {
            $employee_active = EmployeeActivite::create([
                'matricule' =>$employe->matricule,
                'employee_id' =>$employe->id,
                'section_id' => intval($request->section),
                'emploi_id' => intval($request->emploi),
                'fonction_id' => intval($request->fonction),
                'filiere_emploi_id' => intval($request->filiere_emploi),
                'categorie_id' => intval($request->categorie)

            ]);

            if ($employee_active) {
                return redirect()->route('employe.show', ['slug'=>$employee_active->id]);
            }
            else {
                return redirect()->back()->with(['error'=> 'Erreur !!!']);
            }
        }
        
    }

    public function getSubdivisionsCreateEmp($slug){
        $subdivisions = Subdivision::where('direction_id',$slug)->get();

        return response()->json([
            'subdivisions' => $subdivisions,
        ], 200);
    }

    public function getSectionsCreateEmp($slug){
        $sections = Section::where('subdivision_id',$slug)->get();

        return response()->json([
            'sections' => $sections,
        ], 200);
    }

    public function getEmploye($slug){

        $employe = EmployeeActivite::where('employee_id',$slug)->first();
        //dd($employe);
        $employe->employee->date_naissance = new DateTime($employe->employee->date_naissance);
        $employe->employee->date_embauche = new DateTime($employe->employee->date_embauche);
        
        $employe->employee->date_embauche = $employe->employee->date_embauche->format('d/m/Y');
        $employe->employee->date_naissance = $employe->employee->date_naissance->format('d/m/Y');

        $documents = Document::all();
        $document_employes = DocumentEmployeeActivite::where('employee_activite_id',$employe->id)->get();
        return view('chef_personnel.employe.show', compact('employe','documents','document_employes'));
    }
}
