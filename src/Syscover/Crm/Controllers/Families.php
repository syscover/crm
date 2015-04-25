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
use Syscover\Pulsar\Traits\ControllerTrait;
use Syscover\Crm\Models\Family;

class Families extends Controller {

    use ControllerTrait;

    protected $routeSuffix  = 'CrmFamily';
    protected $folder       = 'families';
    protected $package      = 'crm';
    protected $aColumns     = ['id_300', 'name_300'];
    protected $nameM        = 'name_300';
    protected $model        = '\Syscover\Crm\Models\Family';
    protected $icon         = 'icomoon-icon-grid';
    protected $objectTrans  = 'family';

    public function storeCustomRecord()
    {
        Family::create([
            'id_300'    => Request::input('id'),
            'name_300'  => Request::input('name')
        ]);
    }
    
    public function updateCustomRecord($parameters)
    {
        Family::where('id_300', $parameters['id'])->update([
            'id_300'    => Request::input('id'),
            'name_300'  => Request::input('name')
        ]);
    }
}