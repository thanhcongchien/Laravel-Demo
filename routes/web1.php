<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/test', '\App\Http\Controllers\TestController@index');

Route::get('tinhtong', function(){
    return view('sum');
});

Route::post('tinhtong',"\App\Http\Controllers\SumController@tinhtong");

Route::get('/area', '\App\Http\Controllers\AreaController@Area');
Route::post('/area', '\App\Http\Controllers\AreaController@Area');

// Route::get('/form', '\App\Http\Controllers\FormController@Input_Form');
// Route::post('/form','\App\Http\Controllers\FormController@Input_Form');

Route::get('get-form', function(){
    return view('Validation_Form');
});
// Route::get('get-form',[\App\Http\Controllers\FormController::class],'Input_Form');
Route::post('handle-form','\App\Http\Controllers\FormController@displayInfo');



// Route::prefix('form-validation')->group(function () {
//     Route::get('/','App\Http\Controllers\FormValidationController@index')->name('formpost.index');
//     Route::post('/form','App\Http\Controllers\FormValidationController@store')->name('formpost.store');
// });

Route::get('master', function () {
    return view('master');
});

Route::get('Validation_Form', "signupController@index");
Route::post('Validation_Form', "signupController@displayInfor");