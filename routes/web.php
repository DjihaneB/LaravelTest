<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/', [StaticController::class, 'index']) -> name('home.index');
Route::get('/about/about', [StaticController::class, 'about']) -> name('home.about');
// Route::get('/stor/{category?}/{item?}', [StaticController::class, 'category']);
Route::get('/contact', [StaticController::class , 'contact'] ) -> name('home.contact');