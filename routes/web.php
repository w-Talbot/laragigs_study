<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
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
    return view('welcome');
});

//All Listings:
Route::get('/listings', [\App\Http\Controllers\ListingController::class, 'index']);

//Show create form:
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create'])->middleware('auth');

//Store listings
Route::post('/listings', [\App\Http\Controllers\ListingController::class, 'store'])->middleware('auth');

//show edit form
Route::get('listings/{listing}/edit', [\App\Http\Controllers\ListingController::class, 'edit'])->middleware('auth');

//Edit submit to Update
Route::put('/listings/{listing}',[\App\Http\Controllers\ListingController::class, 'update'])->middleware('auth');

//Delete submit to Update
Route::delete('/listings/{listing}',[\App\Http\Controllers\ListingController::class, 'destroy'])->middleware('auth');

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

//Single Listing:
Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);



Route::get('/hello', function() {
   return response('<h1>HThis is being turned into plain text by the header, ignoring the html elements : <h1>', 200)
   ->header('Content-Type','text/plain')
   ->header('foo','bar');
});

Route::get('/posts/{id}', function($id){
//    ddd($id);
   return response('Your number is : ' . $id);

}) ->where('id','[0-9]+');

Route::get('/search', function(Request $request){
//    /search?name=Brad&city=Boston
dd($request);

});

