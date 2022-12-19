<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SignatureController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signatures', [SignatureController::class, 'index']);
Route::post('/signatures', [SignatureController::class, 'store']);

// Route::get('/', function () {

//     $product = Product::find(11);
//     $category = Category::find(1);

// $product->categories()->orWherePivot('visible', false)->updateExistingPivot($category->id, ['visible' => true]);
// $product = new Product;
// $product->title = 'Apple Mouse';
// $product->price = 50;
// $product->save();

// $category = Category::whereIn('title', ['TECH', 'APPLE'])->get();
// $product->categories()->attach($category);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/products/{product}', [ProductController::class, 'show']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
