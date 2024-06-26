<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LelangController;



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

    Route::get('/officer-product-list', function () {
        return view('page.ProductListPetugas');
    });
});

Route::post('/addProduct', [BarangController::class, 'addProduct']);
Route::delete('/barang/{id}', [BarangController::class, 'deleteProduct'])->name('deleteBarang');
Route::post('/place-bid', [LelangController::class, 'placeBid'])->name('place.bid');
Route::post('/close-auction/{id_barang}', [LelangController::class, 'closeAuction'])->name('closeAuction');
Route::get('/auction-history/download-pdf', [LelangController::class, 'downloadAuctionHistoryPDF'])->name('download.auction.history.pdf');




// route group for admin
Route::middleware(['admin.auth'])->prefix('/admin')->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('page.DashboardAdmin');
    })->name('admin/admin-dashboard');

    Route::get('/admin-product', function () {
        return view('CRUD-PAGE.addProduct');
    });

    Route::get('/admin-product-list', [BarangController::class, 'queryProduct'])->name('query.product');
    Route::post('/addLelang', [LelangController::class, 'addLelang'])->name('add.lelang');

    Route::get('/admin-data-officer', [PetugasController::class, 'index'])->name('data');

    Route::get('/admin-report', [LelangController::class, 'getAuctionHistory'])->name('history');
    Route::delete('/admin/admin-data-officer/{id}', [PetugasController::class, 'delete'])->name('delete.petugas');
    Route::put('/admin/admin-data-officer/{id}', [PetugasController::class, 'update'])->name('update.petugas');

    Route::post('/logout', [PetugasController::class, 'logout'])->name('logout.petugas');
});

Route::post('/register', [PetugasController::class, 'register'])->name('register.petugas');
Route::post('/login', [PetugasController::class, 'login'])->name('login');

Route::prefix('/login-register')->group(function () {
    // Route for rendering the registration form for masyarakat
    Route::get('/sign-up', function () {
        return view('signUp');
    });

    // Route for rendering the login form for admin or petugas
    Route::get('/login', function () {
        return view('page-login-admin-petugas.login');
    })->name('login.view.petugas');

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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.masyarakat');

// route for home website
Route::middleware(['masyarakat.auth'])->get('/home', [LelangController::class, 'queryLelang'])->name('home');


// route login for masyakarat
Route::get('/', function () {
    return view('welcome');
})->name('login.view.masyarakat');
