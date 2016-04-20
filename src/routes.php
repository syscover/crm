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

Route::group(['middleware' => ['web', 'pulsar']], function() {

    /*
    |--------------------------------------------------------------------------
    | CUSTOMER
    |--------------------------------------------------------------------------
    */
    Route::any(config('pulsar.appName') . '/crm/customers/{offset?}/{modal?}',                 ['as'=>'crmCustomer',                   'uses'=>'Syscover\Crm\Controllers\CustomerController@index',                      'resource' => 'crm-customer',        'action' => 'access']);
    Route::any(config('pulsar.appName') . '/crm/customers/json/data/{modal}',                  ['as'=>'jsonDataCrmCustomer',           'uses'=>'Syscover\Crm\Controllers\CustomerController@jsonData',                   'resource' => 'crm-customer',        'action' => 'access']);
    Route::get(config('pulsar.appName') . '/crm/customers/create/{offset}/{tab}/{modal?}',     ['as'=>'createCrmCustomer',             'uses'=>'Syscover\Crm\Controllers\CustomerController@createRecord',               'resource' => 'crm-customer',        'action' => 'create']);
    Route::post(config('pulsar.appName') . '/crm/customers/store/{offset}/{tab}/{modal?}',     ['as'=>'storeCrmCustomer',              'uses'=>'Syscover\Crm\Controllers\CustomerController@storeRecord',                'resource' => 'crm-customer',        'action' => 'create']);
    Route::get(config('pulsar.appName') . '/crm/customers/{id}/edit/{offset}/{tab}',           ['as'=>'editCrmCustomer',               'uses'=>'Syscover\Crm\Controllers\CustomerController@editRecord',                 'resource' => 'crm-customer',        'action' => 'access']);
    Route::put(config('pulsar.appName') . '/crm/customers/update/{id}/{offset}/{tab}',         ['as'=>'updateCrmCustomer',             'uses'=>'Syscover\Crm\Controllers\CustomerController@updateRecord',               'resource' => 'crm-customer',        'action' => 'edit']);
    Route::get(config('pulsar.appName') . '/crm/customers/delete/{id}/{offset}',               ['as'=>'deleteCrmCustomer',             'uses'=>'Syscover\Crm\Controllers\CustomerController@deleteRecord',               'resource' => 'crm-customer',        'action' => 'delete']);
    Route::delete(config('pulsar.appName') . '/crm/customers/delete/select/records',           ['as'=>'deleteSelectCrmCustomer',       'uses'=>'Syscover\Crm\Controllers\CustomerController@deleteRecordsSelect',        'resource' => 'crm-customer',        'action' => 'delete']);


    /*
    |--------------------------------------------------------------------------
    | GROUP
    |--------------------------------------------------------------------------
    */
    Route::any(config('pulsar.appName') . '/crm/groups/{offset?}',                          ['as'=>'crmGroup',                   'uses'=>'Syscover\Crm\Controllers\GroupController@index',                      'resource' => 'crm-group',        'action' => 'access']);
    Route::any(config('pulsar.appName') . '/crm/groups/json/data',                          ['as'=>'jsonDataCrmGroup',           'uses'=>'Syscover\Crm\Controllers\GroupController@jsonData',                   'resource' => 'crm-group',        'action' => 'access']);
    Route::get(config('pulsar.appName') . '/crm/groups/create/{offset}',                    ['as'=>'createCrmGroup',             'uses'=>'Syscover\Crm\Controllers\GroupController@createRecord',               'resource' => 'crm-group',        'action' => 'create']);
    Route::post(config('pulsar.appName') . '/crm/groups/store/{offset}',                    ['as'=>'storeCrmGroup',              'uses'=>'Syscover\Crm\Controllers\GroupController@storeRecord',                'resource' => 'crm-group',        'action' => 'create']);
    Route::get(config('pulsar.appName') . '/crm/groups/{id}/edit/{offset}',                 ['as'=>'editCrmGroup',               'uses'=>'Syscover\Crm\Controllers\GroupController@editRecord',                 'resource' => 'crm-group',        'action' => 'access']);
    Route::put(config('pulsar.appName') . '/crm/groups/update/{id}/{offset}',               ['as'=>'updateCrmGroup',             'uses'=>'Syscover\Crm\Controllers\GroupController@updateRecord',               'resource' => 'crm-group',        'action' => 'edit']);
    Route::get(config('pulsar.appName') . '/crm/groups/delete/{id}/{offset}',               ['as'=>'deleteCrmGroup',             'uses'=>'Syscover\Crm\Controllers\GroupController@deleteRecord',               'resource' => 'crm-group',        'action' => 'delete']);
    Route::delete(config('pulsar.appName') . '/crm/groups/delete/select/records',           ['as'=>'deleteSelectCrmGroup',       'uses'=>'Syscover\Crm\Controllers\GroupController@deleteRecordsSelect',        'resource' => 'crm-group',        'action' => 'delete']);

});