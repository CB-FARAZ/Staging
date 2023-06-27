<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\clientController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\editController;
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\admin\logoutController;
use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\profileSettingController;
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

    return view('admin/login');

});

// login

Route::get('admin/login', [loginController::class, 'index'])->name('login')->prefix('admin');

// Login authentication route

Route::post('/login/process', [loginController::class, 'authenticateLoginRequest'])->name('login.process')->prefix('admin');

//Admin routes

Route::group(['prefix' => 'admin'], function () {


    // dashboard route

    Route::get('dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');

    // Profile View

    Route::get('profile', [profileSettingController::class, 'viewProfile'])->name('admin.viewProfile');

    // View Admin Setting

    Route::get('profile/setting', [profileSettingController::class, 'adminProfile'])->name('admin.profile');

    // Update Admin Setting

    Route::post('update', [profileSettingController::class, 'adminProfileupdate'])->name('admin.update');

    //logout

    Route::post('/logout', [logoutController::class, 'logout'])->name('logout');

    //Orders View

    Route::get('orders', [orderController::class, 'index'])->name('orders.index');

    // Order Create

    Route::get('orders/create', [orderController::class, 'create'])->name('orders.create');

    // Order Update

    Route::post('orders/update', [orderController::class, 'store'])->name('orders.update');

    // Order Edit

    Route::get('orders/edit/{id}', [orderController::class, 'edit'])->name('orders.edit');

    // Client View

    Route::get('client', [clientController::class, 'index'])->name('client.index');

    // View Create Client

    Route::get('create/client', [clientController::class, 'create'])->name('create.index');

    // Update Create Client

    Route::post('update/client', [clientController::class, 'store'])->name('client.store');

    // View Edit  Client

    Route::get('edit/client/{id}', [editController::class, 'index'])->name('client.edit');

    // Updated Client

    Route::match(['put' , 'post'] , '/client/{id}' , [editController::class  , 'update'])->name('client.update');

    // Delete Employee

    Route::delete('delete', [clientController::class, 'destroy'])->name('del');

});


