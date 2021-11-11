<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\AskMessageController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\HolidayController;
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
/**
 * * Get footer informations in all frontend pages in Views/Components/Footer 
 */

//Frontend
Route::get('/', function () {
    return view('web.frontend.pages.home');
})->name('home');

Route::get('/history', function () {
    return view('web.frontend.pages.history');
})->name('history');

Route::get('/services', function () {
    return view('web.frontend.pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('web.frontend.pages.contact');
})->name('contact');

Route::get('/infos', function () {
    return view('web.frontend.pages.infos');
})->name('infos');

Route::get('/ads', [AdsController::class, 'index'])->name('ads');
Route::get('/ads/{id}', [AdsController::class, 'show'])->name('ads.show');

Route::post('askmessage/store', [AskMessageController::class, 'store'])->name('askmessage.store');


//*******************************/
//*********     ADMIN    ********/
//*******************************/

Route::prefix('admin')->group(function () {

    Route::middleware('auth')->group(function () {

        Route::name('admin.')->group(function () {
            //Dashboard
            Route::get('dashboard', [PagesController::class, 'dashboard'])
            ->name('dashboard');

            // Cars
            Route::resource('cars', CarsController::class);

            // Ads
            Route::resource('ads', AdsController::class)->only('index', 'show');

            // Options
            Route::resource('options', OptionController::class);

            // Schedules setup
            Route::get('schedules', [ScheduleController::class, 'index'])
            ->name('schedules.index');
            Route::get('schedules/edit', [ScheduleController::class, 'edit'])
            ->name('schedules.edit');
            Route::post('schedules/update', [ScheduleController::class, 'update'])
            ->name('schedules.update');

            // Contact infos setup
            Route::get('contact', [ContactsController::class, 'index'])
            ->name('contact.index');
            Route::get('contact/edit', [ContactsController::class, 'edit'])
            ->name('contact.edit');
            Route::post('contact/update', [ContactsController::class, 'update'])
            ->name('contact.update');

            // Holidays setup
            Route::resource('holidays', HolidayController::class)
            ->except('show');
        });
    });
});
