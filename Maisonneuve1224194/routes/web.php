<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etutiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiant/create/post', [EtudiantController::class, 'create'])->name('registrariat.create');
Route::post('/etudiant/create/post', [EtudiantController::class, 'store'])->name('registrariat.store');
Route::get('etudiant/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant/{etudiant}/edit', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('etudiant/{etudiant}', [EtudiantController::class, 'destroy']);

