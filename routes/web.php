<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/categories', function () {
    return view('admin/categories');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', function () {
    return view('admin/products');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/reviews', function () {
    return view('admin/reviews');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/copuns', function () {
    return view('admin/copuns');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/orders', function () {
    return view('admin/orders');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/users', function () {
//     return view('admin/users/index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users', UserController::class);

// Route::get('/orders', function () {
//     return view('admin/orders');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/orders', function () {
//     return view('admin/orders');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
