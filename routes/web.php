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

Route::get('/', [StaticController::class, 'index']);

Route::get('/about', [StaticController::class, 'about']);

// Route::get('/stor', function(){
//     $filter= request('style');
//     if(isset($filter)){
//         return '<h1>This page is viewing <span style= "color:red">'.strip_tags($filter).'</span></h1>';//strip_tags() est utilisée pour supprimer les balises HTML et PHP d'une chaîne de texte
//     }else{
//         return '<h1>This page is viewing <span style= "color:red">All prodect</span></h1>';

//     }
// });

Route::get('/stor/{category?}/{item?}', [StaticController::class, 'category']);

Route::get('/contact', [StaticController::class , 'contact'] );