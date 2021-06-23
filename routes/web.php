<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

/* ----- all home routes start ------- */
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'aboutUS'])->name('about_us');
Route::get('/services', [HomeController::class, 'services'])->name('service');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/products', [HomeController::class, 'productshow'])->name('product');
Route::get('mens', [HomeController::class, 'menshow'])->name('men');
Route::get('womens', [HomeController::class, 'womenshow'])->name('women');
Route::get('details', [HomeController::class, 'productdetail'])->name('detail');
Route::get('/blogs', [HomeController::class, 'blogshow'])->name('blog');
Route::get('/blogdetails', [HomeController::class, 'blogdetail'])->name('blogdetail');
/* ----- all home routes end ------- */

/* ----- all admin routes start ------- */
Route::get('admin/blog', [AdminController::class, 'adminblogs'])->name('admin.addblog');
Route::get('admin/blogs', [AdminController::class, 'addblogs'])->name('admin.blog1');
/* ----- all home routes end ------- */
