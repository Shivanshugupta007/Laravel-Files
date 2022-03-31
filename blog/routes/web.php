<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controller\TagController;

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

Route::get('/', function () {
    return view('welcome');
});

//Categories TABLE Routes

route::get('/cat','home@categorie');
route::get('/new','CategoryController@insert');
route::post('/add','CategoryController@entry');
route::get('/edit/{id}','CategoryController@edit');
route::get('/redo/{id}','CategoryController@redo')->name('Categorie.redo');
route::get('/delete/{id}','CategoryController@delete');

//Tags TABLE Routes

route::get('/tag','home@tag');
route::get('/tagnew','TagController@addnew');
route::post('/tagadd','TagController@adding');
route::get('/tagedit/{id}','TagController@tagedit');
route::post('/again/{id}','TagController@again')->name('tag.again');
route::get('/tagdelete/{id}','TagController@remove');

//Post TABLE Routes

route::get('/post','home@post');
route::get('/postnew','PostController@create');
route::post('/poststore','PostController@store');
route::get('/postedit/{id}','PostController@edit');
route::post('/update/{id}','PostController@update')->name('post.update');
route::get('/postdelete/{id}','PostController@destroy');