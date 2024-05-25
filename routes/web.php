<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

// route group for petugas
Route::prefix('/officer')->group(function () {

    // route for dashboard petugas
    Route::get('/officer-dashboard', function () {
        return view('page.dashboardPetugas');
    });

    // route add product for petugas
    Route::get('/officer-product', function () {
        return view('CRUD-PAGE.addProduct');
    });
});

Route::post('/addProduct', [BarangController::class, 'addProduct']);

// route group for admin
Route::prefix('/admin')->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('page.DashboardAdmin');
    })->name('admin/admin-dashboard');

    // route add product for admin
    Route::get('/admin-product', function () {
        return view('CRUD-PAGE.addProduct');
    });
});

Route::prefix('/login-register')->group(function () {
    // Route for rendering the registration form for masyarakat
    Route::get('/sign-up', function () {
        return view('signUp');
    });

    // Route for rendering the login form for admin or petugas
    Route::get('/login', function () {
        return view('page-login-admin-petugas.login');
    });

    // Route for login masyrakat
    Route::post('/login-masyarakat', [AuthController::class, 'login']);


    // Route for rendering the registration form for officer (admin or petugas)
    Route::get('/sign-up-officer', function () {
        return view('page-login-admin-petugas.register');
    });

    // Route to handle registration form submission for masyarakat
    Route::post('/sign-up', [AuthController::class, 'register']);

    // Route to handle login form submission for admin or petugas
    Route::post('/login', [AuthController::class, 'login']);
});

// Route to handle logout
Route::post('/logout', [AuthController::class, 'logout']);

// route for home website
Route::get('/home', function () {
    return view('page.Home');
})->name('home');

// route login for masyakarat
Route::get('/', function () {
    return view('welcome');
});