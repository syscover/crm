<?php namespace Syscover\Plantilla\Controllers;

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
use Syscover\Plantilla\Models\Categoria;

class Categorias extends Controller {

    use ControllerTrait;

    protected $routeSuffix  = 'MifinanCategoria';
    protected $folder       = 'categorias';
    protected $package      = 'mifinanciacion';
    protected $aColumns     = ['id_200', 'name_200'];
    protected $nameM        = 'name_200';
    protected $model        = '\Syscover\Mifinanciacion\Models\Categoria';
    protected $icon         = 'icomoon-icon-power';
    protected $objectTrans  = 'category';

    public function storeCustomRecord()
    {
        Categoria::create([
            'id_200'    => Request::input('id'),
            'name_200'  => Request::input('name')
        ]);
    }
    
    public function updateCustomRecord($parameters)
    {
        Categoria::where('id_200', $parameters['id'])->update([
            'id_200'    => Request::input('id'),
            'name_200'  => Request::input('name')
        ]);
    }
}