<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ProfileController;
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
Route::resource('profile', ProfileController::class);

/*---------- all banner routes start -----------*/
Route::resource('banner', BannerController::class);
// Route::get('banner/index', ['as' => 'index', 'uses' => 'BannerController@index']);
/*---------- all banner routes end -----------*/

/* ----- all admin blog routes start ------- */
Route::get('admin/blog', [BlogController::class, 'index'])->name('blog.ind');
Route::get('admin/blog/create', [BlogController::class, 'create'])->name('blog.cre');
Route::post('admin/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('admin/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
/* ----- all admin blog routes end ------- */

/* ----- all admin news routes start ------- */
Route::get('admin/news', [NewsController::class, 'index'])->name('admin.news');
Route::get('admin/create', [NewsController::class, 'create'])->name('admin.addnew');
Route::post('admin/store', [NewsController::class, 'store'])->name('admin.store');
Route::get('admin/edit/{id}', [NewsController::class, 'edit'])->name('admin.edit');
Route::put('admin/update/{id}', [NewsController::class, 'update'])->name('admin.update');
Route::delete('admin/destroy/{id}', [NewsController::class, 'destroy'])->name('admin.destroy');
/* ----- all admin news routes end ------- */

/* ----- all admin product routes start ------- */
Route::get('men', [MenController::class, 'index'])->name('men.index');
Route::get('men/create', [MenController::class, 'create'])->name('men.create');
Route::post('men/store', [MenController::class, 'store'])->name('men.store');
Route::get('men/edit/{id}', [MenController::class, 'edit'])->name('men.edit');
Route::put('men/update/{id}', [MenController::class, 'update'])->name('men.update');
Route::delete('men/delete/{id}', [MenController::class, 'destroy'])->name('men.del');

Route::get('women', [WomenController::class, 'index'])->name('women.index');
Route::get('women/create', [WomenController::class, 'create'])->name('women.create');
Route::post('women/store', [WomenController::class, 'store'])->name('women.store');
Route::get('women/edit/{id}', [WomenController::class, 'edit'])->name('women.edit');
Route::put('women/update/{id}', [WomenController::class, 'update'])->name('women.update');
Route::delete('women/delete/{id}', [WomenController::class, 'destroy'])->name('women.delete');
/* ----- all admin news routes end ------- */

/*---------- all logo routes start -----------*/
Route::get('logo', [ClientLogoController::class, 'index'])->name('client.index');
Route::get('logo/create', [ClientLogoController::class, 'create'])->name('client.create');
Route::post('logo/store', [ClientLogoController::class, 'store'])->name('client.store');
Route::get('logo/edit/{id}', [ClientLogoController::class, 'edit'])->name('client.edit');
Route::put('logo/update/{id}', [ClientLogoController::class, 'update'])->name('client.update');
Route::delete('logo/destroy/{id}', [ClientLogoController::class, 'destroy'])->name('client.delete');
/* ----- all admin routes end ------- */
