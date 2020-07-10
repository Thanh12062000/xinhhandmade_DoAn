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

// Route::get('/', function () {
//     return view('page.trangchu');
// });
Route::get('/',[
	'as' => 'trang chu',
	'uses'=> 'PageController@getIndex'
]);
Route::get('home',[
	'as' => 'trang chu',
	'uses'=> 'PageController@getIndex'
]);
Route::get('product',[
	'as' => 'san pham',
	'uses'=> 'PageController@getSanPham'
]);

Route::get('search',[
	'as' => 'search',
	'uses'=> 'PageController@getSearch'
]);
Route::get('searchblog',[
	'as' => 'searchblog',
	'uses'=> 'PageController@getSearchblog'
]);
Route::get('blog',[
	'as' => 'blog',
	'uses'=> 'PageController@getBlog'
]);
Route::get('chitietsp/{id}',[
	'as' => 'chitiet',
	'uses'=> 'PageController@getChitiet'
]);
Route::get('chitietblog/{id}',[
	'as' => 'chitietblog',
	'uses'=> 'PageController@getChitietblog'
]);














Route::post('postForm',[
	'as' => 'post',
	'uses'=> 'PageController@postform'
]);
Route::get('filter',[
	'as' => 'filter',
	'uses'=> 'PageController@getFilster'
]);
