<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
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

// All listings
Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// Route::get('/', function(){
// });

// // Single Listing
// Route::get('/listings/{listing}', function(Listing $listing){
// });
// Route::get('/listings/{id}', function($id){
//     $listing = Listing::find($id);

//     if($listing){
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
//     // dd($listing);
// });

// Route::get('/hello', function(){
//     return response('<h1>Hello world</h1>');
// });

// Route::get('/posts/{id}', function($id){
//     // ddd($id);

//     return response('Post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return ($request->name . ' ' . $request->city);
// });