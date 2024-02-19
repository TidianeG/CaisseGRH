<?php

use App\Http\Controllers\admin\ContratController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(Admin::class)->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin_space');
    Route::get('/employes', [App\Http\Controllers\admin\EmployeController::class, 'getEmployes'])->name('employe.index');
    Route::get('/employes/create', [App\Http\Controllers\admin\EmployeController::class, 'create'])->name('employe.create');
    Route::get('/employes/{slug}/employe', [App\Http\Controllers\admin\EmployeController::class, 'getEmploye'])->name('employe.show');
    

    Route::post('/employes/store', [App\Http\Controllers\admin\EmployeController::class, 'saveEmployee'])->name('employe.store');
    
    Route::get('/documents', [App\Http\Controllers\DocumentController::class, 'index'])->name('document.index');
    Route::post('/documents/save', [App\Http\Controllers\DocumentController::class, 'store'])->name('document.store');
    Route::post('/documents/genere-document', [App\Http\Controllers\DocumentController::class, 'genereDocument'])->name('genere_document');
    

    //Get Subdivisions create employe
    Route::get('/employes/create/getSubdivisions/{slug}', [App\Http\Controllers\admin\EmployeController::class, 'getSubdivisionsCreateEmp'])->name('getSubdivisionsCreateEmp');

    //Get Sections create employe
    Route::get('/employes/create/getSections/{slug}', [App\Http\Controllers\admin\EmployeController::class, 'getSectionsCreateEmp'])->name('getSectionsCreateEmp');


    // Routes Sites
    Route::get('/sites', [App\Http\Controllers\admin\SiteController::class, 'getSites'])->name('configuration.getSites');
    Route::get('/sites/{slug}/site', [App\Http\Controllers\admin\SiteController::class, 'getSite'])->name('configuration.get_site');
    Route::post('/sites/create', [App\Http\Controllers\admin\SiteController::class, 'create'])->name('configuration.add_site');
    Route::post('/sites/create_csv', [App\Http\Controllers\admin\SiteController::class, 'createSiteImportLot'])->name('configuration.add_site_lot');

    // Routes Directions
    Route::get('/directions', [App\Http\Controllers\admin\DirectionController::class, 'getDirections'])->name('configuration.getDirections');
    Route::get('/directions/{slug}/direction', [App\Http\Controllers\admin\DirectionController::class, 'getDirection'])->name('configuration.get_direction');
    Route::post('/directions/create', [App\Http\Controllers\admin\DirectionController::class, 'create'])->name('configuration.add_direction');
    Route::post('/admin/directions/create_csv', [App\Http\Controllers\admin\DirectionController::class, 'createDirectionImportLot'])->name('configuration.add_directions_lot');

    // Routes Subdivisions
    Route::get('/subdivisions', [App\Http\Controllers\admin\SubdivisionController::class, 'getSubdivisions'])->name('configuration.getSubdivisions');
    Route::get('/subdivisions/{slug}/subdivision', [App\Http\Controllers\admin\SubdivisionController::class, 'getSubdivision'])->name('configuration.get_subdivision');
    Route::post('/subdivisions/create', [App\Http\Controllers\admin\SubdivisionController::class, 'create'])->name('configuration.add_subdivision');
    Route::post('/subdivisions/create_csv', [App\Http\Controllers\admin\SubdivisionController::class, 'createSubdivisionImportLot'])->name('configuration.add_subdivisions_lot');


    // Routes Sections
    Route::get('/sections', [App\Http\Controllers\admin\SectionController::class, 'getSections'])->name('configuration.getSections');
    Route::get('/sections/{slug}/section', [App\Http\Controllers\admin\SectionController::class, 'getSection'])->name('configuration.get_section');
    Route::post('/sections/create', [App\Http\Controllers\admin\SectionController::class, 'create'])->name('configuration.add_section');
    Route::post('/sections/create_csv', [App\Http\Controllers\admin\SectionController::class, 'createSectionImportLot'])->name('configuration.add_sections_lot');

    // Routes Fonctions
    Route::get('/fonctions', [App\Http\Controllers\admin\FonctionController::class, 'getFonctions'])->name('configuration.getFonctions');
    Route::get('/fonctions/{slug}/fonction', [App\Http\Controllers\admin\FonctionController::class, 'getFonction'])->name('configuration.get_fonction');
    Route::post('/fonctions/create', [App\Http\Controllers\admin\FonctionController::class, 'create'])->name('configuration.add_fonction');

    // Routes Emploi
    Route::get('/emplois', [App\Http\Controllers\admin\EmploiController::class, 'getEmplois'])->name('configuration.getEmplois');
    Route::get('/emplois/{slug}/emploi', [App\Http\Controllers\admin\EmploiController::class, 'getEmploi'])->name('configuration.get_emploi');
    Route::post('/emplois/create', [App\Http\Controllers\admin\EmploiController::class, 'create'])->name('configuration.add_emploi');


    // Routes Cetegorie
    Route::get('/categories', [App\Http\Controllers\admin\CategorieController::class, 'getCategories'])->name('configuration.getCategories');
    Route::get('/categories/{slug}/categorie', [App\Http\Controllers\admin\CategorieController::class, 'getCategorie'])->name('configuration.get_categorie');
    Route::post('/categories/create', [App\Http\Controllers\admin\CategorieController::class, 'create'])->name('configuration.add_categorie');


    // Routes Filières
    Route::get('/filieres', [App\Http\Controllers\admin\FiliereController::class, 'getFilieres'])->name('configuration.getFilieres');
    Route::get('/filieres/{slug}/filiere', [App\Http\Controllers\admin\FiliereController::class, 'getFiliere'])->name('configuration.get_filiere');
    Route::post('/filieres/create', [App\Http\Controllers\admin\FiliereController::class, 'create'])->name('configuration.add_filiere');

    Route::post('/filieres/create_csv', [App\Http\Controllers\admin\FiliereController::class, 'createFiliereImportLot'])->name('configuration.add_filieres_lot');


    // Routes Filières
    Route::get('/signataires', [App\Http\Controllers\admin\SignataireController::class, 'getSignataires'])->name('configuration.getSignataires');
    Route::get('/signataires/{slug}/signataire', [App\Http\Controllers\admin\SignataireController::class, 'getSignataire'])->name('configuration.get_signataire');
    Route::post('/signataires/create', [App\Http\Controllers\admin\SignataireController::class, 'create'])->name('configuration.add_signataire');

    //Route::post('/admin/filieres/create_csv', [App\Http\Controllers\admin\FiliereController::class, 'createFiliereImportLot'])->name('add_filieres_lot');


    Route::resource ('contrats', ContratController::class);


    // Routes vers /users
    Route::get('/users', [App\Http\Controllers\admin\UserController::class, 'index'])->name('users.index');

});


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Auth::routes();