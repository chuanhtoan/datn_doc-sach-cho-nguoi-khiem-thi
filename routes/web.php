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

// Frontend
Route::get('/','PageController@index');
Route::get('novel/{novelID}','PageController@show');
Route::get('novel/{novelID}/{chapterNum}','PageController@read');
Route::get('/about','PageController@about');

// Comment
Route::post('/comment','PageController@createComment');

// Search
Route::get('category/{categoryID}','PageController@categorySearch');
Route::get('search','PageController@search');

// Follow
Route::get('/follow','PageController@follow');
Route::get('follow/{novelID}','PageController@followNovel');
Route::get('unfollow/{novelID}','PageController@unfollow');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Show Register Page & Login Page
Route::get('/login', 'LoginController@show')->name('login')->middleware('guest');
Route::get('/signup', 'RegistrationController@show')
    ->name('register')
    ->middleware('guest');

// Register & Login User
Route::post('/login', 'LoginController@authenticate');
Route::post('/signup', 'RegistrationController@register');

// Protected Routes - allows only logged in users
Route::middleware('auth')->group(function () {
    // Write
    Route::get('write/{novelID}/{chapterNum}','PageController@write');
    Route::post('write/','PageController@store');

    // Logout
    Route::get('/logout', 'LoginController@logout');
    Route::post('/logout', 'LoginController@logout');
});

//Backend

// Login
Route::get('admin/login', 'LoginAdminController@show')->name('login')->middleware('guest');
Route::post('admin/login', 'LoginAdminController@authenticate');

// Protected Routes - allows only logged in users
Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    // Logout
    Route::get('logout', 'LoginAdminController@logout');
    Route::post('logout', 'LoginAdminController@logout');

    Route::get('/', function () {
        return redirect('admin/novel');
    });

    Route::get('novel', 'NovelController@index');

    //Quan ly the loai
    Route::group(['prefix' => 'category'], function () {
        //Display Index Page
        Route::get('/', 'CategoryController@index')->name('category.index');
        // Populate Data in Edit Modal Form
        Route::get('/{item_id?}', 'CategoryController@show');
        // //create New Product
        Route::post('/', 'CategoryController@store');
        // // update Existing Product
        Route::put('/{item_id}', 'CategoryController@update');
        // // delete product
        Route::delete('/{item_id}', 'CategoryController@destroy');
    });

    //Quan ly binh luan
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'CommentController@index')->name('comment.index');
        Route::get('/novel/{item_id?}', 'CommentController@novel');
        Route::get('/{item_id?}', 'CommentController@show');
        Route::delete('/{item_id}', 'CommentController@destroy');
    });

    //Quan ly tai khoan
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('/{item_id?}', 'UserController@show');
        Route::post('/', 'UserController@store');
        Route::put('/{item_id}', 'UserController@update');
        Route::delete('/{item_id}', 'UserController@destroy');
    });

    //Quan ly tiêu đề khác
    Route::group(['prefix' => 'anothertitle'], function () {
        Route::get('/', 'AnotherTitleController@index');
        Route::get('/{item_id?}', 'AnotherTitleController@show');
        Route::get('/novel/{item_id?}', 'AnotherTitleController@novel');
        Route::post('/', 'AnotherTitleController@store');
        Route::put('/{item_id}', 'AnotherTitleController@update');
        Route::delete('/{item_id}', 'AnotherTitleController@destroy');
    });

    //Quan ly chương
    Route::group(['prefix' => 'chapter'], function () {
        Route::get('/', 'ChapterController@index');
        Route::get('/{item_id?}', 'ChapterController@show');
        Route::get('/novel/{item_id?}', 'ChapterController@novel');
        Route::post('/', 'ChapterController@store');
        Route::put('/{item_id}', 'ChapterController@update');
        Route::delete('/{item_id}', 'ChapterController@destroy');
    });

    // //Quan ly the loai
    // Route::group(['prefix' => 'theloai'], function () {
    //     Route::get('/','TheLoaiController@index')->name('theloai.index'); //Display Index Page
    //     Route::get('/{theloai_id?}','TheLoaiController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','TheLoaiController@store'); //create New Product
    //     Route::put('/{theloai_id}','TheLoaiController@update'); // update Existing Product
    //     Route::delete('/{theloai_id}','TheLoaiController@destroy'); // delete product
    // });

    // //Quan ly phim
    // Route::group(['prefix' => 'phim'], function () {
    //     Route::get('/','PhimController@index')->name('phim.index'); //Display Index Page
    //     Route::get('/{phim_id?}','PhimController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','PhimController@store'); //create New Product
    //     Route::put('/{phim_id}','PhimController@update'); // update Existing Product
    //     Route::delete('/{phim_id}','PhimController@destroy'); // delete product
    // });

    // //Quan ly nhan vat
    // Route::group(['prefix' => 'nhanvat'], function () {
    //     Route::get('/','NhanVatController@index')->name('nhanvat.index'); //Display Index Page
    //     Route::get('/{nhanvat_id?}','NhanVatController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','NhanVatController@store')->name('nhanvat.store'); //create New Product
    //     Route::put('/{nhanvat_id}','NhanVatController@update')->name('nhanvat.update'); // update Existing Product
    //     Route::delete('/{nhanvat_id}','NhanVatController@destroy'); // delete product
    // });

    // //Quan ly danh gia
    // Route::group(['prefix' => 'danhgia'], function () {
    //     Route::get('/','DanhGiaController@index')->name('danhgia.index'); //Display Index Page
    //     Route::get('/create','DanhGiaController@create')->name('danhgia.create'); //Display Index Page
    //     Route::get('/{danhgia_id}/edit','DanhGiaController@edit')->name('danhgia.edit'); //Display Index Page
    //     Route::get('/{danhgia_id?}','DanhGiaController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','DanhGiaController@store')->name('danhgia.store'); //create New Product
    //     Route::put('/{danhgia_id}','DanhGiaController@update')->name('danhgia.update'); // update Existing Product
    //     Route::delete('/{danhgia_id}','DanhGiaController@destroy'); // delete product
    // });

    // //Quan ly bao cao
    // Route::group(['prefix' => 'baocao'], function () {
    //     Route::get('/','BaoCaoController@index')->name('baocao.index'); //Display Index Page
    //     Route::get('/{baocao_id?}','BaoCaoController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','BaoCaoController@store')->name('baocao.store'); //create New Product
    //     Route::put('/{baocao_id}','BaoCaoController@update')->name('baocao.update'); // update Existing Product
    //     Route::delete('/{baocao_id}','BaoCaoController@destroy'); // delete product
    // });

    // //Quan ly bai viet
    // Route::group(['prefix' => 'baiviet'], function () {
    //     Route::get('/','BaiVietController@index')->name('baiviet.index'); //Display Index Page
    //     Route::get('/create','BaiVietController@create')->name('baiviet.create'); //Display Index Page
    //     Route::get('/{baiviet_id}/edit','BaiVietController@edit')->name('baiviet.edit'); //Display Index Page
    //     Route::get('/{baiviet_id?}','BaiVietController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','BaiVietController@store')->name('baiviet.store'); //create New Product
    //     Route::put('/{baiviet_id}','BaiVietController@update')->name('baiviet.update'); // update Existing Product
    //     Route::delete('/{baiviet_id}','BaiVietController@destroy'); // delete product
    // });

    // //Quan ly bang xep hang
    // Route::group(['prefix' => 'bangxephang'], function () {
    //     Route::get('/','BangXepHangController@index')->name('bangxephang.index'); //Display Index Page
    //     Route::get('/{bangxephang_id?}','BangXepHangController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','BangXepHangController@store')->name('bangxephang.store'); //create New Product
    //     Route::put('/{bangxephang_id}','BangXepHangController@update')->name('bangxephang.update'); // update Existing Product
    //     Route::delete('/{bangxephang_id}','BangXepHangController@destroy'); // delete product
    // });

    // //Quan ly phim_bangxephang
    // Route::group(['prefix' => 'phim_bangxephang'], function () {
    //     Route::get('/{phim_bangxephang_id?}','Phim_BangXepHangController@index')->name('phim_bangxephang.index'); //Display Index Page
    //     Route::get('/show/{phim_bangxephang_id?}','Phim_BangXepHangController@show')->name('phim_bangxephang.show'); // Populate Data in Edit Modal Form
    //     Route::post('/','Phim_BangXepHangController@store')->name('phim_bangxephang.store'); //create New Product
    //     Route::put('/{phim_bangxephang_id}','Phim_BangXepHangController@update')->name('phim_bangxephang.update'); // update Existing Product
    //     Route::delete('/{phim_bangxephang_id}','Phim_BangXepHangController@destroy'); // delete product
    //     Route::post('/post-sortable','Phim_BangXepHangController@sort'); // sortable
    // });

    // //Quan ly tai khoan
    // Route::group(['prefix' => 'user'], function () {
    //     Route::get('/','UserController@index')->name('user.index'); //Display Index Page
    //     Route::get('/{user_id?}','UserController@show'); // Populate Data in Edit Modal Form
    //     Route::post('/','UserController@store')->name('user.store'); //create New Product
    //     Route::put('/{user_id}','UserController@update')->name('user.update'); // update Existing Product
    //     Route::delete('/{user_id}','UserController@destroy'); // delete product
    // });
});

// Test
Route::get('/test', function () {
    return view('webspeechapi');
});
