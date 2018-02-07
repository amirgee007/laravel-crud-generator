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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('abbonamentis', 'AbbonamentiController');

Route::resource('distanzes', 'DistanzeController');

Route::resource('menuRistorantes', 'MenuRistoranteController');

Route::resource('menuSettimanales', 'MenuSettimanaleController');

Route::resource('ordiniCorporates', 'OrdiniCorporateController');

Route::resource('ordiniDatis', 'OrdiniDatiController');

Route::resource('ordiniDatiEvasis', 'OrdiniDatiEvasiController');

Route::resource('ordiniDatiEvasiMarcos', 'OrdiniDatiEvasiMarcoController');

Route::resource('ordiniProdottis', 'OrdiniProdottiController');

Route::resource('ordiniProdottiEvasis', 'OrdiniProdottiEvasiController');

Route::resource('piattis', 'PiattiController');

Route::resource('piattiPicklists', 'PiattiPicklistController');

Route::resource('picklists', 'PicklistController');

Route::resource('platees', 'PlateeController');

Route::resource('preferenzeUtAttributis', 'PreferenzeUtAttributiController');

Route::resource('preferenzeUtAttributiTuttis', 'PreferenzeUtAttributiTuttiController');

Route::resource('preferenzeUtPiattis', 'PreferenzeUtPiattiController');

Route::resource('prodottis', 'ProdottiController');

Route::resource('ristorantis', 'RistorantiController');

Route::resource('distanzes', 'DistanzeController');

Route::resource('distanzes', 'DistanzeController');

Route::resource('distanzes', 'DistanzeController');