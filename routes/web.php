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

require __DIR__ . '/frontend.php';

Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/register', function () {
    return view('website.web.index');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::namespace('Auth')->group(function () {

        Route::namespace('Conflicts')->group(function () {

            Route::get('Gallery_new_post', 'PostController@newPost')->name('conflicts_new_post');
            Route::put('Gallery_add_post_script', 'PostController@addPost')->name('conflicts_add_post_script');
            Route::get('Gallery_all', 'PostController@allPost')->name('all_conflicts_post');
            Route::post('all_gallery_post_data', 'PostController@allPostData')->name('all_conflicts_post_data');
            Route::get('view_gallery_post/{newsId}', 'PostController@viewNews')->name('view_conflicts_post');
            Route::get('gallery_cover_image/{file_name}', 'PostController@imageView')->name('conflicts_news_cover_image');
            Route::get('delete_conflicts_post/{newsId}', 'PostController@deleteNews')->name('delete_conflicts_post');
        });
        Route::namespace('Payments')->group(function () {
            Route::get('Payments_list', 'PaymentController@show')->name('payments');
            Route::post('Payments_list_data', 'PaymentController@getAllData')->name('payments_list_data');
            Route::get('Payments_delete/{newsId}', 'PaymentController@delete')->name('Payments_delete');
        });
    });
});