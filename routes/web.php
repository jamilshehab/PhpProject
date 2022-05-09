<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/login',function(){
    return view('pages.login');
});
//to logout we use forget method to forget the user or to erase the user information
Route::get('/logout',function(){
    Session::forget('user');
    return redirect('/login');
});
 
Route::get('/',[ProductController::class,'index']); 
Route::get('details/{id}',[ProductController::class,'detail']); 
Route::get('/search',[ProductController::class,'search']); 
Route::match(array('GET','POST'),'/add_to_cart',[ProductController::class,'addToCart']); 
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::match(array('GET','POST'),'orderplace',[ProductController::class,'orderPlace']); 
Route::get('myorders',[ProductController::class,'myOrders']);
Route::view('/register','pages.register');
Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
 