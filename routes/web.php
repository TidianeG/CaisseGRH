<?php

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


Route::middleware(Admin::class)->group(function () {
    Route::get('/admin', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin_space');
    Route::get('/admin/employes', [App\Http\Controllers\admin\EmployeController::class, 'getEmployes'])->name('getEmployes');
    Route::get('/admin/employes/create', [App\Http\Controllers\admin\EmployeController::class, 'create'])->name('createEmploye');
    Route::get('/admin/employes/{slug}/employe', [App\Http\Controllers\admin\EmployeController::class, 'getEmploye'])->name('get_employe');
    

    Route::post('/admin/employes/store', [App\Http\Controllers\admin\EmployeController::class, 'saveEmployee'])->name('saveEmployee');
    
    Route::get('/admin/documents', [App\Http\Controllers\admin\DocumentController::class, 'getDocuments'])->name('getDocuments');
    Route::post('/admin/documents/genere-document', [App\Http\Controllers\admin\DocumentController::class, 'genereDocument'])->name('genere_document');
    

    //Get Subdivisions create employe
    Route::get('/admin/employes/create/getSubdivisions/{slug}', [App\Http\Controllers\admin\EmployeController::class, 'getSubdivisionsCreateEmp'])->name('getSubdivisionsCreateEmp');

    //Get Sections create employe
    Route::get('/admin/employes/create/getSections/{slug}', [App\Http\Controllers\admin\EmployeController::class, 'getSectionsCreateEmp'])->name('getSectionsCreateEmp');


    // Routes Sites
    Route::get('/admin/sites', [App\Http\Controllers\admin\SiteController::class, 'getSites'])->name('getSites');
    Route::get('/admin/sites/{slug}/site', [App\Http\Controllers\admin\SiteController::class, 'getSite'])->name('get_site');
    
    Route::post('/admin/sites/create', [App\Http\Controllers\admin\SiteController::class, 'create'])->name('add_site');

    Route::post('/admin/sites/create_csv', [App\Http\Controllers\admin\SiteController::class, 'createSiteImportLot'])->name('add_site_lot');

    // Routes Directions
    Route::get('/admin/directions', [App\Http\Controllers\admin\DirectionController::class, 'getDirections'])->name('getDirections');
    Route::get('/admin/directions/{slug}/direction', [App\Http\Controllers\admin\DirectionController::class, 'getDirection'])->name('get_direction');
    Route::post('/admin/directions/create', [App\Http\Controllers\admin\DirectionController::class, 'create'])->name('add_direction');

    Route::post('/admin/directions/create_csv', [App\Http\Controllers\admin\DirectionController::class, 'createDirectionImportLot'])->name('add_directions_lot');

    // Routes Subdivisions
    Route::get('/admin/subdivisions', [App\Http\Controllers\admin\SubdivisionController::class, 'getSubdivisions'])->name('getSubdivisions');
    Route::get('/admin/subdivisions/{slug}/subdivision', [App\Http\Controllers\admin\SubdivisionController::class, 'getSubdivision'])->name('get_subdivision');
    Route::post('/admin/subdivisions/create', [App\Http\Controllers\admin\SubdivisionController::class, 'create'])->name('add_subdivision');

    Route::post('/admin/subdivisions/create_csv', [App\Http\Controllers\admin\SubdivisionController::class, 'createSubdivisionImportLot'])->name('add_subdivisions_lot');


    // Routes Sections
    Route::get('/admin/sections', [App\Http\Controllers\admin\SectionController::class, 'getSections'])->name('getSections');
    Route::get('/admin/sections/{slug}/section', [App\Http\Controllers\admin\SectionController::class, 'getSection'])->name('get_section');
    Route::post('/admin/sections/create', [App\Http\Controllers\admin\SectionController::class, 'create'])->name('add_section');
    Route::post('/admin/sections/create_csv', [App\Http\Controllers\admin\SectionController::class, 'createSectionImportLot'])->name('add_sections_lot');

    // Routes Fonctions
    Route::get('/admin/fonctions', [App\Http\Controllers\admin\FonctionController::class, 'getFonctions'])->name('getFonctions');
    Route::get('/admin/fonctions/{slug}/fonction', [App\Http\Controllers\admin\FonctionController::class, 'getFonction'])->name('get_fonction');
    Route::post('/admin/fonctions/create', [App\Http\Controllers\admin\FonctionController::class, 'create'])->name('add_fonction');

    // Routes Emploi
    Route::get('/admin/emplois', [App\Http\Controllers\admin\EmploiController::class, 'getEmplois'])->name('getEmplois');
    Route::get('/admin/emplois/{slug}/emploi', [App\Http\Controllers\admin\EmploiController::class, 'getEmploi'])->name('get_emploi');
    Route::post('/admin/emplois/create', [App\Http\Controllers\admin\EmploiController::class, 'create'])->name('add_emploi');


    // Routes Cetegorie
    Route::get('/admin/categories', [App\Http\Controllers\admin\CategorieController::class, 'getCategories'])->name('getCategories');
    Route::get('/admin/categories/{slug}/categorie', [App\Http\Controllers\admin\CategorieController::class, 'getCategorie'])->name('get_categorie');
    Route::post('/admin/categories/create', [App\Http\Controllers\admin\CategorieController::class, 'create'])->name('add_categorie');


    // Routes Filières
    Route::get('/admin/filieres', [App\Http\Controllers\admin\FiliereController::class, 'getFilieres'])->name('getFilieres');
    Route::get('/admin/filieres/{slug}/filiere', [App\Http\Controllers\admin\FiliereController::class, 'getFiliere'])->name('get_filiere');
    Route::post('/admin/filieres/create', [App\Http\Controllers\admin\FiliereController::class, 'create'])->name('add_filiere');

    Route::post('/admin/filieres/create_csv', [App\Http\Controllers\admin\FiliereController::class, 'createFiliereImportLot'])->name('add_filieres_lot');


    // Routes Filières
    Route::get('/admin/signataires', [App\Http\Controllers\admin\SignataireController::class, 'getSignataires'])->name('getSignataires');
    Route::get('/admin/signataires/{slug}/signataire', [App\Http\Controllers\admin\SignataireController::class, 'getSignataire'])->name('get_signataire');
    Route::post('/admin/signataires/create', [App\Http\Controllers\admin\SignataireController::class, 'create'])->name('add_signataire');

    //Route::post('/admin/filieres/create_csv', [App\Http\Controllers\admin\FiliereController::class, 'createFiliereImportLot'])->name('add_filieres_lot');

});


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Auth::routes();