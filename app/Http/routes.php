<?php

/***
 * Routes do Painel
**/

Route::group(['prefix' => 'painel', 'namespace' => 'Painel'], function ()
{
    Route::get('/', 'DashboardController@index')->name('painel.index');

    Route::get('/estilos', 'EstiloController@carregarEstilos')->name('painel.estilos.listagem');
});


/**
 * Routes do Site
 **/

Route::group(['namespace' => 'Site'], function ()
{
    Route::get('/', 'SiteController@index');
});


