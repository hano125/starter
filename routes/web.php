<?php

use App\Http\Controllers\offerController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::controller(offerController::class)->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] )->prefix(LaravelLocalization::setLocale())->group(function (){

    Route::get('offer/addOffer','add_offer');
    Route::post('offer/store','store')->name('offer.store');
    Route::get('offer/index','show')->name('offer.index');
    Route::get('offer/edit/{offer_id}','edit')->name('offer.edit');
    Route::post('offer/update/{offer_id}','update')->name('offer.update');
    Route::get('offer/delete/{offer_id}','delete')->name('offer.delete');
});
