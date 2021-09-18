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


Route::view('/', 'home')->name('home');

Route::post('cep', function () {
    $serviceCep = new App\Services\Cep;
    return $serviceCep->buscarCep($_POST['cep']);
})->name('cep');


Route::get('getProduct', 'ProdutosController@getProduct')->name('getProduct');

Route::group([
    'module' => 'VendasController',
    'prefix' => '/vendas',
], function () {
    Route::get('/', 'VendasController@index')->name('vendas.index');

    Route::get('add', 'VendasController@add')->name('vendas.add');
    Route::post('add', 'VendasController@ConfirmVenda');

    Route::get('remove', 'VendasController@removeVenda')->name('vendas.remove');

});

Route::group([
    'module' => 'ProdutosController',
    'prefix' => '/produtos',
], function () {
    Route::get('/', 'ProdutosController@index')->name('produtos.index');


});
