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
        Route::get('/', 'EstiloController@carregarEstilos')->name('painel.estilos.listar');
        Route::get('/cadastrar', 'EstiloController@cadastrarEstilo')->name('painel.estilos.cadastrar');
        Route::post('/cadastrar', 'EstiloController@salvarEstilo')->name('painel.estilos.salvar');
        Route::get('/editar/{id}', 'EstiloController@editarEstilo')->name('painel.estilos.editar');
        Route::post('/alterar/{id}', 'EstiloController@alterarEstilo')->name('painel.estilos.alterar');
    });

    /*
     * Grupo de rotas para albuns
     */
    Route::group(['prefix' => 'albuns'], function ()
    {
       Route::get('/', 'AlbumController@carregarAlbuns')->name('painel.albuns.listar');
    });
});


/**
 * Routes do Site
 **/

Route::group(['namespace' => 'Site'], function ()
{
    Route::get('/', 'SiteController@index');
});


