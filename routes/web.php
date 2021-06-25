<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ClientLogoController;
use App\Http\Controllers\admin\MenController;
use App\Http\Controllers\admin\WomenController;
use App\Http\Controllers\admin\NewsController;
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
Route::get('admin/profiles', [AdminController::class, 'profiles'])->name('admin.profile');
Route::get('admin/blog', [BlogController::class, 'adminblogs'])->name('admin.blogs');
Route::get('admin/blogs', [BlogController::class, 'index'])->name('admin.addblog');
Route::get('admin/new', [NewsController::class, 'news'])->name('admin.news');
Route::get('admin/news', [NewsController::class, 'index'])->name('admin.addnew');
Route::get('admin/banners', [BannerController::class, 'index'])->name('admin.addbanner');
Route::get('admin/men', [MenController::class, 'men'])->name('admin.mens');
Route::get('admin/mens', [MenController::class, 'index'])->name('admin.addmen');
Route::get('admin/women', [WomenController::class, 'womens'])->name('admin.womens');
Route::get('admin/womens', [WomenController::class, 'index'])->name('admin.addwomen');
Route::get('admin/logo', [ClientLogoController::class, 'index'])->name('admin.addlogos');
/* ----- all home routes end ------- */
