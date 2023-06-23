<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\clientController;
use App\Http\Controllers\admin\dashboardController;
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

Route::get('login', [loginController::class, 'index'])->name('login')->prefix('admin');

// Login authentication route

Route::post('/login/process', [loginController::class, 'authenticateLoginRequest'])->name('login.process')->prefix('admin');

//Admin routes

Route::group(['prefix' => 'admin'], function () {


    // dashboard route

    Route::get('dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');

    // View Admin Setting

    Route::get('profile/setting', [profileSettingController::class, 'adminProfile'])->name('admin.profile');

    // Update Admin Setting

    Route::post('update', [profileSettingController::class, 'adminProfileupdate'])->name('admin.update');

    //logout

    Route::post('/logout', [logoutController::class, 'logout'])->name('logout');

    //Orders View

    Route::get('orders', [orderController::class, 'index'])->name('orders.index');

    // Client View

    Route::get('client', [clientController::class, 'index'])->name('client.index');

    // View Create Client

    Route::get('create/client', [adminController::class, 'index'])->name('create.index');

    // Update Create Client

    Route::post('update/client', [adminController::class, 'store'])->name('client.store');


});


