<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
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
Route::get('/task', function () {
    return view('task');
});
Route::get('/plans', function () {
    return view('plans');
});
MeetingController::routes();
PostController::routes();
//TaskController::routes();
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::namespace('Auth')->group(function (){
        Route::get('login',[AuthenticatedSessionController::class,'create'])->name('login');
        Route::post('login',[AuthenticatedSessionController::class,'store'])->name('adminlogin');
    });
});
Route::get('home',function (){
//    return view('home');
    return view('home');
});
require __DIR__.'/auth.php';
