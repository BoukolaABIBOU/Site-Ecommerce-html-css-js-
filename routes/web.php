<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EcommerceproductController;
use App\Http\Controllers\EcommerceproductcheckoutController;
use App\Http\Controllers\EmailcomposeController;
use App\Http\Controllers\EmaildetailsController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessagechatController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\IndexiController;
use App\Http\Controllers\LoginxController;
use App\Http\Controllers\ShopController;



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

/*Route::get('/', function () {
    // dd('AAA');
    return view('Administrateur/index');
});*/
/*
//----------------------------------------------------------------------
//---------------------------Administrateur-----------------------------
Route::name('admin.')->group(function () {
    Route::get('/index', [IndexController::class,'index'])->name('index');
    Route::get('/ecommerce-product', [EcommerceproductController::class,'product'])->name('product');
    Route::get('/ecommerce-product-checkout', [EcommerceproductcheckoutController::class,'checkout'])->name('checkout');
    Route::get('/forgot-password', [ForgotpasswordController::class,'forgotpassword'])->name('forgot-password');
    Route::get('/sign-up', [SignupController::class,'signup'])->name('sign-up');
    Route::get('/message-chat', [MessagechatController::class,'messagechat'])->name('message');
    Route::get('/login', [LoginController::class,'login'])->name('login');
    Route::get('/inbox', [InboxController::class,'inbox'])->name('inbox');
    Route::get('/email-details', [EmaildetailsController::class,'emaildetails'])->name('email');
    Route::get('/email-compose', [EcommerceproductController::class,'emailcompose'])->name('email-compose');

});

//----------------------------------------------------------------------
//---------------------------HOME--------------------------------------
Route::name('home.')->group(function () {
    
    Route::get('/home', [IndexiController::class,'indexi'])->name('home');
    Route::get('/cart', [CartController::class,'cart'])->name('cart');
    Route::get('/checkout', [CheckoutController::class,'checkout'])->name('checkout');
    Route::get('/contact-us', [ContactusController::class,'contactus'])->name('contact-us');
    Route::get('/connect', [LoginxController::class,'loginx'])->name('connect');
    Route::get('/seller', [SellerController::class,'seller'])->name('seller');
    Route::get('/shop', [ShopController::class,'shop'])->name('shop');

});*/


//-----------------------------Routes Admin-----------------------------

Route::get('index', [IndexController::class,'index'])->name('index');
Route::get('ecommerce-product', [EcommerceproductController::class,'product'])->name('ecommerce-product');
Route::get('ecommerce-product-checkout', [EcommerceproductcheckoutController::class,'checkout'])->name('ecommerce-product-checkout');
Route::get('forgot-password', [ForgotpasswordController::class,'forgotpassword'])->name('forgot-password');
Route::get('sign-up', [SignupController::class,'signup'])->name('sign-up');
Route::get('message-chat', [MessagechatController::class,'messagechat'])->name('message-chat');
Route::get('login', [LoginController::class,'login'])->name('login');
Route::get('inbox', [InboxController::class,'inbox'])->name('inbox');
Route::get('email-details', [EmaildetailsController::class,'emaildetails'])->name('email-details');
Route::get('email-compose', [EmailcomposeController::class,'emailcompose'])->name('email-compose');


//-----------------------------Routes home-----------------------------
Route::get('/', [IndexiController::class,'indexi'])->name('indexi');
Route::get('cart', [CartController::class,'cart'])->name('cart');
Route::get('checkout', [CheckoutController::class,'checkout'])->name('checkout');
Route::get('contact-us', [ContactusController::class,'contactus'])->name('contact-us');
Route::get('loginx', [LoginxController::class,'loginx'])->name('loginx');
Route::get('seller', [SellerController::class,'seller'])->name('seller');
Route::get('shop', [ShopController::class,'shop'])->name('shop');
