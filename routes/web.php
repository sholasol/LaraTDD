<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Products\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('front');
Route::get('signup', [FrontController::class, 'signup'])->name('signup');

//Auth::routes();

//Prevent logged in user from access login or Auth pages
Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});



Route::group(['middleware' => ['auth', 'PreventBackHistory']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
    Route::post('/user-create', [UserController::class, 'createUser'])->name('user-create');
    //
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
