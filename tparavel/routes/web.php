<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are l-oaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/apprenants", [ApprenantController::class, "index"])->name("apprenants.index");
Route::post("/create", [ApprenantController::class, "store"])->name("apprenants.create");
Route::get("/editer/{apprenant}", [ApprenantController::class, "edit"])->name("apprenants.edit");
Route::get("/suprimer/{apprenant}", [ApprenantController::class, "destroy"])->name("apprenants.suprimer");
Route::post("/modifier/{apprenant}", [ApprenantController::class, "update"])->name("apprenants.update");
Route::get("/detail/{apprenant}", [ApprenantController::class, "show"])->name("apprenants.detail");
Route::get("/ajouter", [ApprenantController::class, "create"])->name("apprenants.ajouter");
