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

Route::get('/', [
    'as' => 'site.home',
    function () {
        return view('site.home');
    }
]);

Route::get('/sobre', [
    'as' => 'site.sobre',
    function () {
        return view('site.sobre');
    }
]);

Route::get('/contato', [
    'as' => 'site.contato',
    function () {
        return view('site.contato');
    }
]);


Route::get('/imovel/{id}/{titulo?}', [
    'as' => 'site.imovel',
    function () {
        return view('site.imovel');
    }
]);

//Auth::routes();

Route::get('/admin/login', [
    'as' => 'admin.login',
    function () {
        return view('admin.login.index');
    }
]);

// Rota do formulário
Route::post('/admin/login', ['as' => 'admin.login', 'uses' => 'Admin\UsuarioController@login']);

//Route::get('/home', 'HomeController@index')->name('home');

//Rota principal
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/login/sair', ['as' => 'admin.login.sair', 'uses' => 'Admin\UsuarioController@sair']);

    Route::get('/admin', [
        'as' => 'admin.principal',
        function () {
            return view('admin.principal.index');
        }
    ]);

    /* Lista de Usuários */
    Route::get('/admin/usuarios', ['as' => 'admin.usuarios', 'uses' => 'Admin\UsuarioController@index']);

    //Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);

    /* Adicionar */
    Route::get('/admin/usuarios/adicionar',
        ['as' => 'admin.usuarios.adicionar', 'uses' => 'Admin\UsuarioController@adicionar']);
    Route::post('/admin/usuarios/salvar',
        ['as' => 'admin.usuarios.salvar', 'uses' => 'Admin\UsuarioController@salvar']);

    /* Editar */
    Route::get('/admin/usuarios/editar/{id}',
        ['as' => 'admin.usuario.editar', 'uses' => 'Admin\UsuarioController@editar']);
    Route::put('/admin/usuarios/atualizar/{id}',
        ['as' => 'admin.usuario.atualizar', 'uses' => 'Admin\UsuarioController@atualizar']);

    /* Deletar */
    Route::get('/admin/usuarios/deletar/{id}', ['as' => 'admin.usuarios.deletar', 'uses' => 'Admin\UsuarioController@deletar'] );
});

