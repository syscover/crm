<?php namespace Syscover\Crm\Controllers;

use Syscover\Pulsar\Controllers\Controller;
use Syscover\Pulsar\Traits\TraitController;
use Syscover\Crm\Models\Group;

/**
 * Class GroupController
 * @package Syscover\Crm\Controllers
 */

class GroupController extends Controller {

    use TraitController;

    protected $routeSuffix  = 'crmGroup';
    protected $folder       = 'group';
    protected $package      = 'crm';
    protected $aColumns     = ['id_300', 'name_300'];
    protected $nameM        = 'name_300';
    protected $model        = Group::class;
    protected $icon         = 'fa fa-users';
    protected $objectTrans  = 'group';

    public function storeCustomRecord($parameters)
    {
        Group::create([
            'name_300'  => $this->request->input('name')
        ]);
    }
    
    public function updateCustomRecord($parameters)
    {
        Group::where('id_300', $parameters['id'])->update([
            'name_300'  => $this->request->input('name')
        ]);
    }
}