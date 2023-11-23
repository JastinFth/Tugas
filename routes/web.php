<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AppController::class, "home"]);
Route::get("template",function(){ return view('home'); });

Route::get("destinations-data", [AppController::class, "destinations_data"]);
Route::get("form-tambah", [AppController::class, "form_tambah"]);
Route::post("form-tambah", [AppController::class, "proses_tambah"]);
Route::get("destinations-data/{id}/delete", [AppController::class, "destinations_delete"]);

Route::get("destinations-data/{id}/edit", [AppController::class, "form_edit"]);
Route::post("form-edit", [AppController::class, "proses_edit"]);



