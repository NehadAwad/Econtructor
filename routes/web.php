<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/', function () {
    return view('user.login', ['guard' => 'web']);
});

Route::group(['prefix' => 'admin', 'middleware'=> ['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');

});




// Admin 
Route::middleware(['auth:sanctum,admin', 'verified'])->prefix('admin')->name('admin.')->group(function(){
    //dashboard page
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('home');
    
    //product
    Route::get('/add_product', [AdminController::class, 'addProduct'])->name('addProduct');
    Route::post('/add_product_post', [AdminController::class, 'addProductPost'])->name('addProductPost');
    //all product
    Route::get('/all_product', [AdminController::class, 'allProduct'])->name('allProduct');
    //product edit
    Route::get('/edit_product/{slug}', [AdminController::class, 'editProduct'])->name('editProduct');
    Route::post('/edit_product_post/{slug}', [AdminController::class, 'editProductPost'])->name('editProductPost');

    //offer
    Route::get('/offer', [AdminController::class, 'offerIndex'])->name('offer');
    Route::post('/edit_offer_post', [AdminController::class, 'edit_offer_post'])->name('editOffer');



});


// User
Route::middleware(['auth:sanctum,web', 'verified'])->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
}); 

Route::middleware(['auth:sanctum,web', 'verified'])->get('/test', function () {
    return view('test');
});
