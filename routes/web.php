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
    return view('auth.login');
});

Route::resource('users', 'UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/busca', 'HomeController@busca');
Route::get('/buscaId/{id}', 'HomeController@buscaDireta');
Route::get('/busca/search', 'HomeController@search');

Route::get('/avaliacoes/create/{id}', 'AvaliacoesController@create');
Route::post('/avaliacoes/create/{id}', 'AvaliacoesController@store');

Route::get('/servicos/create/{id}', 'ServicosController@create');
Route::post('/servicos/create/{id}', 'ServicosController@store');

Route::resource('veiculo', 'VeiculoController');
Route::get('/veiculo/create', 'VeiculoController@create');
Route::post('/veiculo/create', 'VeiculoController@store');
Route::get('/veiculo/edit/{id}', 'VeiculoController@edit');
Route::get('/veiculo/destroy/{id}', 'VeiculoController@destroy');

