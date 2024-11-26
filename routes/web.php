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





    Route::prefix('')
    ->group(function () {
            Route::get('/', function () {
                return view('user/master');
            });

            Route::get('/master', function () {
                return view('user/master');
            });
            
            Route::get('/wishlist', function () {
                return view('user/wishlist');
            });
            
            Route::get('/contact-us', function () {
                return view('user/contact-us');
            });
            
            
            Route::get('/about-us', function () {
                return view('user/about-us');
            });
            Route::get('/blog-masonary', function () {
                return view('user/blog-masonary');
            });
            Route::get('/blog-no-sidebar', function () {
                return view('user/blog-no-sidebar');
            });
            Route::get('/blog-standard', function () {
                return view('user/blog-standard');
            });
            Route::get('/blog', function () {
                return view('user/blog');
            });
            Route::get('/cart', function () {
                return view('user/cart');
            });
            Route::get('/checkout', function () {
                return view('user/checkout');
            });
            Route::get('/coming-soon', function () {
                return view('user/coming-soon');
            });
            Route::get('/compare', function () {
                return view('user/compare');
            });
            Route::get('/contact-us', function () {
                return view('user/contact-us');
            });
            Route::get('/faqs-page', function () {
                return view('user/faqs-page');
            });
            Route::get('/login-register', function () {
                return view('user/login-register');
            });
            Route::get('/my-account', function () {
                return view('user/my-account');
            });
            Route::get('/order-tracking', function () {
                return view('user/order-tracking');
            });
            Route::get('/product-details-02', function () {
                return view('user/product-details-02');
            });
            Route::get('/product-details-affiliate', function () {
                return view('user/product-details-affiliate');
            });
            Route::get('/product-details-configurable', function () {
                return view('user/product-details-configurable');
            });
            Route::get('/product-details-gallery', function () {
                return view('user/product-details-gallery');
            });
            Route::get('/product-details-grouped', function () {
                return view('user/product-details-grouped');
            });
            Route::get('/product-details-sidebar', function () {
                return view('user/product-details-sidebar');
            });
            Route::get('/product-details-sticky', function () {
                return view('user/product-details-sticky');
            });
            Route::get('/product-details', function () {
                return view('user/product-details');
            });
            Route::get('/shop-collections', function () {
                return view('user/shop-collections');
            });
            Route::get('/shop-fullwidth', function () {
                return view('user/shop-fullwidth');
            });
            Route::get('/shop-instagram', function () {
                return view('user/shop-instagram');
            });
            Route::get('/shop-list', function () {
                return view('user/shop-list');
            });
            Route::get('/shop-no-gutter', function () {
                return view('user/shop-no-gutter');
            });
            Route::get('/shop-sidebar', function () {
                return view('user/shop-sidebar');
            });
            Route::get('/shop-three-column', function () {
                return view('user/shop-three-column');
            });
            Route::get('/shop-two-column', function () {
                return view('user/shop-two-column');
            });
            Route::get('/single-post-sidebar', function () {
                return view('user/single-post-sidebar');
            });
            Route::get('/single-post', function () {
                return view('user/single-post');
            });
            Route::get('/team', function () {
                return view('user/team');
            });
            Route::get('/welcome', function () {
                return view('user/welcome');
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
