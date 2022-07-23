<?php

use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AgencieController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\newsletterController;
use App\Http\Controllers\Backend\OurClientController;
use App\Http\Controllers\Backend\OutFeaturesController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\BackEnd\ProductRequestController;
use App\Http\Controllers\Backend\QuoteController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SilderController;
use Illuminate\Support\Facades\Route;

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


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('setting', SettingController::class);

    Route::resource('aboutUs', AboutUsController::class);

    Route::resource('qutFeatures', OutFeaturesController::class);

    Route::resource('newsletter', newsletterController::class);

    Route::resource('quote', QuoteController::class);

    Route::resource('silder', SilderController::class);
    Route::post('slider_remove_image', [SilderController::class,'slider_remove_image'])->name('slider_remove_image');


    Route::resource('service', ServicesController::class);
    Route::post('service_remove_image', [ServicesController::class,'service_remove_image'])->name('service_remove_image');


    Route::resource('member', MemberController::class);
    Route::post('member_remove_image', [MemberController::class,'member_remove_image'])->name('member_remove_image');


    Route::resource('blog', BlogController::class);
    Route::post('blog_remove_image', [BlogController::class,'blog_remove_image'])->name('blog_remove_image');

    Route::resource('qurClient', OurClientController::class);
    Route::post('qurClient_remove_image', [OurClientController::class,'qurClient_remove_image'])->name('qurClient_remove_image');


    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('delete-contact{id}',[ContactController::class,'destroy'])->name('delete_contact');

    Route::resource('agencies', AgencieController::class);
    Route::post('agencies_remove_image', [AgencieController::class,'agencies_remove_image'])->name('agencies_remove_image');
    Route::post('agencies_photo_remove_image', [AgencieController::class,'agencies_photo_remove_image'])->name('agencies_photo_remove_image');


    Route::resource('product', ProductController::class);
    Route::post('product_remove_image', [ProductController::class,'product_remove_image'])->name('product_remove_image');
    Route::post('product_photo_remove_image', [ProductController::class,'product_photo_remove_image'])->name('product_photo_remove_image');


    Route::get('product_request',[ProductRequestController::class,'index'])->name('product_request_all');
    Route::post('deleted_product_request',[ProductRequestController::class,'deleted_product_request'])->name('deleted_product_request');

    Route::get('orders',[ProductRequestController::class,'all_order'])->name('all_order');


    Route::get('gallery',[GalleryController::class,'index'])->name('gallery');
    Route::get('add-gallery',[GalleryController::class,'create'])->name('add_gallery');
    Route::get('edit-gallery/{id}',[GalleryController::class,'edit'])->name('edit_gallery');
    Route::post('update-gallery/{id}',[GalleryController::class,'update'])->name('update_gallery');
    Route::post('store-gallery',[GalleryController::class,'store'])->name('store_gallery');
    Route::post('delete-gallery/{id}',[GalleryController::class,'destroy'])->name('delete_gallery');

});



