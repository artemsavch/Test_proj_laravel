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

Route::get('/', 'Test\IndexController@show')->name('index.show');


Route::get('/about/{id?}', 'Test\TemplateController@show')->name('template.show');

Route::get('/articles/', 'Test\SecondController@getArticles')->name('second.getArticles');

Route::get('/article/', 'Test\SecondController@getArticle')->name('second.getArticle')->middleware('mymiddle');

Route::post('/contact', 'Test\ContactController@store')->name('contact.store');

Route::get('/contact/{name?}', 'Test\ContactController@show')->name('contactGet.show')->middleware('auth');


// List pages
//Route::get('pages/add', 'Test\ThirdController@add');
//Route::resource('/pages', 'Test\ThirdController', ['except'=>['index', 'show']]);

Route::get('/pages', 'Test\PagesController@getIndex');



Route::get('/test', 'Test\TestController@index')->name('test.index');
Route::get('/test/test1', 'Test\TestController@indexNew1')->name('test1.indexNew1');
Route::get('/test/new', 'Test\TestController@indexNew')->name('test.indexNew');
Route::post('/test/new', 'Test\TestController@indexNewNew')->name('testTest.indexNew');





Route::group(['middleware' => ['web']], function () {
    Route::get('/login', 'Auth\MyAuthController@showLogin')->name('myauth.showlogin');
    Route::post('/login', 'Auth\MyAuthController@authenticate')->name('myauth.authenticate');
});




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//admin/edit/post

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {

    // admin/
    Route::get('/', 'Admin\AdminController@show')->name('admin.show');

    Route::get('/add/post', 'Admin\AdminPostController@show')->name('adminPost.show');
    Route::post('/add/post', 'Admin\AdminPostController@create')->name('adminPost.create');

    Route::get('/update/post/{id}', 'Admin\AdminUpdatePostController@show')->name('adminUpdatePost.show');
    Route::post('/update/post', 'Admin\AdminUpdatePostController@create')->name('adminUpdatePost.create');

});
