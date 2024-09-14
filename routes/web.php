<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('acl:dashboard')
    ->name('dashboard');

Route::get('/reports', [ReportsController::class, 'index'])
    ->middleware('acl:reports')
    ->name('reports');

Route::get('/configuration', [ConfigurationController::class, 'index'])
    ->middleware('acl:configuration')
    ->name('configuration');

Route::get('/access-denied', function () {
    return "Access Denied!";
});

Route::get('/register', [AccountController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AccountController::class, 'register']);

Route::get('/account/users', [UserController::class, 'create'])
    ->middleware('auth')
    ->name('user.create');

Route::post('/account/users', [UserController::class, 'store'])
    ->middleware('auth')
    ->name('user.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();