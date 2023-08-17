<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RealEstateNews;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/contactus', [PortfolioController::class, 'contactus'])->name('contactus');
Route::post('/message', [PortfolioController::class, 'save_message'])->name('message.save');
Route::get('/realestate', [RealEstateNews::class, 'realestate'])->name('realestate-news');
Route::get('/sportnews', [RealEstateNews::class, 'sport_news'])->name('sport_news');
Route::get('/calculator', [RealEstateNews::class, 'calculator'])->name('calculator');
Route::get('/airports', [RealEstateNews::class, 'airports'])->name('airports');
Route::get('/sms', [PortfolioController::class, 'sms'])->name('sms');
Route::post('/sms/sent', [PortfolioController::class, 'sms_sent'])->name('sms_sent');
