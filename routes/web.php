<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'guest:admin'],function(){
    Route::get('loginForm',[AdminController::class,'loginForm'])->name('loginForm');
    Route::Post('login',[AdminController::class,'login'])->name('loginAdmin');
   // Route::get('/users-info',[AdminController::class, 'index'])->name('users');
   // Route::get('/user-status/{user_id}/{status}',[AdminController::class, 'userEditData'])->name('edit.user');

});

//route('admin.users')


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/site', [App\Http\Controllers\HomeController::class, 'infoSite'])->middleware('Accepted');


Route::group(['prefix'=>'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/users-info',[AdminController::class, 'index'])->name('users');
    Route::get('/user-status/{user_id}/{status}',[AdminController::class, 'userEditData'])->name('edit.user');
});

