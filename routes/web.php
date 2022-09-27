<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Site;
use App\Http\Controllers\UserController;

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
    return view('welcome',[
        'sites' => Site::all()
        ]);
});


//All Studies:
Route::get('/studies', [\App\Http\Controllers\StudyController::class, 'index']);

//Show create form:
Route::get('/studies/create', [\App\Http\Controllers\StudyController::class, 'create'])->middleware('auth');

//Store studies
Route::post('/studies', [\App\Http\Controllers\StudyController::class, 'store'])->middleware('auth');

//show edit form
Route::get('studies/{study}/edit', [\App\Http\Controllers\StudyController::class, 'edit'])->middleware('auth');

//Edit submit to Update
Route::put('/studies/{study}',[\App\Http\Controllers\StudyController::class, 'update'])->middleware('auth');

//Delete submit to Update
Route::delete('/studies/{study}',[\App\Http\Controllers\StudyController::class, 'destroy'])->middleware('auth');



//Show register form
Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [ UserController::class, 'store']);

//Logout user
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//Log in user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);


//Show manage Studies
Route::get('/studies/manage',[\App\Http\Controllers\StudyController::class, 'manage'])->middleware('auth');

//Single Study:
Route::get('/studies/{study}', [\App\Http\Controllers\StudyController::class, 'show']);



