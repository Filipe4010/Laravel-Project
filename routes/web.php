<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;


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

//Route::namespace(value:'Site')->group(function () {

    Route::get('/', [HomeController::class, '__invoke']);
    Route::get('produtos', [CategoryController::class, 'index']);
    Route::get('produtos/{slug}', [CategoryController::class, 'show']);
    Route::get('blog', [BlogController::class, '__invoke']);
    Route::view('sobre', 'site.about.index');
    Route::get('contato', [ContactController::class, 'index']);
    Route::get('contato', [ContactController::class, 'form']);


    //Route::get(uri:'/', action:'HomeController::class')->name('site.index');

    // Route::get('produtos', 'CategoryController@index')->name('site.products');
    // Route::get('produtos/{category}', 'CategoryController@show')->name('site.products.category');

    // Route::get('blog', 'BlogController')->name('site.blog');

    // Route::view('sobre', 'site.about.index')->name('site.about');

    // Route::get('contato', 'ContactController@index')->name('site.contact');
    // Route::post('contato', 'ContactController@form')->name('site.contact.form');

//});
