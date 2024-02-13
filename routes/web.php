<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;

use App\Http\Controllers\RedRoseController;

use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RedRoseController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {


    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    //Resource Route for Category Controller
    //    Route::resources(['categories' => CategoryController::class]);
    Route::resource('category', CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    //Resource Route for Brand Controller
    Route::resource('brand', BrandController::class);
    //Resource Route for unit Controller
    Route::resource('unit', UnitController::class);
});
