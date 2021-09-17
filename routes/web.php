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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new_contact', [App\Http\Controllers\HomeController::class, 'create'])->name('new_contact');
Route::post('/store_contact', [App\Http\Controllers\HomeController::class, 'store_contact'])->name('store_contact');
Route::get('/edit_contact/{id}', [App\Http\Controllers\HomeController::class, 'edit_contact'])->name('edit_contact');
Route::post('/update_contact', [App\Http\Controllers\HomeController::class, 'update_contact'])->name('update_contact');
Route::delete('/delete_contact', [App\Http\Controllers\HomeController::class, 'delete_contact'])->name('delete_contact');






