<?php namespace Syscover\Crm\Controllers;

use Illuminate\Support\Facades\Hash;
use Syscover\Pulsar\Controllers\Controller;
use Syscover\Pulsar\Traits\TraitController;
use Syscover\Crm\Models\Customer;
use Syscover\Crm\Models\Group;

/**
 * Class CustomerController
 * @package Syscover\Crm\Controllers
 */

class CustomerController extends Controller {

    use TraitController;

    protected $routeSuffix  = 'crmCustomer';
    protected $folder       = 'customer';
    protected $package      = 'crm';
    protected $aColumns     = ['id_301', 'name_301', 'surname_301', ['data' => 'email_301', 'type' => 'email'], 'name_300', ['data' => 'active_300', 'type' => 'active'], ['data' => 'confirmed_300', 'type' => 'active']];
    protected $nameM        = 'name_300';
    protected $model        = \Syscover\Crm\Models\Customer::class;
    protected $icon         = 'fa fa-user';
    protected $objectTrans  = 'customer';

    public function indexCustom($parameters)
    {
        // init record on tap 4
        $parameters['urlParameters']['tab']     = 4;

        return $parameters;
    }

    public function customActionUrlParameters($actionUrlParameters, $parameters)
    {
        $actionUrlParameters['tab'] = 4;

        return $actionUrlParameters;
    }

    public function createCustomRecord($request, $parameters)
    {
        $parameters['groups']       = Group::all();

        $parameters['genres']       = array_map(function($object){
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.genres'));

        return $parameters;
    }

    public function storeCustomRecord($request, $parameters)
    {
        Customer::create([
            'group_301'                 => $request->input('group'),
            'date_301'                  => $request->has('date')? \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('date'))->getTimestamp() : null,
            'company_301'               => empty($request->input('company'))? null : $request->input('company'),
            'tin_301'                   => empty($request->input('tin'))? null : $request->input('tin'),
            'gender_301'                => empty($request->input('gender'))? null : $request->input('gender'),
            'name_301'                  => empty($request->input('name'))? null : $request->input('name'),
            'surname_301'               => empty($request->input('surname'))? null : $request->input('surname'),
            'avatar_301'                => empty($request->input('avatar'))? null : $request->input('avatar'),
            'birth_date_301'            => $request->has('birthDate')? \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('birthDate'))->getTimestamp() : null,
            'email_301'                 => $request->input('email'),
            'phone_301'                 => empty($request->input('phone'))? null : $request->input('phone'),
            'mobile_301'                => empty($request->input('phone'))? null : $request->input('mobile'),
            'user_301'                  => $request->input('user'),
            'password_301'              => Hash::make($request->input('password')),
            'active_301'                => $request->has('active'),
            'confirmed_301'             => false,
            'country_301'               => $request->has('country')? $request->input('country') : null,
            'territorial_area_1_301'    => $request->has('territorialArea1')? $request->input('territorialArea1') : null,
            'territorial_area_2_301'    => $request->has('territorialArea2')? $request->input('territorialArea2') : null,
            'territorial_area_3_301'    => $request->has('territorialArea3')? $request->input('territorialArea3') : null,
            'cp_301'                    => empty($request->input('cp'))? null : $request->input('cp'),
            'locality_301'              => empty($request->input('locality'))? null : $request->input('locality'),
            'address_301'               => empty($request->input('address'))? null : $request->input('address'),
            'latitude_301'              => empty($request->input('latitude'))? null : $request->input('latitude'),
            'longitude_301'             => empty($request->input('longitude'))? null : $request->input('longitude'),
        ]);
    }

    public function editCustomRecord($request, $parameters)
    {
        $parameters['groups']       = Group::all();

        $parameters['genres']       = array_map(function($object){
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.genres'));

        return $parameters;
    }
    
    public function updateCustomRecord($request, $parameters)
    {
        Customer::where('id_301', $parameters['id'])->update([
            'group_301'                 => $request->input('group'),
            'date_301'                  => $request->has('date')? \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('date'))->getTimestamp() : null,
            'company_301'               => empty($request->input('company'))? null : $request->input('company'),
            'tin_301'                   => empty($request->input('tin'))? null : $request->input('tin'),
            'gender_301'                => empty($request->input('gender'))? null : $request->input('gender'),
            'name_301'                  => empty($request->input('name'))? null : $request->input('name'),
            'surname_301'               => empty($request->input('surname'))? null : $request->input('surname'),
            'avatar_301'                => empty($request->input('avatar'))? null : $request->input('avatar'),
            'birth_date_301'            => $request->has('birthDate')? \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('birthDate'))->getTimestamp() : null,
            'email_301'                 => $request->input('email'),
            'phone_301'                 => empty($request->input('phone'))? null : $request->input('phone'),
            'mobile_301'                => empty($request->input('phone'))? null : $request->input('mobile'),
            'user_301'                  => $request->input('user'),
            'password_301'              => Hash::make($request->input('password')),
            'active_301'                => $request->has('active'),
            'country_301'               => $request->has('country')? $request->input('country') : null,
            'territorial_area_1_301'    => $request->has('territorialArea1')? $request->input('territorialArea1') : null,
            'territorial_area_2_301'    => $request->has('territorialArea2')? $request->input('territorialArea2') : null,
            'territorial_area_3_301'    => $request->has('territorialArea3')? $request->input('territorialArea3') : null,
            'cp_301'                    => empty($request->input('cp'))? null : $request->input('cp'),
            'locality_301'              => empty($request->input('locality'))? null : $request->input('locality'),
            'address_301'               => empty($request->input('address'))? null : $request->input('address'),
            'latitude_301'              => empty($request->input('latitude'))? null : $request->input('latitude'),
            'longitude_301'             => empty($request->input('longitude'))? null : $request->input('longitude'),
        ]);
    }
}