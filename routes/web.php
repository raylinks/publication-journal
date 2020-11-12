<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/publications', function () {
    return view('publications');
});
Route::get('/view-publication/{year}', function () {
    return view('view-publication');
});
Route::get('/view-publication-html/{id}', function () {
    return view('view-publication-html');
});



Route::view('dashboard', 'admin.index');

Route::view('/admin', 'admin.index')->name('dashboard');

Route::get('/publications', [PublicationController::class, 'index'])->name('index');
Route::get('/create', [PublicationController::class, 'showCreate'])->name('show.create');
Route::post('/create', [PublicationController::class, 'store'])->name('store');
