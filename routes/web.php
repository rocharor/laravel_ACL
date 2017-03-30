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

Route::get('/', function () {
    Auth::loginUsingId(3);
    return view('welcome');
});

Route::get('/sadmin', function () {
    Auth::loginUsingId(1);
    return view('welcome');
});

Route::get('/admin', function () {
    Auth::loginUsingId(2);
    return view('welcome');
});

Route::get('/edit', function () {
    $array = explode('/',$_SERVER['HTTP_REFERER']);
    $url = end($array);
    echo "<h1>TEM PERMISSÃO EDIT</h1> <br>";
    echo "<a href='/" . $url . "'>Voltar</a>";
})->middleware('can:edit');;
// Route::get('/edit', ['as' => 'edit', 'middleware' => ['can:edit'], 'uses' => 'TesteController@edit']);

Route::get('/delete', function () {
    $array = explode('/',$_SERVER['HTTP_REFERER']);
    $url = end($array);
    echo "<h1>TEM PERMISSÃO DELETE</h1> <br>";
    echo "<a href='/" . $url . "'>Voltar</a>";
})->middleware('can:delete');
// Route::get('/delete', ['as' => 'delete', 'middleware' => ['can:delete'], 'uses' => 'TesteController@delete']);
