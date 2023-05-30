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
//     return view('welcome');
// });

Route::get('/', 'MainController@index');
Route::get('/all/room', 'MainController@AllRoom')->name('all.room');

Route::get('room/detail/{id}', 'MainController@RoomDetails')->name('room.detail');
Route::get('category/wish/{id}', 'MainController@CategoryWish')->name('category.wish');

Route::get('about/us', 'MainController@AboutUs')->name('about.us');
Route::get('contact/us', 'MainController@ContactUS')->name('contact.us');
Route::post('contact/store', 'MainController@contact_store')->name('contact.store');


Route::get('blog/list', 'MainController@BlogList')->name('blog.list');
Route::get('blog/wish/{id}', 'MainController@BlogWish')->name('blog.wish');






Route::post('room/book/{id}', 'CartController@AddCart')->name('room.book');



Route::get('/contact', 'MainController@contact')->name('contact');
Route::post('/contact/store', 'MainController@contact_store')->name('contact.store');

Route::get('add/booking/{id}','CartController@AddCart')->name('add.booking');
// Route::get('check/booking','CartController@check')->name('check.booking');

 Route::get('booking/list','CartController@BookingList')->name('booking.list');
 Route::get('view/booking/{id}','CartController@BookingView')->name('view.booking');

// Route::get('remove/cart/{rowId}','CartController@removeCart');
// Route::post('update/cart/item','CartController@UpdateCart')->name('update.cartitem');

// Route::get('booking/final/step','CartController@Final_Step')->name('booking.final.step');
// Route::post('booking/done','CheckOutController@BookingDone')->name('booking.done');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/home', 'Admin\AdminController@index');
Route::get('admin/logout', 'Admin\AdminController@logout')->name('admin.logout');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@Login');
Route::get('/admin/Change/Password','Admin\AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','Admin\AdminController@Update_pass')->name('admin.password.update'); 

//report route
Route::get('/report/list', 'Admin\ReportController@ReportList')->name('report.list');
Route::get('/report/single/{id}', 'Admin\ReportController@ReportSingle')->name('report.single');


//category route
Route::get('/add/category', 'Admin\CategoryController@add')->name('add.category');

Route::post('/store/category', 'Admin\CategoryController@store')->name('store.category');
Route::get('/all/category', 'Admin\CategoryController@index')->name('all.category');
Route::get('/edit/category/{id}', 'Admin\CategoryController@edit')->name('edit.category');
Route::post('/update/category/{id}', 'Admin\CategoryController@update')->name('update.category');
Route::get('/delete/category/{id}', 'Admin\CategoryController@delete')->name('delete.category');


//hotal route

Route::get('/add/hotal', 'Admin\HotalController@add')->name('add.hotal');
Route::post('/store/hotal', 'Admin\HotalController@store')->name('store.hotal');
Route::get('/all/hotal', 'Admin\HotalController@index')->name('all.hotal');
Route::get('/edit/hotal/{id}', 'Admin\HotalController@edit')->name('edit.hotal');
Route::post('/update/hotal/{id}', 'Admin\HotalController@update')->name('update.hotal');
Route::get('/delete/hotal/{id}', 'Admin\HotalController@delete')->name('delete.hotal');
Route::get('/delete/image/{id}', 'Admin\HotalController@ImageDelete')->name('image.delete');


//slider route
Route::get('/add/slider', 'Admin\SliderController@add')->name('add.slider');
Route::post('/store/slider', 'Admin\SliderController@store')->name('store.slider');
Route::get('/all/slider', 'Admin\SliderController@index')->name('all.slider');
Route::get('/edit/slider/{id}', 'Admin\SliderController@edit')->name('edit.slider');
Route::post('/update/slider/{id}', 'Admin\SliderController@update')->name('update.slider');
Route::get('/delete/slider/{id}', 'Admin\SliderController@delete')->name('delete.slider');


//social link
Route::get('/add/social', 'Admin\SocialController@add')->name('add.social');
Route::post('/store/social', 'Admin\SocialController@store')->name('store.social');
Route::get('/all/social', 'Admin\SocialController@index')->name('all.social');
Route::get('/edit/social/{id}', 'Admin\SocialController@edit')->name('edit.social');
Route::post('/update/social/{id}', 'Admin\SocialController@update')->name('update.social');
Route::get('/delete/social/{id}', 'Admin\SocialController@delete')->name('delete.social');











//logo route
Route::get('/add/logo', 'Admin\LogoController@add')->name('add.logo');
Route::post('/store/logo', 'Admin\LogoController@store')->name('store.logo');
Route::get('/all/logo', 'Admin\LogoController@index')->name('all.logo');
Route::get('/edit/logo/{id}', 'Admin\LogoController@edit')->name('edit.logo');
Route::post('/update/logo/{id}', 'Admin\LogoController@update')->name('update.logo');
Route::get('/delete/logo/{id}', 'Admin\LogoController@delete')->name('delete.logo');


//blog route
Route::get('/add/blog', 'Admin\BlogController@add')->name('add.blog');

Route::post('/store/blog', 'Admin\BlogController@store')->name('store.blog');
Route::get('/all/blog', 'Admin\BlogController@index')->name('all.blog');
Route::get('/edit/blog/{id}', 'Admin\BlogController@edit')->name('edit.blog');
Route::post('/update/blog/{id}', 'Admin\BlogController@update')->name('update.blog');
Route::get('/delete/blog/{id}', 'Admin\BlogController@delete')->name('delete.blog');


Route::get('/add/postcategory', 'Admin\PostCateController@add')->name('add.postcategory');

Route::post('/store/postcategory', 'Admin\PostCateController@store')->name('store.postcategory');
Route::get('/all/postcategory', 'Admin\PostCateController@index')->name('all.postcategory');
Route::get('/edit/postcategory/{id}', 'Admin\PostCateController@edit')->name('edit.postcategory');
Route::post('/update/postcategory/{id}', 'Admin\PostCateController@update')->name('update.postcategory');
Route::get('/delete/postcategory/{id}', 'Admin\PostCateController@delete')->name('delete.postcategory');

