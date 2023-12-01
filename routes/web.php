<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
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
    return view('login');
})->name('admin.login');

Route::post('login',[AuthController::class,'login']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[DashboardController::class,'index']);
    Route::get('news/add',[NewsController::class,'addNews']);
    Route::post('news/add', [NewsController::class, 'store']);
    Route::post('news/news-category',[NewsCategoryController::class,'store']);

});