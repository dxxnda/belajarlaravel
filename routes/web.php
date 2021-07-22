<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
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

Route::get('/adin', function () {
    return view('index');
});

// Route::get('/category', [CategoryController::class, 'index']);
// Route::post('/category', [CategoryController::class, 'store']);
// Route::get('/category/create', [CategoryController::class, 'create']);
// Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
// Route::patch('/category/{category}/', [CategoryController::class, 'update']);
// Route::delete('/category/{category}/', [CategoryController::class, 'destroy']);

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);

