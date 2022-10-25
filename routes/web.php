<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\http\Controllers\LoginCheckoutController;
use App\http\Controllers\CheckoutController;
use App\http\Controllers\LoginEmployeeDashboardController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::prefix('nhan-vien')->group(function (){
    //CRUD nhan vien
    /*
     * Create=>Them
     * Read=>danh sach
     * Update=>cap nhat
     * Delete/Destroy=>Xoa
     * */
    //Them % vao du an cua tung nhan vien
});
Route::prefix('du-an')->group(function (){
    //CRUD du an
    //them nhan vien vao du an
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout',[LogoutController::class, 'index'])->name('logout');
Route::resource('/employee', EmployeeController::class);
Route::resource('/project', ProjectController::class);
Route::get('/login/checkout', [LoginCheckoutController::class, 'index'])->name('login/checkout');
Route::get('/checkout/tablet', [CheckoutController::class, 'index'])->name('checkout/tablet');
Route::get('/login/employee_dashboard', [LoginEmployeeDashboardController::class, 'index'])->name('login/employee_dashboard');

Route::middleware("checkout")->group(function () {

    Route::get('', [LoginCheckoutController::class, 'index'])->name('login/checkout');
    Route::post('', [LoginCheckoutController::class, 'login/checkout'])->name('login/checkoutPost');
});
//Route::middleware("checklogin")->group(function () {
//    Route::get("logout",[LoginCheckoutController::class,'logout'])->name('logout');
//    Route::prefix('')->group(function () {
//        Route::get("checkout/tablet", function () {
//            return view('home');
//        })->name('home');
//    });
//});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
