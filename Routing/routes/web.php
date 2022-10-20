<?php

use App\Http\Controllers\Crud;
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



Route::get('/select', [Crud::class,'select']);


Route::get('/add',[Crud::class,'add']);


Route::get('/insert',[Crud::class,'insert']);



// Route::get('/',[Crud::class,'select']);

// Route::get('/add', [Crud::class, 'add']);

// Route::get('/insert', [Crud::class, 'insert']);


