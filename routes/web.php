<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookstoreController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('site.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //index page
    Route::get('/index', [IndexController::class, 'index'])->name('home.index');

    //book page
    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/showbook', [BookController::class, 'show'])->name('book.show');
    Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::put('/book/{id}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book.destroy');
    //bookstore
    Route::get('/bookstore', [BookstoreController::class, 'index'])->name('bookstore.index');
    Route::post('/bookstore/store', [BookstoreController::class, 'store'])->name('bookstore.store');
    Route::get('/showbookstore', [BookstoreController::class, 'show'])->name('bookstore.show');
    Route::get('/bookstore/{id}/edit', [BookstoreController::class, 'edit'])->name('bookstore.edit');
    Route::put('/bookstore/{id}', [BookstoreController::class, 'update'])->name('bookstore.update');
    Route::delete('/bookstore/{id}', [BookstoreController::class, 'destroy'])->name('bookstore.destroy');
});

require __DIR__.'/auth.php';
