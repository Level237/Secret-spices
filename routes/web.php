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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController as ControllersEventController;
use App\Http\Controllers\HomePageController;

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

Route::get('/',[HomePageController::class,'index'])->name('homepage');

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
Route::get('recettes/categorie/{slug}',[\App\Http\Controllers\RecipeController::class,'detailByCategory'])->name('recipe.detailByCategory');
Route::get('recettes/{slug}/{category}',[\App\Http\Controllers\RecipeController::class,'detail'])->name('recipe.detail');
Route::get('produits/gamme/{name}g',[GuestProductController::class,'detailByWeight'])->name('product.detailByWeight');
Route::get('produits/{slug}/{gamme}g',[GuestProductController::class,'detail'])->name('product.detail');

Route::get('engagements',function(){

    return view('engagement');
})->name('engagement');

Route::get('galery',function(){

    return view('video-galery');
})->name('galery');


require __DIR__.'/auth.php';

Route::get('/receipts', function(){
    return view('receipts');
})->name('receipts');

Route::get('/recipes-videos', function(){
    return view('recipes-videos');
})->name('recipes-videos');

Route::get('/recipe-category', function(){
    return view('recipe-category');
})->name('recipe-category');

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

Route::get('evenements',[ControllersEventController::class,'index'])-> name('event');

Route::get('lang/{locale}', [LangController::class, 'change'])->name('changeLang');


Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::post('contact', [ContactController::class, 'store']);
