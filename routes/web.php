<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartnerController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/detail-event', function () {
    return view('event-detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    // Rute Login bebas akses
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('events', EventAdminController::class);
    Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::resource('categories', CategoryController::class);
    Route::resource('partners', PartnerController::class);

});
});