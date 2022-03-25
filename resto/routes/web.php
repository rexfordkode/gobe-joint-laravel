<?php

use App\Http\Controllers\RestoController;
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

//  
//Home Page Route
Route::get('/', [RestoController::class, 'index']);
//List Restaurant  Page Route
Route::get('list', [RestoController::class, 'list']);
//Add  Restaurant Page Route for View
Route::view('add', [RestoController::class, 'add']);
//Add  Restaurant Page Route for Adding
Route::post('add', [RestoController::class, 'add']);
//Delete  Restaurant Page Route for Adding
Route::get('delete/{id}', [RestoController::class, 'delete']);

//Geting for edit Restaurant Page Route
Route::get('edit/{id}', [RestoController::class, 'showedit']);
//Edit Restaurant Page Route
Route::post('edit/{id}', [RestoController::class, 'edit']);

