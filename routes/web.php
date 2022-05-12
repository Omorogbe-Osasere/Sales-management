<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EditCustomerController;
use Illuminate\Support\Facades\Auth;
use app\Models\Product;

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

Route::get('/edit2', function () {
    return view('index');
});

//Register
Route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('auth');
Route::post('/register',[RegisterController::class,'store'])->middleware('auth');

//Login
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

//logout
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

//Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard')->middleware('auth');

//Products
Route::get('/addproduct',[ProductController::class,'index'])->name('admin.addproduct')->middleware('auth');
Route::post('/addproduct',[ProductController::class,'store'])->middleware('auth');
Route::get('editproduct/{id}',[ProductController::class,'edit'])->middleware('auth');
Route::get('/viewproducts',[ProductController::class,'show']);
Route::put('update-product/{id}',[ProductController::class,'update'])->middleware('auth');


//Sales
Route::get('/addsales',[SalesController::class,'index'])->name('admin.addsales')->middleware('auth');
Route::post('/addsales',[SalesController::class,'store'])->middleware('auth');
Route::get('/viewsales',[SalesController::class,'show'])->middleware('auth');
Route::get('editsales/{id}',[SalesController::class,'edit'])->middleware('auth');
Route::put('update-sales/{id}',[SalesController::class,'update'])->middleware('auth');



//Customers
Route::get('/addcustomer',[CustomerController::class,'index'])->name('admin.addcustomer')->middleware('auth');
Route::get('/viewcustomers',[CustomerController::class,'show'])->middleware('auth'); 
Route::post('/addcustomer',[CustomerController::class,'store'])->middleware('auth');
Route::get('editcustomer/{id}',[CustomerController::class,'edit'])->middleware('auth');
Route::put('update-customer/{id}',[CustomerController::class,'update'])->middleware('auth');





//Project
Route::get('/addproject',[ProjectController::class,'index'])->name('admin.addproject')->middleware('auth');
Route::post('/addproject',[ProjectController::class,'store'])->middleware('auth');
Route::get('/viewprojects',[ProjectController::class,'show'])->middleware('auth');
Route::get('editproject/{id}',[ProjectController::class,'edit'])->middleware('auth');
Route::put('update-project/{id}',[ProjectController::class,'update'])->middleware('auth');



Route::get('/addstaff',[StaffController::class,'index'])->name('admin.addstaff')->middleware('auth');
Route::post('/addstaff',[StaffController::class,'store'])->middleware('auth');

//show 










Route::get('/viewstaff',[StaffController::class,'show'])->middleware('auth');


Route::get('/tasks', 'TaskController@exportCsv');







