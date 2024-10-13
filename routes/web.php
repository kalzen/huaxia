<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware(['LocalizationMiddleware'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::post('/message', [HomeController::class, 'contact'])->name('message');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    // Route::get('/tu-van', [HomeController::class, 'advise'])->name('advise');
    Route::any('/gioi-thieu', [HomeController::class, 'about'])->name('about');
    Route::any('/dich-vu', [HomeController::class, 'service'])->name('service');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::any('/lien-he', [HomeController::class, 'contact'])->name('contact');
    // Route::get('/san-pham/{alias}', [ProductController::class, 'detail'])->name('product.detail');
    // Route::get('/danh-muc/{alias}', [ProductController::class, 'catalogue'])->name('product.catalogue');
    // Route::get('/tin-tuc', [PostController::class, 'index'])->name('post.list');
    Route::get('/tuc-tin', [PostController::class, 'index'])->name('post.list');
    Route::get('/tin-tuc/{alias}', [PostController::class, 'detail'])->name('post.detail');
    Route::get('/danh-muc-tin-tuc/{alias}', [PostController::class, 'category'])->name('post.category');
    Route::get('/tim-kiem-tin-tuc', [PostController::class, 'search'])->name('post.search');
    Route::get('/vision&mission', [HomeController::class, 'vision'])->name('vision&mission');
});

Route::get('/language/{locale}', [LocaleController::class, 'SetLocale'])->name('language');

Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
    Route::any('profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //User
    Route::resource('user', UserController::class);
    //Slide
    Route::resource('slide', SlideController::class);
    //Menu
    Route::resource('menu', MenuController::class);
    //Order
    Route::resource('order', OrderController::class);
    //Category
    Route::resource('category', CategoryController::class);
    //Catalogue
    Route::resource('catalogue', CatalogueController::class);
    //Attribute
    Route::resource('attribute', AttributeController::class);
    //Post
    Route::resource('post', AdminPostController::class);
    //Message
    Route::resource('message', MessageController::class);
    //Testimonial
    Route::resource('testimonial', TestimonialController::class);
    //Team 
    Route::resource('team', TeamController::class);
    //Attribute
    Route::resource('attribute', AttributeController::class);
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('', [AdminPostController::class, 'index'])->name('index');
        Route::post('store-post', [AdminPostController::class, 'store'])->name('store');
        Route::post('store-post-lang/{post}/{lang}', [AdminPostController::class, 'store'])->name('store-lang');
        Route::post('category', [AdminPostController::class, 'category'])->name('category');
        Route::get('create-post-lang/{post}/{lang}/{title}', [AdminPostController::class, 'create'])->name('lang');
    });
    //Product
    Route::resource('product', ProductController::class);
    Route::prefix('product')->name('product.')->group(function () {
        Route::post('category', [ProductController::class, 'category'])->name('category');
    });
    //Setting
    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('', [SettingController::class, 'index'])->name('index');
        Route::post('', [SettingController::class, 'update'])->name('update');
    });
});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
