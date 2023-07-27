<?php

use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\RecipeController;
use App\Http\Controllers\Admin\WeightController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProductController as GuestProductController;

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
    return view('homepage');
})->name('homepage');

Route::get('/products', function () {
    return view('product');
})->name('products');

Route::get('/product-detail', function(){
    return view('product-detail');
})->name('product-detail');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('weight',WeightController::class);
    Route::resource('product',ProductController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('recipe',RecipeController::class);
    Route::resource('events',EventController::class);
});

Route::get('produits',[GuestProductController::class,'index'])->name('product.index');
Route::get('recettes',[\App\Http\Controllers\RecipeController::class,'index'])->name('recipe.index');
Route::get('produits/gamme/{name}g',[GuestProductController::class,'detailByWeight'])->name('product.detailByWeight');
Route::get('produits/{name}/{gamme}g',[GuestProductController::class,'detail'])->name('product.detail');
Route::get('engagements',function(){

    return view('pages.engagements');
});

require __DIR__.'/auth.php';

Route::get('/receipts', function(){
    return view('receipts');
})->name('receipts');

Route::get('/details/recettes',function(){
return view('details-recipes');
})->name('details.recipes');

Route::get('/single',function(){
return view('single-recipe');
})->name('single-recipe');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/legal', function(){
    return view('legal');
})-> name('legal');

Route::get('/health-information', function(){
    return view('health-information');
})-> name('health-information');

Route::get('/personnal-data', function(){
    return view('personnal-data');
})-> name('personnal-data');

Route::get('/blog', function(){
    return view('blog');
})-> name('blog');

Route::get('/event', function(){
    return view('event');
})-> name('event');

Route::get('lang/{locale}', [LangController::class, 'change'])->name('changeLang');
Route::get('contact', function(){
    return view('contact');
})->name('contact');
