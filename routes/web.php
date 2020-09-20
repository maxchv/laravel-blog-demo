<?php

use Illuminate\Support\Facades\Request;
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

//Route::get('/', function () {
//    return view('index');
//});
Route::view('/', 'index');

Route::post('/post', function() {
   return 'Post request ' . $_POST['test'];
});

Route::get('greeting/{name?}', function ($name='Guest') {
    return "Hello $name";
});

Route::get('post/{id?}', function ($id) {
    return "Return post with id: $id";
})->where(['id' => '\\d+'])->name('post.show');

//Route::match(['get', 'post'], function() {
//
//});


