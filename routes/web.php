<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Product;

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

/**
 * These are the app routes those that the user is going to see
 */

Route::get('/', function () {
    return view('home', [
        'selected_pet' => '',
        'selected_category' => '',
        'pets' => \App\Models\Pet::all(),
        'categories' => \App\Models\Category::all(),
        'products' => \App\Models\Product::all()
    ]);
})->name('home');

Route::get('products/{pet}/{category}', [HomeController::class, 'index'])->name('products');

Route::get('product/{product}', [HomeController::class, 'show'])->name('product');


require __DIR__ . '/admin.php';
