<?php namespace Syscover\Crm\Controllers;

use Syscover\Pulsar\Core\Controller;
use Illuminate\Support\Facades\Hash;
use Syscover\Pulsar\Models\AttachmentFamily;
use Syscover\Pulsar\Libraries\AttachmentLibrary;
use Syscover\Pulsar\Models\Lang;
use Syscover\Crm\Models\Customer;
use Syscover\Crm\Models\Group;

/**
 * Class CustomerController
 * @package Syscover\Crm\Controllers
 */

class CustomerController extends Controller
{
    protected $routeSuffix  = 'crmCustomer';
    protected $folder       = 'customer';
    protected $package      = 'crm';
    protected $aColumns     = ['id_301', 'company_301', 'name_301', 'surname_301', ['data' => 'email_301', 'type' => 'email'], 'name_300', ['data' => 'active_301', 'type' => 'active'], ['data' => 'confirmed_301', 'type' => 'active']];
    protected $nameM        = 'name_300';
    protected $model        = Customer::class;
    protected $icon         = 'fa fa-user';
    protected $objectTrans  = 'customer';

    public function customIndex($parameters)
    {
        // init record on tap 1
        $parameters['urlParameters']['tab'] = 1;

        if(isset($parameters['modal']) && $parameters['modal'] == 1)
            $this->viewParameters['deleteSelectButton'] = false;

        return $parameters;
    }

    public function customJsonData($parameters)
    {
        if($parameters['modal'] == 1)
        {
            $this->viewParameters['checkBoxColumn'] = false;
            $this->viewParameters['relatedButton']  = true;
        }
    }

    public function customActionUrlParameters($actionUrlParameters, $parameters)
    {
        // set modal parameter for actions from datatable, you need instance all situations
        $actionUrlParameters['tab'] = 1;

        return $actionUrlParameters;
    }

    public function createCustomRecord($parameters)
    {
        $parameters['langs']        = Lang::all();

        $parameters['groups']       = Group::all();

        $parameters['genres']       = array_map(function($object) {
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.genres'));

        $parameters['treatments']   = array_map(function($object) {
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.treatments'));

        $parameters['states']       = array_map(function($object) {
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.states'));

        $parameters['attachmentFamilies']   = AttachmentFamily::getAttachmentFamilies(['resource_id_015' => 'cms-article']);
        $parameters['attachmentsInput']     = json_encode([]);

        if(isset($parameters['id']))
        {
            // get attachments from base lang
            $attachments = AttachmentLibrary::getRecords($this->package, 'cms-article', $parameters['id'], session('baseLang')->id_001, true);

            // merge parameters and attachments array
            $parameters  = array_merge($parameters, $attachments);
        }

        return $parameters;
    }

    public function storeCustomRecord($parameters)
    {
        $customer = Customer::create([
            'lang_id_301'               => $this->request->has('lang')? $this->request->input('lang') : null,
            'group_id_301'              => $this->request->input('group'),
            'date_301'                  => $this->request->has('date')? \DateTime::createFromFormat(config('pulsar.datePattern'), $this->request->input('date'))->getTimestamp() : null,
            'company_301'               => $this->request->has('company')? $this->request->input('company') : null,
            'tin_301'                   => $this->request->has('tin')? $this->request->input('tin') : null,
            'gender_301'                => $this->request->has('gender')? $this->request->input('gender') : null,
            'treatment_id_301'          => $this->request->has('treatment')? $this->request->input('treatment') : null,
            'state_id_301'              => $this->request->has('state')? $this->request->input('state') : null,
            'name_301'                  => $this->request->has('name')? $this->request->input('name') : null,
            'surname_301'               => $this->request->has('surname')? $this->request->input('surname') : null,
            'avatar_301'                => $this->request->has('avatar')? $this->request->input('avatar') : null,
            'birth_date_301'            => $this->request->has('birthDate')? \DateTime::createFromFormat(config('pulsar.datePattern'), $this->request->input('birthDate'))->getTimestamp() : null,
            'email_301'                 => $this->request->input('email'),
            'phone_301'                 => $this->request->has('phone')? $this->request->input('phone') : null,
            'mobile_301'                => $this->request->has('mobile')? $this->request->input('mobile') : null,
            'user_301'                  => $this->request->input('user'),
            'password_301'              => Hash::make($this->request->input('password')),
            'active_301'                => $this->request->has('active'),
            'confirmed_301'             => false,
            'country_id_301'            => $this->request->has('country')? $this->request->input('country') : null,
            'territorial_area_1_id_301' => $this->request->has('territorialArea1')? $this->request->input('territorialArea1') : null,
            'territorial_area_2_id_301' => $this->request->has('territorialArea2')? $this->request->input('territorialArea2') : null,
            'territorial_area_3_id_301' => $this->request->has('territorialArea3')? $this->request->input('territorialArea3') : null,
            'cp_301'                    => $this->request->has('cp')? $this->request->input('cp') : null,
            'locality_301'              => $this->request->has('locality')? $this->request->input('locality') : null,
            'address_301'               => $this->request->has('address')? $this->request->input('address') : null,
            'latitude_301'              => $this->request->has('latitude')? $this->request->input('latitude') : null,
            'longitude_301'             => $this->request->has('longitude')? $this->request->input('longitude') : null,
        ]);

        // set attachments
        $attachments = json_decode($this->request->input('attachments'));
        AttachmentLibrary::storeAttachments($attachments, 'crm', 'crm-customer', $customer->id_301, base_lang()->id_001);
    }

    public function editCustomRecord($parameters)
    {
        $parameters['langs']        = Lang::all();

        $parameters['groups']       = Group::all();

        $parameters['genres']       = array_map(function($object){
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.genres'));

        $parameters['treatments']   = array_map(function($object) {
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.treatments'));

        $parameters['states']       = array_map(function($object) {
            $object->name = trans($object->name);
            return $object;
        }, config('pulsar.states'));

        // get attachments elements
        $attachments = AttachmentLibrary::getRecords('crm', 'crm-customer', $parameters['object']->id_301, base_lang()->id_001);

        // merge parameters and attachments array
        $parameters['attachmentFamilies']   = AttachmentFamily::getAttachmentFamilies(['resource_id_015' => 'cms-article']);
        $parameters                         = array_merge($parameters, $attachments);

        return $parameters;
    }

    public function checkSpecialRulesToUpdate($parameters)
    {
        $customer = Customer::builder()->find($parameters['id']);

        $parameters['specialRules']['emailRule']    = $this->request->input('email') == $customer->email_301? true : false;
        $parameters['specialRules']['userRule']     = $this->request->input('user') == $customer->user_301? true : false;
        $parameters['specialRules']['passRule']     = ! $this->request->has('password');

        return $parameters;
    }
    
    public function updateCustomRecord($parameters)
    {
        $customer = [
            'lang_id_301'               => $this->request->has('lang')? $this->request->input('lang') : null,
            'group_id_301'              => $this->request->input('group'),
            'date_301'                  => $this->request->has('date')? \DateTime::createFromFormat(config('pulsar.datePattern'), $this->request->input('date'))->getTimestamp() : null,
            'company_301'               => $this->request->has('company')? $this->request->input('company') : null,
            'tin_301'                   => $this->request->has('tin')? $this->request->input('tin') : null,
            'gender_301'                => $this->request->has('gender')? $this->request->input('gender') : null,
            'treatment_id_301'          => $this->request->has('treatment')? $this->request->input('treatment') : null,
            'state_id_301'              => $this->request->has('state')? $this->request->input('state') : null,
            'name_301'                  => $this->request->has('name')? $this->request->input('name') : null,
            'surname_301'               => $this->request->has('surname')? $this->request->input('surname') : null,
            'avatar_301'                => $this->request->has('avatar')? $this->request->input('avatar') : null,
            'birth_date_301'            => $this->request->has('birthDate')? \DateTime::createFromFormat(config('pulsar.datePattern'), $this->request->input('birthDate'))->getTimestamp() : null,
            'phone_301'                 => $this->request->has('phone')? $this->request->input('phone') : null,
            'mobile_301'                => $this->request->has('mobile')? $this->request->input('mobile') : null,
            'active_301'                => $this->request->has('active'),
            'country_id_301'            => $this->request->has('country')? $this->request->input('country') : null,
            'territorial_area_1_id_301' => $this->request->has('territorialArea1')? $this->request->input('territorialArea1') : null,
            'territorial_area_2_id_301' => $this->request->has('territorialArea2')? $this->request->input('territorialArea2') : null,
            'territorial_area_3_id_301' => $this->request->has('territorialArea3')? $this->request->input('territorialArea3') : null,
            'cp_301'                    => $this->request->has('cp')? $this->request->input('cp') : null,
            'locality_301'              => $this->request->has('locality')? $this->request->input('locality') : null,
            'address_301'               => $this->request->has('address')? $this->request->input('address') : null,
            'latitude_301'              => $this->request->has('latitude')? $this->request->input('latitude') : null,
            'longitude_301'             => $this->request->has('longitude')? $this->request->input('longitude') : null,
        ];

        if($parameters['specialRules']['emailRule'])  $customer['email_301']      = $this->request->input('email');
        if($parameters['specialRules']['userRule'])   $customer['user_301']       = $this->request->input('user');
        if(! $parameters['specialRules']['passRule']) $customer['password_301']   = Hash::make($this->request->input('password'));

        Customer::where('id_301', $parameters['id'])->update($customer);
    }
}