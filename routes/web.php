<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PagesController;

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
//*******************************/
//*********     PAGES    ********/
//*******************************/

Route::get('/', [PagesController::class, 'home']);

Route::get('dashboard', [PagesController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

//*******************************/
//*********  CARS        ********/
//*******************************/

Route::resource('cars', CarsController::class)
    ->middleware('auth');

//*******************************/
//*********      ADS     ********/
//*******************************/

// Route::get('ads', [AdsController::class, 'index'])->name('ads.index');
// Route::get('ads/{id}', [AdsController::class, 'show'])->name('ads.show');
Route::resource('ads', AdsController::class)->only('index', 'show');
