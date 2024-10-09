<?php

use App\Http\Middleware\CheckUser;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CommentController;
use \App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\Admin\ImageController as ImageController;
use \App\Http\Controllers\Admin\FaqController as AdminFaqController;
use \App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\MessagesController as MessagesController;
use App\Http\Controllers\Admin\AdminUserController as AdminUserController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use \App\Http\Controllers\Admin\AdminProductController as AdminProductController;
use App\Http\Controllers\ShopCartController as ShopCartController;

// // 1-Write a message with route

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// // 2-Call view in the route

// Route::get('/sampleview', function () {
//     return view('welcome');
// });

// // 3-Call the controller function

// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
// *****************************USER ROUTES ********************************
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::get('/admin/loginadmin', [AdminHomeController::class, 'loginadmin'])->name('admin.loginadmin');
Route::post('admin/adminlogin', [AdminHomeController::class, 'adminlogin'])->name('admin.adminlogin');

//*******************************AUTH ROUTES ******************************/
//*******************************AUTH ROUTES ******************************/
//*******************************AUTH ROUTES ******************************/
//*******************************AUTH ROUTES ******************************/
//*******************************AUTH ROUTES ******************************/

Route::middleware('auth')->group(function(){

// *****************************USER ROUTES *******************************
// *****************************USER ROUTES *******************************
// *****************************USER ROUTES *******************************
// *****************************USER ROUTES *******************************
// *****************************USER ROUTES *******************************

Route::middleware(CheckUser::class.':user')->prefix('user')->name('user.')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/userprofileuptade', [UserController::class, 'userprofileuptade'])->name('userprofileuptade');
    Route::get('/reviews', [UserController::class, 'reviews'])->name('reviews');
    Route::get('/showreviews/{id}', [UserController::class, 'showreviews'])->name('showreviews');

    Route::prefix('/shopcart')->name('shopcart.')->controller(ShopCartController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/quantityup/{id}','quantityup')->name('quantityup');
        Route::get('/quantitydown/{id}','quantitydown')->name('quantitydown');
        Route::get('/show/{id}','show')->name('show');
    });
});
// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
// *****************************ADMIN ROUTES *******************************
Route::middleware(CheckAdmin::class.':admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    

    //*****************************GENERAL ROUTES *********************

    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting_update/{id}', [AdminHomeController::class, 'setting_update'])->name('setting_update');
    

    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    // *****************************ADMIN CATEGORY ROUTES *********************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    // *****************************ADMIN USER ROUTES *********************
    // *****************************ADMIN USER ROUTES *********************
    // *****************************ADMIN USER ROUTES *********************
    // *****************************ADMIN USER ROUTES *********************
    // *****************************ADMIN USER ROUTES *********************
    // *****************************ADMIN USER ROUTES *********************
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function(){
        Route::get('/','index')->name('index');        
        Route::get('/destroy/{uid}/{rid}','destroy')->name('destroy');
        Route::post('/addrole','addrole')->name('addrole');
        Route::get('/show/{id}','show')->name('show');
    });

    // ADMIN PRODUCT CONTROLLER ROUTES ****************************************
    // ADMIN PRODUCT CONTROLLER ROUTES ****************************************
    // ADMIN PRODUCT CONTROLLER ROUTES ****************************************
    // ADMIN PRODUCT CONTROLLER ROUTES ****************************************
    // ADMIN PRODUCT CONTROLLER ROUTES ****************************************

    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    // ADMIN FAQ CONTROLLER ROUTES ****************************************
    // ADMIN FAQ CONTROLLER ROUTES ****************************************
    // ADMIN FAQ CONTROLLER ROUTES ****************************************
    // ADMIN FAQ CONTROLLER ROUTES ****************************************
    // ADMIN FAQ CONTROLLER ROUTES ****************************************
    

    Route::prefix('/faq')->name('faq.')->controller(AdminFaqController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    // ADMIN MESSAGES CONTROLLER ROUTES ****************************************
    // ADMIN MESSAGES CONTROLLER ROUTES ****************************************
    // ADMIN MESSAGES CONTROLLER ROUTES ****************************************
    // ADMIN MESSAGES CONTROLLER ROUTES ****************************************
    

    Route::prefix('/messages')->name('messages.')->controller(MessagesController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
    });

    // ADMIN COMMENT CONTROLLER ROUTES ****************************************
    
    

    Route::prefix('/comments')->name('comments.')->controller(CommentController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
    });

    // ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER 
    // ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER 
    // ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER 
    // ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER 
    // ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER ADMIN GALLERY CONTROLLER 

    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function(){
        Route::post('/store/{id}', 'store')->name('store');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

});
});
// // 4- Route->Controller->View

// Route::get('/test', [HomeController::class, 'test'])->name('test');

// // 5-Route with parameter

// Route::get('/param/{id}/{id2}', [HomeController::class, 'param'])->name('param');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
