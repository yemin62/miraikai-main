<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiraikaiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WishlistController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/miraikai', [MiraikaiController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

// SC-08 欲しい物一覧
// Route::get('/wishlist', [WishlistController::class, 'index']);

// // SC-09 7日後の再確認

Route::post('/wishlist', [WishlistController::class,'store'])->name('wishlist.store');

Route::get('/wishlist', [WishlistController::class,'index'])->name('wishlist.index');

Route::get('/wishlist_review', [WishlistController::class, 'review']);

Route::resource('purchaseitems', PurchaseItemController::class);



// SC-10 購入登録
Route::get('/purchases_create', [PurchaseController::class, 'create']);


Route::resource('profile', UsersController::class);


