<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

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

// Praktikum 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "1941720199-Hendri Daffa Athaya";
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' .$id;

// });

// Praktikum 2
// Route::get('/', [PageController::class, 'index']  );

// Route::get('/about', [PageController::class, 'about']  );

// Route::get('/articles/{id}', [PageController::class, 'articles'] );

// Praktikum 3
Route::get('/home', [ProductController::class, 'home']);
Route::prefix('product')->group(function() {
    Route::get('/{id}', [ProductController::class, 'product']);
});
Route::get('/news/{id}', [ProductController::class, 'news']);
Route::prefix('program')->group(function() {
    Route::get('/{id}', [ProductController::class, 'program']);
});
Route::get('/about-us', function(){
    echo '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
});
Route::get('/contact-us', [ProductController::class,'us']);