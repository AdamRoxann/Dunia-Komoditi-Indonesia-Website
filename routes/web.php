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

Route::get('/', function () {
    return view('homepage');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('about', function () {
    return view('about');
});

Route::prefix('blog')->group(function () {
    Route::get('/', function () {
        return view('blog.index');
    });
});


Route::prefix('green_bean')->group(function () {
    Route::get('/', function () {
        return view('green_bean.index');
    });
    Route::get('/arabica_gayo', function () {
        return view('green_bean.arabica_gayo.index');
    });
    Route::get('/arabica_lintong', function () {
        return view('green_bean.arabica_lintong.index');
    });
    Route::get('/arabica_kerinci', function () {
        return view('green_bean.arabica_kerinci.index');
    });
    Route::get('/arabica_sidikalang', function () {
        return view('green_bean.arabica_sidikalang.index');
    });
    Route::get('/arabica_mandailing', function () {
        return view('green_bean.arabica_mandailing.index');
    });

});

Route::prefix('coconut_sugar')->group(function () {
    Route::get('/', function () {
        return view('coconut_sugar.index');
    });
    Route::get('/sugar_block', function () {
        return view('coconut_sugar.sugar_block.index');
    });
    Route::get('/palm_sugar', function () {
        return view('coconut_sugar.palm_sugar.index');
    });
});

