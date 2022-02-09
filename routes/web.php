<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Userscontroller;

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
    return redirect('about');
});

// Route::view("", 'welcome');

// Route::get('/{name}', function ($name) {
//     return view('base',['name'=>$name]);
// });


Route::view("/about", 'about'); 
Route::get("users/{user}",[Users::class,'index']);  

Route::view("/gamit", 'users');

Route::get("/bilat/{name}",[Userscontroller::class,'bil']);