<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\BrowsingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchingController;
use App\Http\Controllers\MotifController;

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
    return view('home', [
        "title" => "Home"
    ]); 
     
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});
   
Route::get('/features', function () {
    return view('features',[
        "title" => "Features"
    ]);
});

Route::get('/searching', [SearchingController::class, 'searching']);

Route::get('/browsing', [BrowsingController::class, 'browsing']);

Route::get('/dashboard', [DashboardController::class,'show']);
 
Route::get('/detail/{namaendek}', [DetailController::class,'index']);

Route::get('/motifendek', [MotifController::class, 'daftar'])->name('daftarmotif');
Route::get('/motifendek/{hasilmotif}', [MotifController::class, 'show'])->name('showendekmotif');
