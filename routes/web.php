<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('main');
Route::get('/hire', [App\Http\Controllers\FrontController::class, 'hire'])->name('hire');
Route::get('/finance', [App\Http\Controllers\FrontController::class, 'finance'])->name('finance');
Route::get('/parts', [App\Http\Controllers\FrontController::class, 'parts'])->name('parts');
Route::get('/sevices', [App\Http\Controllers\FrontController::class, 'sevices'])->name('sevices');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\FrontController::class, 'contact_submit'])->name('contact_submit');
Route::get('/washMAX1000', [App\Http\Controllers\FrontController::class, 'washMAX1000'])->name('washMAX1000');
Route::get('/washMAX1500', [App\Http\Controllers\FrontController::class, 'washMAX1500'])->name('washMAX1500');
Route::get('/washMAX3000', [App\Http\Controllers\FrontController::class, 'washMAX3000'])->name('washMAX3000');
Route::get('/washMAX6000', [App\Http\Controllers\FrontController::class, 'washMAX6000'])->name('washMAX6000');
Route::get('/washMAX8000', [App\Http\Controllers\FrontController::class, 'washMAX8000'])->name('washMAX8000');
Route::get('/washMAX9000', [App\Http\Controllers\FrontController::class, 'washMAX9000'])->name('washMAX9000');
Route::get('/washMAX4000', [App\Http\Controllers\FrontController::class, 'washMAX4000'])->name('washMAX4000');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
