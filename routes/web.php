<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galleryController;
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
Route::get('/gallery',
[galleryController::class,'countgallery'] 
// function () {
//     return view('gallery',[]);
// }
);

Route::get('/ministries',function() {return view('ministries');}
// function () {
//     return view('gallery',[]);
// }
);

