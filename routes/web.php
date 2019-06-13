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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog/blogwelcome');
});

Route::post('/blog', function () {
    return view('blog/succes');
});
*/

Route::resource('blog', 'blogController');


