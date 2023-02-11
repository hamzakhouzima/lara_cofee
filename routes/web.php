<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;

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

Route::get('dashboard' , [DrinkController::class , 'index']);
Route::get('create' , [DrinkController::class , 'create'])->name('create.route');
Route::post('create' , [DrinkController::class , 'store'])->name('store.route');

Route::delete('delete/{id}' , [DrinkController::class , 'destroy'])->name('destroy.route');

Route::get('edit' , [DrinkController::class , 'edit'] )->name('edit.route');
Route::put('update/{id}' , [DrinkController::class , 'update'])->name('update.route');



