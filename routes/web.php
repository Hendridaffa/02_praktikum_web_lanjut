<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


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
// Route::get('/', [HomeController::class, 'index']  );

// Route::get('/about', [AboutController::class, 'about']  );

// Route::get('/articles/{id}', [ArticlesController::class, 'articles'] );

// Praktikum 3
// Route::get('/home', [ProductController::class, 'home']);
// Route::prefix('product')->group(function() {
//     Route::get('/{id}', [ProductController::class, 'product']);
// });
// Route::get('/news/{id}', [ProductController::class, 'news']);
// Route::prefix('program')->group(function() {
//     Route::get('/{id}', [ProductController::class, 'program']);
// });
// Route::get('/about-us', function(){
//     echo '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
// });
// Route::get('/contact-us', [ProductController::class,'us']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// 1. Menampilkan Halaman Awal Website
Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Menampilkan Daftar Produk (Route Prefix)
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbeledugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});

// 3. Menampilkan Daftar Berita (Route Param)
Route::get('/news', [ArticlesController::class, 'news']);
Route::get('/news/{string}', [ArticlesController::class, 'newsString']);

// 4. Menampilkan Daftar Program (Route Prefix)
Route::prefix('/program')->group(function () {
    Route::get('/{string}', function ($string) {
        return view('program', ['url' => $string]);
    });
});

// 5. About Us
Route::get('/about-us', [AboutController::class, 'about']);

// 6. Contact Us
Route::get('/contact-us', [ContactController::class, 'index']);