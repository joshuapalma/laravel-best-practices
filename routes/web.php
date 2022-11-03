<?php

use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

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
    return view('layout.template');
});


Route::get('/informations/view', [InformationController::class, 'index'])->name('information.view');
Route::get('/informations/create', [InformationController::class, 'create'])->name('information.create');
Route::post('/informations/store', [InformationController::class, 'store'])->name('information.store');
Route::get('/informations/edit/{id}', [InformationController::class, 'edit'])->name('information.edit');
Route::put('/informations/update/{id}', [InformationController::class, 'update'])->name('information.update');
Route::delete('/informations/delete/{id}', [InformationController::class, 'destroy'])->name('information.destory');

//If Using --resources
// Route::resources([
//     'information' => InformationController::class
// ]);