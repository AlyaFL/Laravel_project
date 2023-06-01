<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'home.index')->name('home');

Route::middleware('guest')->group(function(){
    Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
    Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');
    
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::get('/participants', [ParticipantsController::class, 'index'])->name('participants');
Route::middleware('auth')->group(function(){
    // Route::get('/participants', [ParticipantsController::class, 'index'])->name('participants');

    Route::get('/edit-profile', [ProfileController::class, 'index'])->name('edit-profile');
    Route::post('/edit-profile', [ProfileController::class, 'update'])->name('edit-profile.update');
});

