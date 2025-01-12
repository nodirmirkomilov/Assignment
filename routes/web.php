<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LocaleController;
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

Route::get('/',[LandingController::class,'index'])->name('landing.index');
Route::get('/application',[LandingController::class,'application'])->name('landing.application.create');
Route::post('/application',[LandingController::class,'store'])->name('landing.application.store');
Route::post('/privacy',[LandingController::class,'store'])->name('landing.privacy');

Auth::routes(['register' => false,'reset' => false,'confirm' => false,'verify' => false]);

Route::get('lang/{locale}', LocaleController::class)->name('locale.swap');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('/dashboard/application',[DashboardController::class,'index'])->name('dashboard.startup.index');
Route::get('/dashboard/application/{startup}',[DashboardController::class,'index'])->name('dashboard.startup.show');
Route::delete('/dashboard/application/{startup}',[DashboardController::class,'index'])->name('dashboard.startup.destroy');


