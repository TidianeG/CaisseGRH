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
    Route::get('/admin/documents', [App\Http\Controllers\admin\DocumentController::class, 'getDocuments'])->name('getDocuments');
    Route::post('/admin/documents/genere-document', [App\Http\Controllers\admin\DocumentController::class, 'genereDocument'])->name('genere_document');
    
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Auth::routes();