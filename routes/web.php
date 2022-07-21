<?php

use App\Http\Controllers\Backend\RequestProductController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FranchiseController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

require __DIR__.'/auth.php';

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('about',[AboutController::class,'index'])->name('user_about');
    Route::get('service',[ServiceController::class,'index'])->name('user_service');
    Route::get('contact',[ContactController::class,'index'])->name('user_contact');
    Route::get('franchise/{id}',[FranchiseController::class,'show'])->name('user_franchise');

    Route::get('product_all',[ProductController::class,'index'])->name('product_all');
    Route::get('product/{id}',[ProductController::class,'show'])->name('productDelis');

    Route::get('blog_all',[BlogController::class,'index'])->name('blog_all');

    Route::get('blog/{id}',[BlogController::class,'show'])->name('blogDelis');
    
    Route::get('services/{id}',[BlogController::class,'servicesDelis'])->name('servicesDelis');

    Route::resource('request_product',RequestProductController::class);
    Route::post('store-contact',[ContactController::class,'store'])->name('store_contact');

    Route::get('gallery',[GalleryController::class,'index'])->name('user_gallery');
});


// Route::resource()





