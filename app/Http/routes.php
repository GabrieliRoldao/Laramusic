<?php

/***
 * Routes do Painel
**/

Route::group(['prefix' => 'painel', 'namespace' => 'Painel'], function ()
{
    Route::get('/', 'DashboardController@index')->name('painel.index');

    /*
     * Grupo de rotas para estilo
     */
    Route::group(['prefix' => 'estilos'], function ()
    {
        Route::get('/', 'EstiloController@carregarDados')->name('painel.estilos.listar');
        Route::get('/cadastrar', 'EstiloController@cadastrarDado')->name('painel.estilos.cadastrar');
        Route::get('/editar/{id}', 'EstiloController@editarDado')->name('painel.estilos.editar');

        Route::post('/cadastrar', 'EstiloController@salvarDado')->name('painel.estilos.salvar');
        Route::post('/alterar/{id}', 'EstiloController@alterarDado')->name('painel.estilos.alterar');
        Route::post('/excluir/{id}', 'EstiloController@excluirDado')->name('painel.estilos.excluir');
        Route::post('/pesquisar', 'EstiloController@pesquisarDado')->name('painel.estilos.pesquisar');
    });

    /*
     * Grupo de rotas para albuns
     */
    Route::group(['prefix' => 'albuns'], function ()
    {
        Route::get('/', 'AlbumController@carregarDados')->name('painel.albuns.listar');
        Route::get('/cadastrar', 'AlbumController@cadastrarDado')->name('painel.albuns.cadastrar');
        Route::get('/editar/{id}', 'AlbumController@editarDado')->name('painel.albuns.editar');

        Route::post('/cadastrar', 'AlbumController@salvarDado')->name('painel.albuns.salvar');
        Route::post('/alterar/{id}', 'AlbumController@alterarDado')->name('painel.albuns.alterar');
        Route::post('/excluir/{id}', 'AlbumController@excluirDado')->name('painel.album.excluir');
        Route::post('/pesquisar', 'AlbumController@pesquisarDado')->name('painel.albuns.pesquisar');
    });

    /**
     * Rotas para musicas
     */

    Route::group(['prefix' => 'musicas'], function ()
    {
        Route::get('/', 'MusicaController@carregarDados')->name('painel.musicas.listar');
        Route::get('/cadastrar', 'MusicaController@cadastrarDado')->name('painel.musicas.cadastrar');
        Route::get('/editar/{id}', 'MusicaController@editarDado')->name('painel.musicas.editar');

        Route::post('/cadastrar', 'MusicaController@salvarDado')->name('painel.musicas.salvar');
        Route::post('/alterar/{id}', 'MusicaController@alterarDado')->name('painel.musicas.alterar');
        Route::post('/excluir/{id}', 'MusicaController@excluirDado')->name('painel.musicas.excluir');
        Route::post('/pesquisar', 'MusicaController@pesquisarDado')->name('painel.musicas.pesquisar');
    });

});


/**
 * Routes do Site
 **/

Route::group(['namespace' => 'Site'], function ()
{
    Route::get('/', 'SiteController@index');
});


