<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdproductsController;
use App\Http\Controllers\AdbrandsController;
use App\Http\Controllers\AdcategoriesController;
use App\Http\Controllers\AdemailinfosController;
use App\Http\Controllers\AduserinfosController;
use App\Http\Controllers\AdorderproductsController;
use App\Http\Controllers\AdorderinfosController;
use App\Http\Controllers\AdmininfosController;
use App\Http\Controllers\AdlogshopsController;
use App\Http\Controllers\AdordersController;
use App\Http\Controllers\UserproductsController;


//USER


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

Route::get('/', [PagesController::class, 'home']);
Route::get('/menu', [PagesController::class, 'menu']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/checkout', [PagesController::class, 'checkout']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);

// Akses Admin
Route::get('/adproducts', [AdproductsController::class, 'index']);
Route::get('/adproducts/create', [AdproductsController::class, 'create']);
Route::get('/adproducts/{adproducts}', [AdproductsController::class, 'show']);
Route::post('/adproducts', [AdproductsController::class, 'store']);
Route::delete('/adproducts/{adproducts}', [AdproductsController::class, 'destroy']);
Route::get('/adproducts/{adproducts}/edit', [AdproductsController::class, 'edit']);
Route::patch('/adproducts/{adproducts}', [AdproductsController::class, 'update']);

Route::get('/adbrands', [AdbrandsController::class, 'index']);
Route::get('/adbrands/create', [AdbrandsController::class, 'create']);
Route::get('/adbrands/{adbrands}', [AdbrandsController::class, 'show']);
Route::post('/adbrands', [AdbrandsController::class, 'store']);
Route::delete('/adbrands/{adbrands}', [AdbrandsController::class, 'destroy']);
Route::get('/adbrands/{adbrands}/edit', [AdbrandsController::class, 'edit']);
Route::patch('/adbrands/{adbrands}', [AdbrandsController::class, 'update']);

Route::get('/adcategories', [AdcategoriesController::class, 'index']);
Route::get('/adcategories/create', [AdcategoriesController::class, 'create']);
Route::get('/adcategories/{adcategories}', [AdcategoriesController::class, 'show']);
Route::post('/adcategories', [AdcategoriesController::class, 'store']);
Route::delete('/adcategories/{adcategories}', [AdcategoriesController::class, 'destroy']);
Route::get('/adcategories/{adcategories}/edit', [AdcategoriesController::class, 'edit']);
Route::patch('/adcategories/{adcategories}', [AdcategoriesController::class, 'update']);

Route::get('/ademailinfos', [AdemailinfosController::class, 'index']);
Route::get('/ademailinfos/create', [AdemailinfosController::class, 'create']);
Route::get('/ademailinfos/{ademailinfos}', [AdemailinfosController::class, 'show']);
Route::post('/ademailinfos', [AdemailinfosController::class, 'store']);
Route::delete('/ademailinfos/{ademailinfos}', [AdemailinfosController::class, 'destroy']);
Route::get('/ademailinfos/{ademailinfos}/edit', [AdemailinfosController::class, 'edit']);
Route::patch('/ademailinfos/{ademailinfos}', [AdemailinfosController::class, 'update']);

Route::get('/aduserinfos', [AduserinfosController::class, 'index']);
Route::get('/aduserinfos/create', [AduserinfosController::class, 'create']);
Route::get('/aduserinfos/{aduserinfos}', [AduserinfosController::class, 'show']);
Route::post('/aduserinfos', [AduserinfosController::class, 'store']);
Route::delete('/aduserinfos/{aduserinfos}', [AduserinfosController::class, 'destroy']);
Route::get('/aduserinfos/{aduserinfos}/edit', [AduserinfosController::class, 'edit']);
Route::patch('/aduserinfos/{aduserinfos}', [AduserinfosController::class, 'update']);

Route::get('/adorderproducts', [AdorderproductsController::class, 'index']);
Route::get('/adorderproducts/create', [AdorderproductsController::class, 'create']);
Route::get('/adorderproducts/{adorderproducts}', [AdorderproductsController::class, 'show']);
Route::post('/adorderproducts', [AdorderproductsController::class, 'store']);
Route::delete('/adorderproducts/{adorderproducts}', [AdorderproductsController::class, 'destroy']);
Route::get('/adorderproducts/{adorderproducts}/edit', [AdorderproductsController::class, 'edit']);
Route::patch('/adorderproducts/{adorderproducts}', [AdorderproductsController::class, 'update']);

Route::get('/adorderinfos', [AdorderinfosController::class, 'index']);
Route::get('/adorderinfos/create', [AdorderinfosController::class, 'create']);
Route::get('/adorderinfos/{adorderinfos}', [AdorderinfosController::class, 'show']);
Route::post('/adorderinfos', [AdorderinfosController::class, 'store']);
Route::delete('/adorderinfos/{adorderinfos}', [AdorderinfosController::class, 'destroy']);
Route::get('/adorderinfos/{adorderinfos}/edit', [AdorderinfosController::class, 'edit']);
Route::patch('/adorderinfos/{adorderinfos}', [AdorderinfosController::class, 'update']);

Route::get('/admininfos', [AdmininfosController::class, 'index']);
Route::get('/admininfos/create', [AdmininfosController::class, 'create']);
Route::get('/admininfos/{admininfos}', [AdmininfosController::class, 'show']);
Route::post('/admininfos', [AdmininfosController::class, 'store']);
Route::delete('/admininfos/{admininfos}', [AdmininfosController::class, 'destroy']);
Route::get('/admininfos/{admininfos}/edit', [AdmininfosController::class, 'edit']);
Route::patch('/admininfos/{admininfos}', [AdmininfosController::class, 'update']);

Route::get('/adlogshops', [AdlogshopsController::class, 'index']);
Route::get('/adlogshops/create', [AdlogshopsController::class, 'create']);
Route::get('/adlogshops/{adlogshops}', [AdlogshopsController::class, 'show']);
Route::post('/adlogshops', [AdlogshopsController::class, 'store']);
Route::delete('/adlogshops/{adlogshops}', [AdlogshopsController::class, 'destroy']);
Route::get('/adlogshops/{adlogshops}/edit', [AdlogshopsController::class, 'edit']);
Route::patch('/adlogshops/{adlogshops}', [AdlogshopsController::class, 'update']);

Route::get('/adorders', [AdordersController::class, 'index']);
Route::get('/adorders/create', [AdordersController::class, 'create']);
Route::get('/adorders/{adorders}', [AdordersController::class, 'show']);
Route::post('/adorders', [AdordersController::class, 'store']);
Route::delete('/adorders/{adorders}', [AdordersController::class, 'destroy']);
Route::get('/adorders/{adorders}/edit', [AdordersController::class, 'edit']);
Route::patch('/adorders/{adorders}', [AdordersController::class, 'update']);

Route::get('/menu', [UserproductsController::class, 'index']);
Route::get('/product1/{adproducts}', [UserproductsController::class, 'show']);