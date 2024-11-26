<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\CategoryController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\admin\DashboardController;

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

// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', DashboardController::class);





// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::prefix('user')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
//     // Other user-specific routes...
// });

// Admin Dashboard Routes
Route::prefix('admin')
    ->group(function () {
        Route::middleware('auth')->name('admin.')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            Route::get('/orders', function () {
                return view('admin/orders');
            })->middleware(['auth', 'verified'])->name('dashboard');
        
            Route::resource('coupons', CouponController::class)->name('index','coupons');
            Route::patch('/coupons/{coupon}/toggle', [CouponController::class, 'toggle'])->name('coupons.toggle');
            Route::resource('users', UserController::class)->name('index','users');
            Route::post('/users/{id}/restore', [UserController::class, 'restore'])->name('users.restore');
            Route::get('/api/sales', [DashboardController::class, 'getMonthlySales']);
        
            Route::resource('products', ProductController::class)->name('index','products');
            
            // Route to display the add stock form
            Route::get('/products/{id}/addStockForm', [ProductController::class, 'addStockForm'])->name('products.addStockForm');
            Route::put('/products/{id}/add-stock', [ProductController::class, 'addStock'])->name('products.addStock');
        
            Route::resource('reviews', ReviewController::class)->name('index','reviews');
            Route::get('/reviews/{review}/toggle', [ReviewController::class, 'toggle'])->name('reviews.toggle');
        
            Route::resource('categories', CategoryController::class)->name('index','categories');
            Route::resource('orders', OrderController::class)->name('index','orders');
        });
        

    });































// Route::get('/categories', function () {
//     return view('admin/categories');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/products', function () {
//     return view('admin/products');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/reviews', function () {
//     return view('admin/reviews');
// })->middleware(['auth', 'verified'])->name('dashboard');



// Route::get('/profile', function () {
//     return view('profile/edit');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/users', function () {
//     return view('admin/users/index');
// })->middleware(['auth', 'verified'])->name('dashboard');



// Route::get('/orders', function () {
//     return view('admin/orders');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/orders', function () {
//     return view('admin/orders');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
