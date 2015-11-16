<?php namespace Syscover\Crm\Controllers;

/**
 * @package	    Pulsar
 * @author	    Jose Carlos Rodríguez Palacín
 * @copyright   Copyright (c) 2015, SYSCOVER, SL
 * @license
 * @link		http://www.syscover.com
 * @since		Version 2.0
 * @filesource
 */

use Illuminate\Support\Facades\Request;
use Syscover\Pulsar\Controllers\Controller;
use Syscover\Pulsar\Traits\TraitController;
use Syscover\Crm\Models\Group;

class GroupController extends Controller {

    use TraitController;

    protected $routeSuffix  = 'crmGroup';
    protected $folder       = 'groups';
    protected $package      = 'crm';
    protected $aColumns     = ['id_300', 'name_300'];
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