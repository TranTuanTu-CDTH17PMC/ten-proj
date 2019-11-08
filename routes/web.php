<?php

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
Route::get('/', function(){
	return view('dangnhap');
	});


// CONTROLLER LĨNH VỰC
Route::get('/linh-vuc','LinhVucController@index')->name('linh-vuc.ds-linh-vuc');


Route::get('/them-moi-linh-vuc','LinhVucController@create')->name('linh-vuc.xl-them-moi-linh-vuc');
Route::post('/them-moi-linh-vuc','LinhVucController@store')->name('linh-vuc.them-moi-linh-vuc');

Route::get('/linh-vuc/cap-nhat-linh-vuc/{id}','LinhVucController@edit')->name('linh-vuc.xl-cap-nhat-linh-vuc');
Route::post('/linh-vuc/cap-nhat-linh-vuc/{id}','LinhVucController@update')->name('linh-vuc.cap-nhat-linh-vuc');


Route::get('/linh-vuc/xoa-linh-vuc/{id}','LinhVucController@destroy')->name('linh-vuc.xoa-linh-vuc');


Route::get('/linh-vuc/thung-rac-linh-vuc','LinhVucController@thungrac')->name('linh-vuc.thung-rac');

Route::get('/linh-vuc/phuc-hoi-linh-vuc/{id}','LinhVucController@phuchoi')->name('linh-vuc.phuc-hoi-linh-vuc');



//CONTROLLER CÂU HỎIr
Route::get('/cau-hoi','CauHoiController@index')->name('cau-hoi.ds-cau-hoi');



Route::get('/cau-hoi/them-moi-cau-hoi','CauHoiController@create')->name('cau-hoi.xl-them-moi-cau-hoi');
Route::post('cau-hoi/them-moi-cau-hoi','CauHoiController@store')->name('cau-hoi.them-moi-cau-hoi');

Route::get('/cau-hoi/cap-nhat-cau-hoi/{id}','CauHoiController@edit')->name('cau-hoi.xl-cap-nhat-cau-hoi');
Route::post('/cau-hoi/cap-nhat-cau-hoi/{id}','CauHoiController@update')->name('cau-hoi.cap-nhat-cau-hoi');


Route::get('/cau-hoi/xoa-cau-hoi/{id}','CauHoiController@destroy')->name('cau-hoi.xoa-cau-hoi');


Route::get('/cau-hoi/thung-rac-cau-hoi','CauHoiController@thungrac')->name('cau-hoi.thung-rac');

Route::get('/cau-hoi/phuc-hoi-cau-hoi/{id}','CauHoiController@phuchoi')->name('cau-hoi.phuc-hoi-cau-hoi');



Route::get('/tai-khoan','TaiKhoanController@index')->name('tai-khoan.ds-tai-khoan');

Route::get('/tai-khoan/them-moi-tai-khoan','TaiKhoanController@create')->name('tai-khoan.xl-them-moi-tai-khoan');
Route::post('tai-khoan/them-moi-tai-khoan','TaiKhoanController@store')->name('tai-khoan.them-moi-tai-khoan');

Route::get('/tai-khoan/cap-nhat-tai-khoan/{id}','TaiKhoanController@edit')->name('tai-khoan.xl-cap-nhat-tai-khoan');
Route::post('/tai-khoan/cap-nhat-tai-khoan/{id}','TaiKhoanController@update')->name('tai-khoan.cap-nhat-tai-khoan');


Route::get('/tai-khoan/xoa-tai-khoan/{id}','TaiKhoanController@destroy')->name('tai-khoan.xoa-tai-khoan');


Route::get('/tai-khoan/thung-rac-tai-khoan','TaiKhoanController@thungrac')->name('tai-khoan.thung-rac');

Route::get('/tai-khoan/phuc-hoi-tai-khoan/{id}','TaiKhoanController@phuchoi')->name('tai-khoan.phuc-hoi-tai-khoan');
Route::get('/tai-khoan/kiem-tra-tai-khoan/{id}','TaiKhoanController@KTtai_khoan')->name('tai-khoan.KT-tai-khoan');