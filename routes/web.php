<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TicketController;

// //LOGIN
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('welcome');

})->name('home');
Route::get('/profile-group', [ProfileController::class, 'index'])->name('profile-group');
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::get('/snk', [EventController::class, 'snk'])->name('snk');

Route::middleware('auth')->group(function () {
Route::get('/home/admin', function () {
    return view('admin.dashboard');

})->name('dashboard');

Route::resource('admin/events', EventsController::class);
Route::resource('admin/users', UserController::class);

});
