<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;


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

// Route::get('/login',[Login::class, 'show']);

Route::get('/login', [Login::class, 'show'])->name('login');
Route::post('/login', [Login::class, 'authenticate'])->name('login.submit');

// Route::get('/register',[Register::class, 'show']);

Route::get('/register', [Register::class, 'show'])->name('register');
Route::post('/register', [Register::class, 'submit'])->name('register.submit');


// Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('userauth');

Route::get('/profile',[ProfileController::class, 'show'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/change-password',[PasswordController::class, 'changeForm'])->name('settings');

Route::post('/change-password', [PasswordController::class, 'updatePassword'])->name('password.update');

Route::get('/instructions', function () {
    return view('instructions');
})->name('instructions');


// Route::get('/logout', function () {
//     Auth::logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();
//     return redirect('/login');
// })->name('logout');


Route::get('/logout', function () {
   
    session()->flush();

    
    session()->regenerateToken();

    return redirect('/login');
})->name('logout');
