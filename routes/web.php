<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'IndexController')->name('blog.index');
Route::group(['namespace' => 'Blog'], function () {
    Route::group(['namespace' => 'Contact'], function () {
        Route::get('/contact', 'IndexController')->name('contact.index');
        Route::post('/contact', 'StoreController')->name('contact.store');
    });
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/blog/{post}', 'ShowController')->name('blog.show');
        Route::get('/search', 'SearchController')->name('search');
        Route::group(['namespace' => 'Comments'], function () {
            Route::post('/blog/comments/{post}', 'StoreController')->name('comments.store');
        });
        Route::group(['namespace' => 'Filter', 'prefix' => '/filter'], function () {
            Route::group(['namespace' => 'Category'], function () {
                Route::get('/categories/{category}', 'ShowController')->name('category.show');
            });
            Route::group(['namespace' => 'Tag'], function () {
                Route::get('/tags/{tag}', 'ShowController')->name('tag.show');
            });
        });
    });
});
Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/admin', 'IndexController')->name('admin.index');
    Route::get('/admin/create', 'CreateController')->name('admin.create');
    Route::post('/admin', 'StoreController')->name('admin.store');
    Route::get('/admin/{post}/edit', 'EditController')->name('admin.edit');
    Route::patch('/admin/{post}', 'UpdateController')->name('admin.update');
    Route::delete('/admin/{post}', 'DestroyController')->name('admin.destroy');
    Route::group(['namespace' => 'Categories'], function () {
        Route::get('/categories/create', 'CreateController')->name('categories.create');
        Route::post('/categories', 'StoreController')->name('categories.store');
        Route::delete('/categories/{category}', 'DestroyController')->name('categories.destroy');
    });
    Route::group(['namespace' => 'Tags'], function () {
        Route::get('/tags/create', 'CreateController')->name('tags.create');
        Route::post('/tags', 'StoreController')->name('tags.store');
        Route::delete('/tags/{tag}', 'DestroyController')->name('tags.destroy');
    });
    Route::group(['namespace' => 'Comments'], function () {
        Route::get('/comments', 'IndexController')->name('comments.index');
        Route::delete('/comments/{comment}', 'DestroyController')->name('comments.destroy');
    });
    Route::group(['namespace' => 'Customers'], function () {
        Route::get('/customers', 'IndexController')->name('customers.index');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
