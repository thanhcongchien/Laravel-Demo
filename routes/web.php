<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hotelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



// Route::get('/tong', "Cong2soController@sum");
// */

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// // Route::get('/', "Cong2soController@sum");








// // Route::get('khoahoc', function(){
// //     return "Xin chao cac ban ";
// // });
// // Route::get('Mrdinh/khoahoc', function(){
// //     return "<h1>Xin chao cac ban</h1>";
// // });
// // Route::get('Hoten/{ten}', function($ten){
// //     return "<h1>Xin chao cac ban</h1>".$ten;
// // });
// // Route::get('tinhtong/{songuyen}', function($songuyen){
// //     return "<h1>2+</h1>"."<h1>".$songuyen."</h1>";
// // });
// // Route::get('Routes1',[
// //     'as'=>'MyRoutes',
// //     function(){
// //         return 'Xin chao cac ban';
// //     }]);
// // Route:: group(['prefix'=> 'MyGroup'],function(){
// //     Route::get('User1',function(){
// //         echo "hi1";
// //     });
// //     Route::get('User2',function(){
// //         echo "hi2";
// //     });
// //     Route::get('User3',function(){
// //         echo "hi3";
// //     });
// Route::get('sum', "Cong2soController@sum");
// Route::post('sum', "Cong2soController@sum");

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
});

// Route::get('/admin/hotel', "App\Http\Controllers\Admin\HotelController@hotel");
// Route::resource('products', ProductController::class);
// Route::get('/admin/news', 'Admin\AdminNewsController@index');

Route::get('master', function () {
    return view('master');
});
Route::get('product-type', "App\Http\Controllers\PageController@getProductType");
Route::get('hotel', "App\Http\Controllers\HotelController@getHotel");
// Route::get('product-detail', "App\Http\Controllers\PageController@getProductDetail");
// Route::resource('categories', "pp\Http\Controllers\TableController");

// Route::get('signup', "App\Http\Controllers\signupController@index");
// Route::post('signup', "App\Http\Controllers\signupController@displayInfor");
// Route::post('postFile',  ['as'=>'postFile', 'uses'=>'UploadFileController@postFile']);