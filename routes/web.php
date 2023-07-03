<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebsiteController::class, 'homefunc']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

Route::resource('/products', ProductsController::class);

Route::get('/home_page', [WebsiteController::class, 'homefunc']);

Route::get('/contact', [WebsiteController::class, 'contactfunc']);

Route::get('/order_list', [WebsiteController::class, 'orderlistfunc']);



//Route::post('/shopping_cart/{id}', [WebsiteController::class, 'shoppingfunc']);

//Route::get('/shopping_cart/{id}', [WebsiteController::class, 'shoppingfunc']);




Route::get('/product_details/{id}' , [WebsiteController::class, 'product_details_func']);

// Route::get('/product_details', [WebsiteController::class, 'product_details_func']);

Route::get('/nastaleekh', [WebsiteController::class, 'nastaleekh_func']);

Route::get('/sulus', [WebsiteController::class, 'sulus_func']);

Route::get('/mix', [WebsiteController::class, 'mix_func']);



Route::get('/cart', [WebsiteController::class, 'cart']);

Route::get('add-to-cart/{id}', [WebsiteController::class, 'addToCart']);

Route::patch('update-cart', [WebsiteController::class, 'update']);

Route::delete('remove-from-cart', [WebsiteController::class, 'remove']);

Route::get('/check_out', [WebsiteController::class, 'checkoutfunc']);

Route::post('/order', [WebsiteController::class, 'orderfunc']);

//Route::get('send-email/{email}', [WebsiteController::class, 'send_email']);

Route::get('send-email', [WebsiteController::class, 'send_email']);

Route::get('clearcart', [WebsiteController::class, 'clearcart']);



// Route::get('clearcart', function(){
//     session()->forget('cart');
//     return redirect('/');
// });



Route::resource('/master', AdminController::class);

require __DIR__.'/auth.php';
