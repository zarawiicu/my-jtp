<?php
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

// Route::get('/home', function () {
//     return view('welcome');

// })->name('home');

//LOGIN
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegis'])->name('register.index');
Route::post('/register', [AuthController::class, 'register'])->name('register.save');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//Admin
//Route::middleware(['auth', 'CekUser:user'])->group(function () {

    Route::get('/home', function () {
        return view('welcome');
    
    })->name('home');
    Route::get('/profile-group', [ProfileController::class, 'index'])->name('profile-group');
    Route::get('/promo', [PromoController::class, 'index'])->name('promo');
    Route::get('/event', [EventController::class, 'index'])->name('event');
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
    Route::get('/snk', [ProfileController::class, 'snk'])->name('snk');

//});

//User
//Route::middleware(['auth:admin'])->group(function () {

    Route::get('/home/admin', function () {
        return view('admin.dashboard');

    })->name('dashboard');

    Route::resource('admin/events', EventsController::class);
    Route::resource('admin/users', UserController::class);

//});


// Route::get('/user', function () {
//     $user_id = request()->user_id;
//     return view('user', $user_id);
// })->name('user');

