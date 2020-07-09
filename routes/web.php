<?php

use Illuminate\Support\Facades\Route;

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
Route::get('source/home-02',[
	'as' => 'trang chu',
	'uses'=> 'PageController@getIndex'
]);
Route::get('source/product',[
	'as' => 'san pham',
	'uses'=> 'PageController@getSanPham'
]);
Route::get('source/search',[
	'as' => 'search',
	'uses'=> 'PageController@getSearch'
]);
Route::get('source/chitietsp/{id}',[
	'as' => 'chitiet',
	'uses'=> 'PageController@getChitiet'
]);
Route::get('test',function(){
	return view('page.test');
} );
Route::post('postForm',[
	'as' => 'post',
	'uses'=> 'PageController@postform'
]);