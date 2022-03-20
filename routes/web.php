<?php
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
Route::get('/register', function () {
    return view('/register');
});

Route::get('/carts',[App\Http\Controllers\userController::class,'sh_cart']);

Route::get('/',[App\Http\Controllers\userController::class,'index']);

Route::get('/product_sh/{id}',[App\Http\Controllers\userController::class,'S_product'])->name('show.product');

Route::get('/insert',function(){
    return view('insert_product_d');
});

Route::get('/cart',function(){
 return view('cart');
});

Route::get('/edit_profile',function(){
   return view('ed_profile_us');
});

Route::post('/remove_p_f_the_cart',[App\Http\Controllers\userController::class,'r_product_f_cart']);

Route::post('/up_pri_cart',[App\Http\Controllers\userController::class,'cart_price_up'])->name('up_price.product');

Route::post('/update_d_us',[App\Http\Controllers\userController::class,'update_d']);

Route::post('/Add_Cart',[App\Http\Controllers\userController::class,'add_cart'])->name('add.cart');

Route::get('/Logout',[App\Http\Controllers\userController::class,'logout']);

Route::post('/insert',[App\Http\Controllers\userController::class,'insert'])->name('insert.data');

Route::post('/ch_l',[App\Http\Controllers\userController::class,'check_login'])->name('check.data');

Route::post('/insert_d_product',[App\Http\Controllers\userController::class,'insert_pro'])->name('insert_product.data');