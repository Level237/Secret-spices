<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WeightController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD

=======
use App\Http\Controllers\WeightController;
use GuzzleHttp\Psr7\Uri;
>>>>>>> 17f7555227d2a3c9918806ff78df5d1174bd7be4
use Illuminate\Support\Facades\Route;

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

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/product-detail', function(){
    return view('product-detail');
})->name('product-detail');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('weight',WeightController::class);
<<<<<<< HEAD
    Route::resource('product',ProductController::class);
=======
>>>>>>> 17f7555227d2a3c9918806ff78df5d1174bd7be4
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

Route::get('lang/{locale}', [LangController::class, 'change'])->name('changeLang');
Route::get('contact', function(){
    return view('contact');
})->name('contact');