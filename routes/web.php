<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('auth.login', ['guard' => 'web']);
});

Route::group(['prefix' => 'admin', 'middleware'=> ['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');

});




// Admin 
Route::middleware(['auth:sanctum,admin', 'verified'])->prefix('admin')->name('admin.')->group(function(){
    //dashboard page
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('home');
    
    //add product
    Route::get('/add_product', [AdminController::class, 'addProduct'])->name('addProduct');
    Route::post('/add_product_post', [AdminController::class, 'addProductPost'])->name('addProductPost');


});


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('userDashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/test', function () {
    return view('test');
});
