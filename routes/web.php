<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Service;

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/service', function () {
    $services = Service::all(); // Fetch data from DB
    return view('front.service', compact('services'));
})->name('service');

Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');

Route::view('/blog-details', 'front.blog-single')->name('blog.single');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

// Redirect /admin to /admin/login
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

// Login Routes (Guest only)
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/admin/login-submit', [AuthController::class, 'login'])->name('admin.login.submit');
});

// Protected Admin Routes (Requires Login)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
});
