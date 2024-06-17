<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\donationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\formAdoptController;

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

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('get_donation', [homeController::class, 'get_donation'])->name('get_donation');
Route::get('get_aboutUs', [homeController::class, 'get_aboutUs'])->name('get_aboutUs');
Route::get('get_home', [homeController::class, 'get_home'])->name('get_home');
Route::get('get_adoption', [homeController::class, 'get_adoption'])->name('get_adoption');
Route::get('get_formAdopt', [formAdoptController::class, 'get_formAdopt'])->name('get_formAdopt');
Route::post('store_formAdopt', [formAdoptController::class, 'store'])->name('store');
Route::post('store_donation', [donationController::class, 'store'])->name('store');
Route::get('auth', [homeController::class, 'auth'])->name('auth');

Route::get('dashboard', [homeController::class, 'dashboard'])->name('dashborad');

Route::middleware(['auth'])->group(function(){
    Route::get('dashboard', [homeController::class, 'dashboard'])->name('dashboard');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
