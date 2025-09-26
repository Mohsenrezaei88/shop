<?php

use App\Http\Controllers\addressController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\apiController;
use App\Http\Controllers\authController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\attributeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\supportController;
use App\Http\Controllers\WriterController;
use App\Models\cart;
use App\Models\category;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\type;

Route::get('/', [authController::class, "index"])->name('index');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'checkRegister'])->name('register.post');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'checklogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('makeCode', [authController::class, 'makeCode'])->name('make-code');
Route::get('vLogin', [authController::class, 'vLogin'])->name('vLogin');
Route::post('vLogin', [authController::class, 'checkvLogin'])->name('vLogin.post');
Route::group(['prefix' => 'admin'], function () {
    Route::get('panel', [adminController::class, 'index'])->name('admin.panel')->middleware('auth');
    Route::get('addProduct', [adminController::class, "add_product"])->name("add_product")->middleware("auth");
    Route::post('addProduct', [adminController::class, "checkAdd_product"])->name("add_product.post")->middleware("auth");
    Route::get('{product}/addAttributes', [adminController::class, "add_attributes"])->name("add_attributes")->middleware("auth");
    Route::post('addAttributes', [adminController::class, "checkAdd_attributes"])->name("add_attributes.post")->middleware("auth");
});
Route::group(['prefix' => 'product'], function () {
    Route::get('{product}/details', [productController::class, "details"])->name('productDetails');
    Route::get('{product}/delete', [productController::class, "delete"])->name('productDelete');
    Route::get('{product}/edit', [productController::class, 'edit'])->name('productEdit');
    Route::post('{product}/edit', [productController::class, 'checkEdit'])->name('productEdit.post');
    Route::get('list', [productController::class, "productsList"])->name('producsList');
    Route::get('list/get_data', [productController::class, "productsList_get"])->name('producsList.post');
});
Route::group(['prefix' => 'category'], function () {
    Route::get('add', [categoryController::class, 'add'])->name('add_category');
    Route::post('add', [categoryController::class, 'checkAdd'])->name('add_category.post');
    Route::get('list', [categoryController::class, 'list'])->name('categories_list');
    Route::get('list/get_data', [categoryController::class, 'list_get'])->name('categories_list.post');
    Route::get('{category}/edit', [categoryController::class, 'edit'])->name('edit_category');
    Route::post('{category}/edit', [categoryController::class, 'checkEdit'])->name('edit_category.post');
    Route::get('{category}/delete', [categoryController::class, 'delete'])->name('delete_category');
});
Route::group(['prefix' => 'cart'], function () {
    Route::post('{product}/add', [cartController::class, "add"])->name('add_cart')->middleware('auth');
    Route::get('', [cartController::class, 'index'])->name('cart')->middleware('auth');
    Route::get('{cart}/delete', [cartController::class, 'delete'])->name('cart_delete')->middleware('auth');
    Route::get('{cart}/add_number', [cartController::class, "add_number"])->name('add_number')->middleware('auth');
    Route::get('{cart}/des_number', [cartController::class, "des_number"])->name('des_number')->middleware('auth');
});
Route::group(['prefix' => 'checkout'], function () {
    Route::get('', [orderController::class, "index"])->name("checkout")->middleware("auth");
    Route::post('pay', [orderController::class, "pay"])->name('pay');
    Route::get('cancel', [orderController::class, "cancel"])->name('cancel');
    Route::get('compelete', [orderController::class, "compelete"])->name('compelete');
});
Route::group(["prefix" => "address"], function () {
    Route::post("add", [addressController::class, "add"])->name('add_address');
    Route::post("{address}/edit", [addressController::class, "edit"])->name('edit_address');
    Route::post("{address}/delete", [addressController::class, "delete"])->name('delete_address');
    Route::get("list", [addressController::class, "list"])->name('address_list');
});
Route::group(['prefix' => 'orders'], function () {
    Route::get('', [orderController::class, "list"])->name('orders_list')->middleware('auth');
    Route::get('{order}/details', [orderController::class, "details"])->name('order_details')->middleware('auth');
    Route::get('adminlist', [orderController::class, "listAdmin"])->name('orders_list_admin')->middleware('auth');
    Route::get('list/getdata', [orderController::class, "list_get"])->name('orders_list.post')->middleware('auth');
    Route::post('{order}/change-status', [orderController::class, "changeStatus"])->name('change_status')->middleware('auth');
});
Route::group(['prefix' => 'brand'], function () {
    Route::get('add', [brandController::class, "add"])->name('add_brand');
    Route::post('add', [brandController::class, "checkAdd"])->name('add_brand.post');
    Route::get('list', [brandController::class, "list"])->name('brands_list');
    Route::get('list/getdata', [brandController::class, "list_get"])->name('brands_list.post');
    Route::get('{brand}/edit', [brandController::class, "edit"])->name('edit_brand');
    Route::post('{brand}/edit', [brandController::class, "checkedit"])->name('edit_brand.post');
    Route::get('{brand}/delete', [brandController::class, "delete"])->name('delete_brand');
});
Route::group(['prefix' => 'attributes'], function () {
    Route::get('{product}/edit', [attributeController::class, "edit"])->name('edit_attr');
    Route::post('edit', [attributeController::class, "checkEdit"])->name('edit_attr.post');
    Route::post('{product}/edit', [attributeController::class, "saveEdit"])->name('save_edit_attr.post');
    // Route::post('{product}/edit', [attributeController::class,"checkEdit"])->name('edit_attr.post');
});
Route::group(['prefix' => 'users'], function () {
    Route::get('list', [authController::class, "users_list"])->name('users_list');
    Route::get('list/get_data', [authController::class, "users_list_get"])->name('users_list.post');
    Route::post('{user}/change_role', [authController::class, "change_role"])->name('change_role');
    Route::get('{user}/delete', [authController::class, "delete_user"])->name('delete_user');
});
route::group(['prefix' => 'posts'], function () {
    Route::get('', [PostController::class, 'index'])->name('posts');
    Route::get('add', [PostController::class, 'add'])->name('add_post');
    Route::post('add', [PostController::class, 'checkAdd'])->name('add_post.post');
    Route::get('list', [PostController::class, 'list'])->name('posts_list');
    Route::get('list/getdata', [PostController::class, 'list_get'])->name('posts_list.post');
    Route::get('{post}/details', [PostController::class, "details"])->name('post_details');
    Route::get('{post}/edit', [PostController::class, "edit"])->name('edit_post');
    Route::post('{post}/edit', [PostController::class, "checkEdit"])->name('edit_post.post');
    Route::get('{post}/delete', [PostController::class, "delete"])->name('delete_post');
});
route::group(['prefix' => 'notifications'], function () {
    Route::get('{notification}/read', [NotificationController::class, "read"])->name('read_notif');
});
route::group(['prefix' => 'images'], function () {
    Route::post('save', [ImageController::class, "save"])->name('save_images');
    Route::post('delete', [ImageController::class, "delete"])->name('delete_image');
});
Route::post('total_price', [apiController::class, "total_price"])->name("total_price");
Route::post('getaddress', [apiController::class, "get_address"])->name("get_address");
Route::prefix('support')->group(function () {
    Route::post("", [supportController::class, "index"])->name("support_index");
});
Route::group(['prefix' => 'writer'], function () {
    route::get('panel' , [WriterController::class , "index"])->name('writer_panel');
});
//Route::get("test", function () {
//    dd(\Morilog\Jalali\Jalalian::now()->format('m/d'));
//});
// });
// Route::post("test-upload", function (Request $request) {
//     dd($request->all());
// })->name('test.post');
