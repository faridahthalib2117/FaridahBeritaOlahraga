<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\singleController;
use App\Http\Controllers\categoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// Route::get('category', function () {
//     return view('category');
// });

// Route::get('single', function () {
//     return view('single');
// });

Route::get('/single',[singleController::class,'single']);
Route::get('/category',[categoryController::class,'category']);
Route::get('/index-admin', function () {
    return view('html/index2');
});
Route::get('/charts', function () {
    return view('html/charts');
});
Route::get('/tables', function () {
    return view('html/tables');
});
Route::get('/widgets', function () {
    return view('html/widgets');
});
Route::get('/form-basic', function () {
    return view('html/form-basic');
});
Route::get('/form-wizard', function () {
    return view('html/form-wizard');
});
Route::get('/gallery', function () {
    return view('html/gallery');
});
Route::get('/login', function () {
    return view('html/authentication-login');
});
Route::get('/register', function () {
    return view('html/authentication-register');
});