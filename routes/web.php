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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*
	Route untuk Pengunjung dan User yang mendaftar website
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home/thread/{judul}', 'HomeController@showArticle');

Route::get('/home/news/{judul}', 'HomeController@showNews');

Route::post('/thread/post', 'CRUDThread@postcomment')->name('postcommentThread');

Route::post('/berita/post', 'CRUDBerita@postcomment')->name('postcommentNews');

Route::get('/auth/confirmation_Token/{remember_token}', 'LoginUser@resetPassword');

Route::put('/auth/confirmation_Token/savenewpassword', 'LoginUser@submitnewpassword')->name('submitnewpassword');

// Lihat Website berdasarkan kategori

Route::get('/home/Trend', 'HomeController@showByTrend')->name('articlebytrend');
Route::get('/home/Economy', 'HomeController@showByEconomy')->name('articlebyeconomy');
Route::get('/home/Sport', 'HomeController@showBySport')->name('articlebysport');
Route::get('/home/Technology', 'HomeController@showByTechnology')->name('articlebytechnology');
Route::get('/home/International', 'HomeController@showByInternational')->name('articlebyinternational');
Route::get('/home/Otomotive', 'HomeController@showByOtomotive')->name('articlebyotomotive');
Route::get('/home/Health', 'HomeController@showByHealth')->name('articlebyhealth');
Route::get('/home/Travel', 'HomeController@showByTravel')->name('articlebytravel');
Route::get('/home/Entertainment', 'HomeController@showByEntertainment')->name('articlebyentertainment');
Route::get('/home/thread', 'HomeController@showThread')->name('showallthread');

Route::get('/home/findingthread/', 'HomeController@searchresult')->name('findthread');

/*
	Route untuk Editor dan Penulis
*/

// Login, Registrasi dan Forgot Password

Route::get('webkhusus/login','LoginUser@login')->name('loginkhusus');

Route::post('webkhusus/proseslogin', 'LoginUser@store')->name('cekloginkhusus');

Route::get('webkhusus/forgotpass','EditorialPanel@forgotpassword')->name('forgotpasswordkhusus');

Route::get('auth/logout','LoginUser@logoutAdmin')->name('logoutuntukAdmin');

// User Panel and Profile

Route::get('webkhusus/profile','EditorialPanel@profileaccount')->name('profileaccount');

Route::put('webkhusus/changeprofile', 'EditorialPanel@changeprofile')->name('changeprofileforadmin');

Route::get('webkhusus/homepanel','EditorialPanel@panelkhusus')->name('paneladmin');

/*
	Route untuk User
*/

// Profile

Route::get('userprofile', 'UserPanel@profileforuser')->name('userprofile');

Route::post('userprofile/submit', 'UserPanel@submitprofile')->name('changeprofileforuser');

// Login, Registrasi dan Forgot Password

Route::get('auth/logout/user', 'UserPanel@logoutUser')->name('logoutforuser');

Route::post('/ProsesLoginUser', 'UserPanel@loginuntukuser')->name('loginpunyauser');

Route::get('/forgotpassword', 'UserPanel@forgotpassword')->name('forgotuser');

Route::put('/auth/cekpassword', 'LoginUser@storeforgotpass')->name('storeforgotpass');

Route::get('/UserRegistration','UserPanel@registration')->name('registrationforuser');

Route::post('/UserRegistration/submit', 'UserPanel@submitregistration')->name('submitregistration');

// Thread

Route::get('threads', 'CRUDThread@threadData')->name('threaddatas');

Route::get('threads/newthread', 'CRUDThread@create')->name('createthread');

Route::post('threads/savethread', 'CRUDThread@storeThread')->name('storethread');

Route::get('threads/editthread/{judul}', 'CRUDThread@edit');

Route::put('threads/editthread/submit/{judul}', 'CRUDThread@update');

Route::get('threads/lookathread/{judul}', 'CRUDThread@show');

Route::get('threads/deletethread/{judul}', 'CRUDThread@deletethread');

Route::delete('threads/deletethread/accept/{judul}', 'CRUDThread@destroy');

Route::get('/threads/findingthreads/', 'CRUDThread@searchresult')->name('findthreadbyuser');

// Berita

Route::get('/webkhusus/berita','CRUDBerita@index')->name('databerita');

Route::get('/webkhusus/berita/beritaperAccount','CRUDBerita@indexbyid')->name('databeritabyid');

Route::get('/webkhusus/berita/beritaperAccount/{id}','CRUDBerita@indexonprocess')->name('newsdatabyid');

Route::get('/webkhusus/berita/show/{judul}','CRUDBerita@show');

Route::get('/webkhusus/berita/create','CRUDBerita@create')->name('makenews');

Route::post('/webkhusus/berita/savedata', 'CRUDBerita@store')->name('createnewdata');

Route::get('/webkhusus/berita/edit/{judul}', 'CRUDBerita@edit');

Route::put('/webkhusus/berita/update', 'CRUDBerita@update')->name('updatenews');

Route::get('/webkhusus/berita/approval/{judul}', 'CRUDBerita@approvalnews');

Route::put('/webkhusus/berita/approval/submit', 'CRUDBerita@submitapprovalnews')->name('approvenews');

Route::get('/webkhusus/berita/delete/{judul}', 'CRUDBerita@deletedata');

Route::delete('/webkhusus/berita/delete/accept', 'CRUDBerita@destroy')->name('deletenews');

// Publication of News

Route::get('/webkhusus/publication','CRUDPublikasi@index')->name('publicationdata');

Route::get('/webkhusus/publication/detail/{judul}','CRUDPublikasi@show');

Route::put('/webkhusus/publication/detail/{judul}/result', 'CRUDPublikasi@ResultSingleData');

Route::put('/webkhusus/publication/detail/{judul}/updatedata/result', 'CRUDPublikasi@update');

// Author Account

Route::get('/webkhusus/author', 'EditorialPanel@indexaccount')->name('authoddatabase');

Route::get('/webkhusus/author/create', 'EditorialPanel@create')->name('createnewauthor');

Route::post('/webkhusus/author/store', 'EditorialPanel@store')->name('savenewauthor');

Route::get('/webkhusus/author/lockaccount/{id}', 'EditorialPanel@lockaccount');

Route::put('/webkhusus/author/lockaccount/accept', 'EditorialPanel@update')->name('lockthisaccount');

Route::get('/webkhusus/author/delete/{id}', 'EditorialPanel@deleteaccount');

Route::delete('/webkhusus/author/delete/accept', 'EditorialPanel@deleteaccount')->name('deletethisaccount');

// Tes Email

Route::get('email', 'emailTutorial@draft')->name('draftemail');

Route::post('email/sending', 'emailTutorial@sendemail')->name('sendemail');
