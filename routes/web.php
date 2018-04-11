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
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/lexico', [
    'as' => 'lexico', 'uses' => 'lexico@show_def'
]);


Route::get('/turno', function () {
    return view('turno');
});

Route::get('/cartas', function () {
    return view('cartas');
});

Route::get('/buscador', function () {
    return view('seo');
});

Route::get('/habilidades', function () {
    return view('habilidades');
});

Route::get('/polemicas', function () {
    return view('polemicas');
});

Route::get('/mazos', function () {
    return view('mazos');
});

//ruta no encontrada
/*Route::get('/', function () {
    return view('');
});*/