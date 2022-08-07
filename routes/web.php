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
use App\Http\Controllers\StaffLoginController;
use App\Http\Controllers\SalesReceiptController;
use App\Http\Controllers\SellController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/receipt', function () {
    return view('admin.sales-receipt');
});

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
//Products
Route::get('/addproduct',[ProductController::class,'index'])->name('admin.addproduct');
Route::post('/addproduct',[ProductController::class,'store']);
Route::get('editproduct/{id}',[ProductController::class,'edit']);
Route::get('/viewproducts',[ProductController::class,'show']);
Route::put('update-product/{id}',[ProductController::class,'update']);


//Sales
Route::get('/addsales',[SalesController::class,'index'])->name('admin.addsales');
Route::post('/addsales',[SalesController::class,'store']);
Route::get('/viewsales',[SalesController::class,'show']);
Route::get('editsales/{id}',[SalesController::class,'edit']);
Route::get('salesreceipt/{id}',[SalesReceiptController::class,'edit']);
Route::put('update-sales/{id}',[SalesController::class,'update']);


Route::get('/add_advert',[SellController::class,'index'])->name('admin.add_advert');
Route::post('/add_advert',[SellController::class,'store']);
Route::get('/viewadvert',[SellController::class,'show']);



//Customers
Route::get('/addcustomer',[CustomerController::class,'index'])->name('admin.addcustomer');
Route::get('/viewcustomers',[CustomerController::class,'show']); 
Route::post('/addcustomer',[CustomerController::class,'store']);
Route::get('editcustomer/{id}',[CustomerController::class,'edit']);
Route::put('update-customer/{id}',[CustomerController::class,'update']);
Route::get('delete-customer/{id}',[CustomerController::class,'destroy']);

Route::get('delete-products/{id}',[ProductController::class,'destroy']);
Route::get('delete-sales/{id}',[SalesController::class,'destroy']);






//Project
Route::get('/addproject',[ProjectController::class,'index'])->name('admin.addproject');
Route::post('/addproject',[ProjectController::class,'store'])->middleware('auth');
Route::get('/viewprojects',[ProjectController::class,'show'])->middleware('auth');
Route::get('editproject/{id}',[ProjectController::class,'edit'])->middleware('auth');
Route::get('projectdetails/{id}',[ProjectController::class,'details'])->middleware('auth');
Route::put('update-project/{id}',[ProjectController::class,'update'])->middleware('auth');


//Staff

Route::get('/addstaff',[StaffController::class,'index'])->name('admin.addstaff');
Route::post('/addstaff',[StaffController::class,'store']);
Route::get('/viewstaff',[StaffController::class,'show']);
Route::get('delete-staff/{id}',[StaffController::class,'destroy']);
Route::get('editstaff/{id}',[StaffController::class,'edit']);
Route::put('update-staff/{id}',[StaffController::class,'update']);

//show 

 
//Dashboard


});

Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard')->middleware('auth');
//Register
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

//Login
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

//Staff Login

Route::get('/staff_login',[StaffLoginController::class,'index'])->name('staff_login');
Route::post('/staff_login',[StaffLoginController::class,'store']);


//logout
Route::post('/logout',[LogoutController::class,'store'])->name('logout');













