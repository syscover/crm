<?php namespace Syscover\Crm\Controllers;

use Syscover\Pulsar\Controllers\Controller;
use Syscover\Pulsar\Traits\TraitController;
use Syscover\Crm\Models\Group;



class CustomerController extends Controller {

    use TraitController;

    protected $routeSuffix  = 'crmGroup';
    protected $folder       = 'customer';
    protected $package      = 'crm';
    protected $aColumns     = ['id_301', 'name_301'];
    protected $nameM        = 'name_300';
    protected $model        = '\Syscover\Crm\Models\Group';
    protected $icon         = 'fa fa-users';
    protected $objectTrans  = 'group';

    public function storeCustomRecord($request, $parameters)
    {
        Group::create([
            'name_300'  => $request->input('name')
        ]);
    }
    
    public function updateCustomRecord($request, $parameters)
    {
        Group::where('id_300', $parameters['id'])->update([
            'name_300'  => $request->input('name')
        ]);
    }
}