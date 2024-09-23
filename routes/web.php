<?php
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/home', function () {
    return view('welcome');

})->name('home');

Route::get('/profile-group', [ProfileController::class, 'index'])->name('profile-group');
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::get('/snk', [ProfileController::class, 'snk'])->name('snk');

