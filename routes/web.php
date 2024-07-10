<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailProductController;
use App\Http\Middleware\role;
use Illuminate\Support\Facades\Route;

Auth::routes();



// Route Admin(Backend)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', role::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UsersController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::post('product/media', [ProductController::class, 'storeMedia'])->name('product.storeMedia');

    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
    
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
});

// Route::middleware(['auth'])->group(function () {
   
    
// });

// Route Frontend
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('home');

Route::get('/detail_product/{id}', [App\Http\Controllers\ShopController::class, 'shop_details'])->name('detail_product');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('shop/kategori/{id}', [ShopController::class, 'kategori']);
// Route::get('/order-completed', [App\Http\Controllers\DoneController::class, 'index'])->name('done');