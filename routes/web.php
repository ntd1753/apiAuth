<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['role:agency','auth:sanctum']], function () {
    Route::get('/agency-dashboard', function () {
        return 'Chào mừng đến trang dành cho Agency';
    });
});

Route::group(['middleware' => ['role:manager','auth:sanctum']], function () {
    Route::get('/manager-dashboard', function () {
        return 'Chào mừng đến trang dành cho Manager';
    });
});

Route::group(['middleware' => ['role:user','auth:sanctum']], function () {
    Route::get('/user-dashboard', function () {
        return 'Chào mừng đến trang dành cho User';
    });
});
Route::get('/login', function () {
    return 'Chào mừng đến trang dành cho khách';
})->name('login');
