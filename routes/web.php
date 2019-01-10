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

Route::get('/', 'HomeController@welcome');

// Route::get('/kost', function(){
// 	return view('kost.index');
// });

// Route::get('/kost/add', function(){
// 	return view('kost.add');
// });

Route::get('/kost/edit', function(){
	return view('kost.edit');
});

Route::prefix('kamar')->group(function()
{
	
});

Route::prefix('kost')->group(function()
{	
	
});

Route::prefix('saran')->group(function()
{
	
});

Route::prefix('penginap')->group(function()
{
	
});

Route::prefix('pesanan')->group(function()
{

});
Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin'] , function(){
	Route::group(['middleware' => 'admin'], function(){
		Route::get('/', 'AdminController@index');
		Route::get('/kamar/all', 'KamarController@all');
		Route::get('/datauser', 'AdminController@datauser');
		Route::get('/datauser/add', 'AdminController@adduser');
		Route::post('/datauser/save', 'AdminController@saveuser');
		Route::get('/datauser/edit/{id}','AdminController@edituser');
		Route::get('/datauser/update/{id}','AdminController@updateuser');
		Route::get('/datauser/delete/{id}','AdminController@deleteuser');
		Route::get('/kost/all', 'KostController@all');
	});
});

Route::group(['prefix' => 'user'] , function(){
	Route::group(['middleware' => 'user'], function(){
		Route::get('/', 'UserController@index');
		Route::get('/verifikasi', 'AdminController@verifikasi');
		Route::get('/penginap/all', 'PenginapController@all');
		Route::get('/pesanan/all', 'PesananController@all');
		Route::get('/saran/all', 'SaranController@all');

		
		Route::get('/add', 'KamarController@add');//KAMAR
		Route::post('/save', 'KamarController@save');
		Route::get('/all', 'KamarController@all');
		Route::post('/update', 'KamarController@update');
		Route::get('/edit/{id}', 'KamarController@edit');
		Route::get('/delete/{id}', 'KamarController@delete');//KAMAR

		Route::get('/add', 'KostController@add');//KOS
		Route::post('/save', 'KostController@save');
		Route::get('/all', 'KostController@all');
		Route::post('/update', 'KostController@update');
		Route::get('/edit/{id}', 'KostController@edit');
		Route::get('/delete/{id}', 'KostController@delete');//KOS

		Route::post('/save', 'PenginapController@save');//PENGINAP
		Route::get('/penginap/all', 'PenginapController@all');
		Route::post('/penginap/update', 'PenginapController@update');
		Route::get('/edit/{id}', 'PenginapController@edit');
		Route::get('/delete/{id}', 'PenginapController@delete');
		Route::get('/penginap/kos', 'PenginapController@all');
		Route::get('/penginap/saran', 'PenginapController@saran');
		Route::get('/penginap/profile', 'PenginapController@profile');
		Route::get('/penginap/kost', 'KostController@datakos');//PENGINAP

		Route::post('/save', 'PesananController@save');//PESANAN
		Route::get('/all', 'PesananController@all');
		Route::post('/update', 'PesananController@update');
		Route::get('/edit/{id}', 'PesananController@edit');
		Route::get('/delete/{id}', 'PesananController@delete');//PESANAN

	});
});