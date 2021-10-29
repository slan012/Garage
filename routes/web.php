<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\ContactsController;
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

//Frontend
Route::get('/', [PagesController::class, 'home'])
    ->name('home');

Route::get('/history', [PagesController::class, 'history'])
    ->name('history');


//Backend
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

Route::post('schedules/update', [ScheduleController::class, 'update'])
    ->middleware('auth')
    ->name('schedules.update');

//*******************************/
//*********   CONTACT    ********/
//*******************************/

Route::get('contact', [ContactsController::class, 'index'])
    ->middleware('auth')
    ->name('contact.index');

Route::get('contact/edit', [ContactsController::class, 'edit'])
    ->middleware('auth')
    ->name('contact.edit');

Route::post('contact/update', [ContactsController::class, 'update'])
    ->middleware('auth')
    ->name('contact.update');

//*******************************/
//*********   HOLIDAYS   ********/
//*******************************/

Route::resource('holidays', HolidayController::class)
    ->except('show')
    ->middleware('auth');
