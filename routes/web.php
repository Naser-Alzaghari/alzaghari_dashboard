<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\user\ProductController as UserProductController;
use App\Http\Controllers\admin\ProfileController;

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\user\LandingPageController;
use App\Http\Controllers\user\ShopSidebarController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\user\CartController;
// use App\Http\Controllers\OrderController;

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
        
            Route::resource('products', AdminProductController::class)->name('index','products');
            
            // Route to display the add stock form
            Route::get('/products/{id}/addStockForm', [AdminProductController::class, 'addStockForm'])->name('products.addStockForm');
            Route::put('/products/{id}/add-stock', [AdminProductController::class, 'addStock'])->name('products.addStock');
        
            Route::resource('reviews', ReviewController::class)->name('index','reviews');
            Route::get('/reviews/{review}/toggle', [ReviewController::class, 'toggle'])->name('reviews.toggle');
        
            Route::resource('categories', CategoryController::class)->name('index','categories');
            Route::resource('orders', OrderController::class)->name('index','orders');
        });
        

    });





    Route::prefix('')
    ->group(function () {
            Route::get('/', [LandingPageController::class, 'index'])->name('landing_page');

            Route::get('/master', function () {
                return view('user/master');
            });
            
            Route::get('/wishlist', function () {
                return view('user/wishlist');
            })->name('wishlist');
            
            Route::get('/contact-us', function () {
                return view('user/contact-us');
            })->name('contact-us');
            
            
            Route::get('/about-us', function () {
                return view('user/about-us');
            })->name('about-us');
            Route::get('/blog-masonary', function () {
                return view('user/blog-masonary');
            })->name('blog-masonary');
            Route::get('/blog-no-sidebar', function () {
                return view('user/blog-no-sidebar');
            });
            Route::get('/blog-standard', function () {
                return view('user/blog-standard');
            });
            Route::get('/blog', function () {
                return view('user/blog');
            })->name('blog');
            // Route::get('/cart', function () {
            //     return view('user/cart');
            // })->name('cart');
            Route::get('/checkout', function () {
                return view('user/checkout');
            })->name('checkout');
            Route::get('/coming-soon', function () {
                return view('user/coming-soon');
            })->name('coming-soon');
            Route::get('/compare', function () {
                return view('user/compare');
            })->name('compare');
            Route::get('/contact-us', function () {
                return view('user/contact-us');
            })->name('contact-us');
            Route::get('/faqs-page', function () {
                return view('user/faqs-page');
            })->name('faqs-page');
            Route::get('/login-register', function () {
                return view('user/login-register');
            });
            Route::get('/my-account', function () {
                return view('user/my-account');
            })->name('my-account');
            Route::get('/order-tracking', function () {
                return view('user/order-tracking');
            })->name('order-tracking');
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
            // routes/web.php
            Route::get('/product/{id}', [UserProductController::class, 'show'])->name('product-details');
            // Route::get('/product-details', function () {
            //     return view('user/product-details');
            // })->name('product-details');
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
            Route::get('/shop-sidebar', [ShopSidebarController::class, 'index'])->name('shop-sidebar');
            Route::get('/shop-three-column', function () {
                return view('user/shop-three-column');
            })->name('shop-three-column');
            Route::get('/shop-two-column', function () {
                return view('user/shop-two-column');
            })->name('shop-two-column');
            Route::get('/single-post-sidebar', function () {
                return view('user/single-post-sidebar');
            })->name('single-post-sidebar');
            Route::get('/single-post', function () {
                return view('user/single-post');
            })->name('single-post');
            Route::get('/team', function () {
                return view('user/team');
            })->name('team');
            Route::get('/welcome', function () {
                return view('user/welcome');
            })->name('welcome');
            // routes/web.php



            Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
            Route::post('/update-cart-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
            Route::post('/update-cart-total', [CartController::class, 'updateTotal'])->name('cart.updateTotal');
            Route::post('/remove-cart-item', [CartController::class, 'removeItem'])->name('cart.removeItem');
            Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
            Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout')->middleware('auth');
            Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place')->middleware('auth');
            Route::get('/product-data', [UserProductController::class, 'getProductData'])->name('getProductData');
            Route::get('/minicartprice', [CartController::class, 'updateCart'])->name('minicartprice');


            
        
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
