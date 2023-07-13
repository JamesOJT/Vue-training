<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FormController;

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

Route::get ('/home/{age?}', [MainController::class, 'index']);
Route::get ('/form/{id?}', [NameController::class, 'form']);
// Route::get ('/name-form/{id?}', [NameController::class, 'form']);
//Route::get ('/form', [FormController::class, 'SampleFormController']);

Route::post('/submitName', [NameController::class, 'formSubmit']);
Route::post('/delete-name', [NameController::class, 'deleteName']);

// Route::get ('/table', [NameController::class, 'getNames']); ANOBAKASI TO

// ONLY THIS FOR DISPLAYING NAMES
Route::get ('/get-names', [NameController::class, 'getNames']);
// Route::get ('/form', function() {
//    return view ('form');
// });


Route::get ('/app', function () {
    return view ('name.app');
});

// Route::get('/get-names', function(){
//     return view('name.app');
// });
// folder routing
// Route::get('/nav', function (){
//     return view ('layout.nav');
// });

// Route::get('/master', function (){
//     return view ('layout.master');
// });