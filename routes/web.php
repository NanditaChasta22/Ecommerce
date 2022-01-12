<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\CategoryAdminController;
use App\Http\Controllers\AdminController\UserAdminController;
use App\Http\Controllers\AdminController\ProductAdminController;


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

Route::get('dashboard', function () {
    return view('admin.adminDashboard');
});

Route::resource('Category','\App\Http\Controllers\AdminController\CategoryAdminController');

Route::resource('User','\App\Http\Controllers\AdminController\UserAdminController');

Route::resource('Product','\App\Http\Controllers\AdminController\ProductAdminController');