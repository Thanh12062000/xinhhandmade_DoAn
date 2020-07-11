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





Route::get('admin/dangnhap',[
	'as' => 'list',
	'uses'=> 'adminlogin@getdangnhap'
]);
Route::post('admin/dangnhap',[
	'as' => 'list',
	'uses'=> 'adminlogin@postdangnhap'
]);


Route::group(['prefix'=>'admin'],function(){
	Route::get('/',[
		'as' => 'homeadmin',
		'uses'=> 'Admincontroller@getIndex'
	]);
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('list',[
			'as' => 'list',
			'uses'=> 'Admincontroller@getsanpham_list'
		]);

		Route::get('create',[
			'as' => 'create',
			'uses'=> 'Admincontroller@getsanpham_create'
		]);
		Route::post('create',[
			'as' => 'create',
			'uses'=> 'Admincontroller@postsanpham_create'
		]);

		Route::get('edit/{id}',[
			'as' => 'edit',
			'uses'=> 'Admincontroller@getsanpham_edit'
		]);
		Route::post('edit/{id}',[
			'as' => 'edit',
			'uses'=> 'Admincontroller@postsanpham_edit'
		]);

		Route::get('delete/{id}',[
			'as' => 'delete',
			'uses'=> 'Admincontroller@getsanpham_delete'
		]);

		
	});
	Route::group(['prefix'=>'loaisp'],function(){
		Route::get('list',[
			'as' => 'list',
			'uses'=> 'Admincontroller@getloai_list'
		]);

		Route::get('create',[
			'as' => 'create',
			'uses'=> 'Admincontroller@getloai_create'
		]);
		Route::post('create',[
			'as' => 'create',
			'uses'=> 'Admincontroller@postloai_create'
		]);

		Route::get('edit/{id}',[
			'as' => 'edit',
			'uses'=> 'Admincontroller@getloai_edit'
		]);
		Route::post('edit/{id}',[
			'as' => 'edit',
			'uses'=> 'Admincontroller@postloai_edit'
		]);

		Route::get('delete/{id}',[
			'as' => 'delete',
			'uses'=> 'Admincontroller@getloai_delete'
		]);




	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('list',[
			'as' => 'list',
			'uses'=> 'Admincontroller@getuser_list'
		]);

		Route::get('create',[
			'as' => 'create',
			'uses'=> 'Admincontroller@getuser_create'
		]);

		Route::get('edit',[
			'as' => 'edit',
			'uses'=> 'Admincontroller@getuser_edit'
		]);
	});
	Route::group(['prefix'=>'thongke'],function(){
		Route::get('ngay',[
			'as' => 'ngay',
			'uses'=> 'Admincontroller@getthongke_ngay'
		]);
		Route::post('ngay',[
			'as' => 'ngay',
			'uses'=> 'Admincontroller@postthongke_ngay'
		]);

		Route::get('thang',[
			'as' => 'thang',
			'uses'=> 'Admincontroller@getthongke_thang'
		]);

		Route::post('thang',[
			'as' => 'thang',
			'uses'=> 'Admincontroller@postthongke_thang'
		]);
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('nguoidung',[
			'as' => 'nguoidung',
			'uses'=> 'Admincontroller@getnguoidung'
		]);
		
		Route::get('admin',[
			'as' => 'admin',
			'uses'=> 'Admincontroller@getadmin'
		]);
	});
});
