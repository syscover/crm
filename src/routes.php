<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can any all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['middleware' => ['auth.pulsar','permission.pulsar','locale.pulsar']], function() {

    /*
    |--------------------------------------------------------------------------
    | FAMILY
    |--------------------------------------------------------------------------
    */
    Route::any(config('pulsar.appName') . '/crm/family/{offset?}',                          ['as'=>'CrmFamily',                   'uses'=>'Syscover\Crm\Controllers\Families@index',                      'resource' => 'crm-family',        'action' => 'access']);
    Route::any(config('pulsar.appName') . '/crm/family/json/data',                          ['as'=>'jsonDataCrmFamily',           'uses'=>'Syscover\Crm\Controllers\Families@jsonData',                   'resource' => 'crm-family',        'action' => 'access']);
    Route::get(config('pulsar.appName') . '/crm/family/create/{offset}',                    ['as'=>'createCrmFamily',             'uses'=>'Syscover\Crm\Controllers\Families@createRecord',               'resource' => 'crm-family',        'action' => 'create']);
    Route::post(config('pulsar.appName') . '/crm/family/store/{offset}',                    ['as'=>'storeCrmFamily',              'uses'=>'Syscover\Crm\Controllers\Families@storeRecord',                'resource' => 'crm-family',        'action' => 'create']);
    Route::get(config('pulsar.appName') . '/crm/family/{id}/edit/{offset}',                 ['as'=>'editCrmFamily',               'uses'=>'Syscover\Crm\Controllers\Families@editRecord',                 'resource' => 'crm-family',        'action' => 'access']);
    Route::put(config('pulsar.appName') . '/crm/family/update/{id}/{offset}',               ['as'=>'updateCrmFamily',             'uses'=>'Syscover\Crm\Controllers\Families@updateRecord',               'resource' => 'crm-family',        'action' => 'edit']);
    Route::get(config('pulsar.appName') . '/crm/family/delete/{id}/{offset}',               ['as'=>'deleteCrmFamily',             'uses'=>'Syscover\Crm\Controllers\Families@deleteRecord',               'resource' => 'crm-family',        'action' => 'delete']);
    Route::delete(config('pulsar.appName') . '/crm/family/delete/select/records',           ['as'=>'deleteSelectCrmFamily',       'uses'=>'Syscover\Crm\Controllers\Families@deleteRecordsSelect',        'resource' => 'crm-family',        'action' => 'delete']);

});