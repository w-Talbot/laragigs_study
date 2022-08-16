<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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
Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single Listing:
Route::get('/listings/{id}', function($id){
    return  view( 'listing', [
        'listing' => Listing::find($id)
        ]);
});


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

