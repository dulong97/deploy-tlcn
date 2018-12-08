<?php

//-----------------------------------------------------------------------
//-------------------------------ADMIN-----------------------------------
//-----------------------------------------------------------------------

Route::get('user','PageController@index');
Route::get('user/create','PageController@create');
Route::post('user/create','PageController@store');
Route::get('user/update/{id}','PageController@edit');
Route::post('user/update/{id}','PageController@update');
Route::delete('user/delete/{id}','PageController@delete');

Route::get('quanan','quanAnController@index');
Route::get('quanan/create','quanAnController@create');
Route::post('quanan/create','quanAnController@store');
Route::get('quanan/update/{id}','quanAnController@edit');
Route::post('quanan/update/{id}','quanAnController@update');
Route::delete('quanan/delete/{id}','quanAnController@delete');

Route::get('monan/{id}', ['as'=>'monan',
     'uses'=>'monAnController@index']);
Route::get('monan','monAnController@index1');
Route::get('monan/create','monAnController@create');
Route::post('monan/create','monAnController@store');
Route::get('monan/update/{id}','monAnController@edit');
Route::post('monan/update/{id}','monAnController@update');
Route::delete('monan/delete/{id}','monAnController@delete');


Route::get('address/{id}',[
    'as'=>'address',
    'uses'=>'AddressController@index'
]);
//Route::get('address/{id}','AddressController@index');
Route::get('address','AddressController@index_all');
Route::get('address/create','AddressController@create');
Route::post('address/create','AddressController@store');
Route::get('address/update/{id}','AddressController@edit');
Route::post('address/update/{id}','AddressController@update');
Route::delete('address/delete/{id}','AddressController@delete');

//Chưa sửa
Route::get('comment/{id}','CommentController@index');
Route::get('comment/create/{id}','CommentController@create');
Route::post('comment/create','CommentController@store');
Route::get('comment/update/{id}','CommentController@edit');
Route::post('comment/update/{id}','CommentController@update');
Route::delete('comment/delete/{id}','CommentController@delete');

Route::get('comment-ma/{id}','Comment_maController@index');
Route::get('comment-ma/create/{id}','Comment_maController@create');
Route::post('comment-ma/create','Comment_maController@store');
Route::get('comment-ma/update/{id}','Comment_maController@edit');
Route::post('comment-ma/update/{id}','Comment_maController@update');
Route::delete('comment-ma/delete/{id}','Comment_maController@delete');

//-----------------------------------------------------------------------
//-------------------------------USER-----------------------------------
//-----------------------------------------------------------------------

Route::get('home', 'U_homepageController@gettrangchu');
Route::get('', 'U_homepageController@gettrangchu');
// Route::get('', function(){
//     return view('admin.home.index');
// });
// Route::get('', function(){
//     return view('welcome');
// });

Route::get('timkiem', 'U_homepageController@getTimkiem');
Route::get('lienhe', 'U_homepageController@lienhe');
Route::get('quananid/{id}', 'U_homepageController@quanan');


Route::get('/getdistrict',[
    'as'=>'getdistrict',
    'uses'=>'U_homepageController@getdistrict'
]);
Route::get('/getstreet',[
    'as'=>'getstreet',
    'uses'=>'U_homepageController@getstreet'
]);
Route::get('/getward',[
    'as'=>'getward',
    'uses'=>'U_homepageController@getward'
]);
Route::post('/timkiem',[
    'as'=>'postTimkiem',
    'uses'=>'U_homepageController@postTimkiem']);

Route::get('map', 'U_homepageController@map');

Route::post('quanan/add','U_homepageController@addQuanan');
Route::post('quanan/add-address','U_homepageController@addQuananAddress');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Setup model nữa
Auth::routes(['verify' => true]);
// Route::get('/', function () {
//     return view('auth.login');
// })->middleware('verified');