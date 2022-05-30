<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\AdminLoginController;
use Illuminate\Support\Facades\Auth;

////////////

//user

use App\Http\Controllers\user\UserCategoryController;
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

Route::group(['prefix' => 'admin','middleware' => ['auth:admin']], function() {
        //admin
    Route::get('/', function(){
        return view('admin.dashboard');
    });
    // category
    Route::get('/category', [CategoryController::class, 'show']);
    Route::get('/add_category', [CategoryController::class, 'index']);
    Route::post('/table_add_category', [CategoryController::class, 'store']);
    Route::get('/edit_category/{id}', [CategoryController::class, 'edit_category']);
    Route::post('/update_category/{id}', [CategoryController::class, 'update_category']);
    Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category']);


    // product
    Route::get('/product', [ProductController::class, 'show']);
    Route::get('/add_product', [ProductController::class, 'index']);
    Route::post('/table_add_product', [ProductController::class, 'store']);
    Route::get('/edit_product/{id}', [ProductController::class, 'edit_product']);
    Route::post('/update_product/{id}', [ProductController::class, 'update_product']);
    Route::get('/delete_product/{id}', [ProductController::class, 'delete_product']);

    // slider

    Route::get('/slider', [SliderController::class, 'show']);
    Route::get('/add_slider', [SliderController::class, 'index']);
    Route::post('/table_add_slider', [SliderController::class, 'store']);
    Route::get('/edit_slider/{id}', [SliderController::class, 'edit_slider']);
    Route::post('/update_slider/{id}', [SliderController::class, 'update_slider']);
    Route::get('/delete_slider/{id}', [SliderController::class, 'delete_slider']);

    //coupon
    Route::get('/coupon', [CouponController::class, 'show']);
    Route::get('/add_coupon', [CouponController::class, 'index']);
    Route::post('/table_add_coupon', [CouponController::class, 'store']);
    Route::get('/edit_coupon/{id}', [CouponController::class, 'edit_coupon']);
    Route::post('/update_coupon/{id}', [CouponController::class, 'update_coupon']);
    Route::get('/delete_coupon/{id}', [CouponController::class, 'delete_coupon']);

    // orders
    Route::get('/orders', [OrderController::class, 'show']);
    Route::get('/view_products/{id}', [OrderController::class, 'view_products']);
    Route::post('/status/{id}', [OrderController::class, 'status']);

    //contact
    Route::get('/contact', [ContactController::class, 'show']);
    Route::get('/add_contact', [ContactController::class, 'index']);
    Route::post('/table_add_contact', [ContactController::class, 'store']);
    Route::get('/edit_contact/{id}', [ContactController::class, 'edit_contact']);
    Route::post('/update_contact/{id}', [ContactController::class, 'update_contact']);
    Route::get('/delete_contact/{id}', [ContactController::class, 'delete_contact']);
});

//////////////////////////////////

//user
Route::group(['prefix' => 'user','middleware' => ['auth']], function() {
    Route::get('/', [UserCategoryController::class, 'home']);
    Route::get('/shop/{cat_id}', [UserCategoryController::class, 'shop']);
    Route::get('/details/{id}', [UserCategoryController::class, 'details']);
    Route::get('/addToCart/{id}', [UserCategoryController::class, 'addToCart']);
    Route::get('/viewCart', [UserCategoryController::class, 'viewCart']);
    Route::get('/deleteChart/{id}', [UserCategoryController::class, 'deleteChart']);
    Route::get('/quantity_minus/{id}', [UserCategoryController::class, 'quantity_minus']);
    Route::get('/quantity_plus/{id}', [UserCategoryController::class, 'quantity_plus']);
    Route::post('/coupon', [UserCategoryController::class, 'coupon']);
    Route::post('/checkout', [UserCategoryController::class, 'checkout']);
    Route::post('/order', [UserCategoryController::class, 'order']);
    Route::get('/contact', [UserCategoryController::class, 'contact']);
    Route::post('/search_product', [UserCategoryController::class, 'search_product']);
    Route::get('/viewProucts', [UserCategoryController::class, 'viewProucts']);
    Route::get('/viewOrders', [UserCategoryController::class, 'viewOrders']);

    Route::get('/viewOrders', [UserCategoryController::class, 'viewOrders']);
    Route::get('/view_products/{id}', [UserCategoryController::class, 'view_products']);
    Route::post('/status/{id}', [UserCategoryController::class, 'status']);
});

//////////////////////////////////

//authentication

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/registerUser', [RegisterController::class, 'registerUser']);


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginUser', [LoginController::class, 'loginUser']);


Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/adminlogin', [AdminLoginController::class, 'loginPage'])->name('adminlogin');
Route::post('/adminlogin', [AdminLoginController::class, 'loginAdmin']);
