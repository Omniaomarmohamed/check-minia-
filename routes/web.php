<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaslemaController;
use App\Http\Controllers\CareemController;
use App\Http\Controllers\SwvlController;
use App\Http\Controllers\GobusController;
use App\Http\Controllers\AmwajController;
use App\Http\Controllers\HalanController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Frontpages Route

Route::get('/' , [MainController::Class,'index']);
Route::get('/about' , [MainController::Class,'about']);
Route::get('/categories' , [MainController::Class,'categories']);
Route::get('/services' , [MainController::Class,'services']);
Route::get('/Universities' , [MainController::Class,'Universities']);
Route::get('/schools' , [MainController::Class,'schools']);
Route::get('/Restaurants' , [MainController::Class,'Restaurants']);
Route::get('/picnic_places' , [MainController::Class,'picnic_places']);
Route::get('/mosques' , [MainController::Class,'mosques']);
Route::get('/Hotels' , [MainController::Class,'Hotels']);
Route::get('/hospitals' , [MainController::Class,'hospitals']);
Route::get('/churches' , [MainController::Class,'churches']);



//routes controller

Route::resource('taslema', TaslemaController::class);

Route::resource('careem', CareemController::class);

Route::resource('swvl', SwvlController::class);
Route::resource('gobus', GobusController::class);
Route::resource('amwaj', AmwajController::class);
Route::resource('halan', HalanController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
