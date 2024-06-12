<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryDetailController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;


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

// Admins login
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Tambahkan rute lainnya untuk admin di sini
});

    


// Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

Route::resource('categories', CategoryController::class);
Route::resource('categorydetails', CategoryDetailController::class);
Route::resource('members', MemberController::class);
Route::resource('menus', MenuController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderdetails', OrderDetailController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('restaurants', RestaurantController::class);
Route::resource('reviews', ReviewController::class);

Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation');
Route::get('/reservation-store', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');
