<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\LoginController;
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
Route::prefix('drinks')->group(function () {
    Route::get('/', [DrinkController::class, 'showDrink'])->name('drink.all');
    Route::get('/add',[DrinkController::class,'create'])->name('drink.create');
    Route::post('/add',[DrinkController::class,'store'])->name('drink.store');
    Route::get('{id}/edit', [DrinkController::class, 'editDrink'])->name('drink.edit');
    Route::post('{id}/edit', [DrinkController::class, 'updateDrink'])->name('drink.update');
    Route::get('{id}/destroy', [DrinkController::class, 'destroyDrink'])->name('drink.destroy');
    Route::post('/',[DrinkController::class,'search'])->name('drink.find');
});

