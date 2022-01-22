<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\customercontroller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[crudcontroller::class,'showData']);
Route::get('/add-data',[crudcontroller::class,'addData']);
Route::post('/store-data',[crudcontroller::class,'storeData']);
Route::get('/edit-data/{id}',[crudcontroller::class,'editData']);
Route::post('/update-data/{id}',[crudcontroller::class,'updateData']);
Route::get('/delete-data/{id}',[crudcontroller::class,'deleteData']);

Route::get('/add-customer',[customercontroller::class,'addCustomer']);
Route::post('/store-customer',[customercontroller::class,'storeCustomer']);

