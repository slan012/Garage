<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\ScheduleController;

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
//*********     ADS      ********/
//*******************************/

Route::resource('ads', AdsController::class)->only('index', 'show');

//*******************************/
//*********   OPTIONS    ********/
//*******************************/

Route::resource('options', OptionController::class)
    ->middleware('auth');

//*******************************/
//*********   SCHEDULES  ********/
//*******************************/

Route::get('schedules', [ScheduleController::class, 'index'])
    ->middleware('auth')
    ->name('schedules.index');

Route::get('schedules/edit', [ScheduleController::class, 'edit'])
    ->middleware('auth')
    ->name('schedules.edit');

Route::post('schedules/store', [ScheduleController::class, 'store'])
    ->middleware('auth')
    ->name('schedules.store');
