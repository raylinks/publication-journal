<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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
// Route::get('/view-publication/{year}', function () {
//     return view('view-publication');
// });
Route::get('/view-publication-html/{id}', function () {
    return view('view-publication-html');
});

Route::get('/foo', function () {
    Artisan::call('storage:link');
});


Route::view('dashboard', 'admin.index');

Route::view('/admin123', 'admin.index')->name('dashboard');

Route::get('/journals', [PublicationController::class, 'index'])->name('index');
Route::get('/edit/journal/{id}', [PublicationController::class, 'show'])->name('show');
Route::post('{publication}/update/journal', [PublicationController::class, 'update'])->name('show.update');
Route::get('/view-publication', [PublicationController::class, 'viewPublication'])->name('viewPublication');
Route::get('/create', [PublicationController::class, 'showCreate'])->name('show.create');
Route::post('/create', [PublicationController::class, 'store'])->name('store');
Route::get('{publication}/toggle-status', [PublicationController::class, 'togglePublicationStatus'])->name('toggle.status');
Route::get('/file/download/{id}',[PublicationController::class, 'download'])->name('downloadfile'); 
Route::get('/publication/count)', [PublicationController::class, 'publicationCount'])->name('count');
