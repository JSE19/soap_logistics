<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;


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

Route::get('/',[LandingPageController::class, 'index'])->name('/');
Route::post('/submit_order', [LandingPageController::class, 'submit_order'])->name('submit_order');

Auth::routes();
Route::middleware('authuser')->group(function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    

    //Route::get('/admin_dashboard',[AdminController::class, 'index'])->name('admin_dashboard');
    Route::get('/order_view',[AdminController::class, 'orders_view'])->name('order_view');
    Route::get('/complete_order/{id}',[AdminController::class,'complete_order'])->name('complete_order');

    //PRODUCT
    Route::get('/add_product_view',[AdminController::class, 'products_view'])->name('add_product_view');
    Route::get('/manage_product_view',[AdminController::class, 'manage_product_view'])->name('manage_product_view');
    Route::post('/add_a_product',[AdminController::class, 'add_a_product'])->name('add_a_product');
    Route::get('/edit_a_product_view/{id}',[AdminController::class, 'edit_a_product_view'])->name('edit_a_product_view');
    Route::post('/edit_a_product/{id}',[AdminController::class,'edit_a_product'])->name('edit_a_product');
    Route::get('/delete_a_product/{id}',[AdminController::class, 'delete_a_product'])->name('delete_a_product');

    
});
