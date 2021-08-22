<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthCustController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\TransactionController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

// Route::get('/adin', function () {
//     return view('index');
// });

// Route::get('/category', [CategoryController::class, 'index']);
// Route::post('/category', [CategoryController::class, 'store']);
// Route::get('/category/create', [CategoryController::class, 'create']);
// Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
// Route::patch('/category/{category}/', [CategoryController::class, 'update']);
// Route::delete('/category/{category}/', [CategoryController::class, 'destroy']);

//admin
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'registrasi'])->name('register');
Route::post('/register', [AuthController::class, 'registrasiStore']);
Route::group(['middleware' => ['auth', 'super']], function(){
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::get('/productPhoto', [ProductController::class, 'createPhoto']);
    Route::post('/productPhoto', [ProductController::class, 'storePhoto']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::resource('bank', BankController::class);
    Route::get('/promo/{product}', [ProductController::class, 'promo']);
    Route::get('/rekomendasi/{product}', [ProductController::class, 'rekomendasi']);
    // Route::get('state', StateController::class);
    // Route::get('city', CityController::class);
});

//customer
Route::get('/', [LandingController::class, 'index']);
Route::post('/registerCust', [AuthCustController::class, 'registrasiCust']);
Route::post('/loginCust', [AuthCustController::class, 'loginCust']);
Route::get('/logoutCust', [AuthCustController::class, 'logoutCust']);
Route::get('/loginCust', [AuthCustController::class, 'index'])->name('loginCust');
Route::get('/detail/{product}', [LandingController::class, 'detail']);

//keranjang
Route::group(['middleware' => ['authcustomer', 'customer']], function(){
    Route::resource('cart', CartController::class);
    Route::get('/transaction/sukses', [TransactionController::class, 'sukses']);
    Route::resource('transaction', TransactionController::class);
});

