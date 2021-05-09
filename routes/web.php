<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShkoloController;
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
Route::get('/shkolo', [App\Http\Controllers\ShkoloController::class, 'shkolo'])->name('shkolo');
Route::get('/create', [App\Http\Controllers\ShkoloController::class, 'shkolo_create'])->name('shkolo.create');
Route::post('/create', [App\Http\Controllers\ShkoloController::class, 'shkolo_store'])->name('shkolo.store');
Route::get('/shkolo/view/{id}', [App\Http\Controllers\ShkoloController::class, 'shkolo_view'])->name('shkolo.view');
Route::get('/edit/{id}', [App\Http\Controllers\ShkoloController::class, 'shkolo_edit'])->name('shkolo.edit');
Route::put('/update/{id}', [App\Http\Controllers\ShkoloController::class, 'shkolo_update'])->name('shkolo.update');
Route::get('/color/{id}', [App\Http\Controllers\ShkoloController::class, 'shkolo_delete'])->name('shkolo.delete');