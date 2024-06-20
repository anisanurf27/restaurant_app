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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Order1Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderAdminController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

Route::resource('categories', CategoryController::class);
Route::resource('categorydetails', CategoryDetailController::class);
Route::resource('members', MemberController::class);
Route::resource('menus', MenuController::class);
// Route::resource('orders', OrderController::class);
Route::resource('orderdetails', OrderDetailController::class);

Route::resource('reservations', ReservationController::class);
Route::resource('restaurants', RestaurantController::class);
Route::resource('reviews', ReviewController::class);

// customer reservations
Route::get('/reservation', [ReservationController::class, 'index'])->middleware('auth')->name('reservation');
Route::get('/reservation-store', [ReservationController::class, 'store'])->middleware('auth')->name('reservation.store');
Route::get('reservation/data', [ReservationController::class, 'reservationsData'])->middleware('auth')->name('reservation.data');
Route::delete('/reservation/cancel/{id}', [ReservationController::class, 'cancel'])->middleware('auth')->name('reservation.cancel');
Route::get('/reservation/edit/{id}', [ReservationController::class, 'edit'])->middleware('auth')->name('reservation.edit');
Route::put('/reservation/update/{id}', [ReservationController::class, 'update'])->middleware('auth')->name('reservation.update');
// customer reservations

// admin reservations
Route::get('/admin/reservations-admin', [ReservationController::class, 'index_admin'])->middleware('auth', 'admin')->name('reservation.admin');
Route::get('/admin/reservations/approve/{id}', [ReservationController::class, 'approve'])->name('reservations.approve');
Route::get('/admin/reservations/reject/{id}', [ReservationController::class, 'reject'])->name('reservations.reject');
// customer reservations

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->middleware('auth', 'admin')->name('admin.dashboard');
Route::get('/admin', [DashboardController::class, 'dashboard'])->middleware('auth', 'admin')->name('admin.dashboard');

Route::get('/pelanggan', function () {
    return view('customer.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/checkout', [Order1Controller::class, 'showCheckoutForm'])->name('checkout.form');
Route::post('/checkout', [Order1Controller::class, 'processCheckout'])->name('checkout.process');
Route::get('/pelanggan', function () {
    return view('customer.dashboard');
})->name('dashboard');


//contact
Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('send.message');

// order
Route::get('/orders', [Order1Controller::class, 'index'])->name('admin.order');
Route::get('/orders/{id}/edit', [Order1Controller::class, 'edit'])->name('orders.edit');
Route::post('/orders/{id}', [Order1Controller::class, 'update'])->name('orders.update');
Route::delete('/orders/{id}', [Order1Controller::class, 'destroy'])->name('orders.destroy');
Route::post('/orders/move-to-report/{id}', [Order1Controller::class, 'moveToReport'])->name('orders.move-to-report');


