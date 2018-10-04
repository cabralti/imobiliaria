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
    'uses' => 'Site\HomeController@index'
]);

Route::get('/sobre', [
    'as' => 'site.sobre',
    'uses' => 'Site\PaginaController@sobre'
]);

Route::get('/contato', [
    'as' => 'site.contato',
    'uses' => 'Site\PaginaController@contato'
]);

// Requisição de envio de e-mail
Route::post('/contato/enviar', ['as' => 'site.contato.enviar', 'uses' => 'Site\PaginaController@enviarContato']);


Route::get('/imovel/{id}/{titulo?}', [
    'as' => 'site.imovel',
    'uses' => 'Site\ImovelController@index'
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

    /**
     * Usuários
     */
    //Lista de Usuários
    Route::get('/admin/usuarios', ['as' => 'admin.usuarios', 'uses' => 'Admin\UsuarioController@index']);

    //Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);

    //Adicionar
    Route::get('/admin/usuarios/adicionar',
        ['as' => 'admin.usuarios.adicionar', 'uses' => 'Admin\UsuarioController@adicionar']);
    Route::post('/admin/usuarios/salvar',
        ['as' => 'admin.usuarios.salvar', 'uses' => 'Admin\UsuarioController@salvar']);

    //Editar
    Route::get('/admin/usuarios/editar/{id}',
        ['as' => 'admin.usuario.editar', 'uses' => 'Admin\UsuarioController@editar']);
    Route::put('/admin/usuarios/atualizar/{id}',
        ['as' => 'admin.usuario.atualizar', 'uses' => 'Admin\UsuarioController@atualizar']);

    //Deletar
    Route::get('/admin/usuarios/deletar/{id}',
        ['as' => 'admin.usuarios.deletar', 'uses' => 'Admin\UsuarioController@deletar']);

    /**
     * Páginas
     */
    //Listar páginas
    Route::get('/admin/paginas', ['as' => 'admin.paginas', 'uses' => 'Admin\PaginaController@index']);

    //Editar páginas
    Route::get('/admin/paginas/editar/{id}',
        ['as' => 'admin.paginas.editar', 'uses' => 'Admin\PaginaController@editar']);

    //Atualização da páginas pelo formulário
    Route::put('/admin/paginas/atualizar/{id}',
        ['as' => 'admin.paginas.atualizar', 'uses' => 'Admin\PaginaController@atualizar']);


    /**
     * Tipos
     */
    //Lista de Tipos
    Route::get('/admin/tipos', ['as' => 'admin.tipos', 'uses' => 'Admin\TipoController@index']);

    //Adicionar Tipos
    Route::get('/admin/tipos/adicionar',
        ['as' => 'admin.tipos.adicionar', 'uses' => 'Admin\TipoController@adicionar']);
    Route::post('/admin/tipos/salvar',
        ['as' => 'admin.tipos.salvar', 'uses' => 'Admin\TipoController@salvar']);

    //Editar Tipos
    Route::get('/admin/tipos/editar/{id}',
        ['as' => 'admin.tipos.editar', 'uses' => 'Admin\TipoController@editar']);
    Route::put('/admin/tipos/atualizar/{id}',
        ['as' => 'admin.tipos.atualizar', 'uses' => 'Admin\TipoController@atualizar']);

    //Deletar Tipos
    Route::get('/admin/tipos/deletar/{id}',
        ['as' => 'admin.tipos.deletar', 'uses' => 'Admin\TipoController@deletar']);

    /**
     * Cidades
     */
    //Lista de Cidade
    Route::get('/admin/cidades', ['as' => 'admin.cidades', 'uses' => 'Admin\CidadeController@index']);

    //Adicionar Cidades
    Route::get('/admin/cidades/adicionar',
        ['as' => 'admin.cidades.adicionar', 'uses' => 'Admin\CidadeController@adicionar']);
    Route::post('/admin/cidades/salvar',
        ['as' => 'admin.cidades.salvar', 'uses' => 'Admin\CidadeController@salvar']);

    //Editar Cidades
    Route::get('/admin/cidades/editar/{id}',
        ['as' => 'admin.cidades.editar', 'uses' => 'Admin\CidadeController@editar']);
    Route::put('/admin/cidades/atualizar/{id}',
        ['as' => 'admin.cidades.atualizar', 'uses' => 'Admin\CidadeController@atualizar']);

    //Deletar Cidades
    Route::get('/admin/cidades/deletar/{id}',
        ['as' => 'admin.cidades.deletar', 'uses' => 'Admin\CidadeController@deletar']);

    /**
     * Imóveis
     */
    //Lista de Imóveis
    Route::get('/admin/imoveis', ['as' => 'admin.imoveis', 'uses' => 'Admin\ImovelController@index']);

    //Adicionar Imóveis
    Route::get('/admin/imoveis/adicionar',
        ['as' => 'admin.imoveis.adicionar', 'uses' => 'Admin\ImovelController@adicionar']);
    Route::post('/admin/imoveis/salvar',
        ['as' => 'admin.imoveis.salvar', 'uses' => 'Admin\ImovelController@salvar']);

    //Editar Imóveis
    Route::get('/admin/imoveis/editar/{id}',
        ['as' => 'admin.imoveis.editar', 'uses' => 'Admin\ImovelController@editar']);
    Route::put('/admin/imoveis/atualizar/{id}',
        ['as' => 'admin.imoveis.atualizar', 'uses' => 'Admin\ImovelController@atualizar']);

    //Deletar Imóveis
    Route::get('/admin/imoveis/deletar/{id}',
        ['as' => 'admin.imoveis.deletar', 'uses' => 'Admin\ImovelController@deletar']);

    /**
     * Galeria
     */
    //Lista de Imóveis
    Route::get('/admin/galerias/{id}', ['as' => 'admin.galerias', 'uses' => 'Admin\GaleriaController@index']);

    //Adicionar Imóveis
    Route::get('/admin/galerias/adicionar/{id}',
        ['as' => 'admin.galerias.adicionar', 'uses' => 'Admin\GaleriaController@adicionar']);
    Route::post('/admin/galerias/salvar/{id}',
        ['as' => 'admin.galerias.salvar', 'uses' => 'Admin\GaleriaController@salvar']);

    //Editar Imóveis
    Route::get('/admin/galerias/editar/{id}',
        ['as' => 'admin.galerias.editar', 'uses' => 'Admin\GaleriaController@editar']);
    Route::put('/admin/galerias/atualizar/{id}',
        ['as' => 'admin.galerias.atualizar', 'uses' => 'Admin\GaleriaController@atualizar']);

    //Deletar Imóveis
    Route::get('/admin/galerias/deletar/{id}',
        ['as' => 'admin.galerias.deletar', 'uses' => 'Admin\GaleriaController@deletar']);

});

