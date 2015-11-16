<?php namespace Syscover\Crm\Models;

/**
 * @package	    Pulsar
 * @author	    Jose Carlos Rodríguez Palacín
 * @copyright   Copyright (c) 2015, SYSCOVER, SL
 * @license
 * @link		http://www.syscover.com
 * @since		Version 2.0
 * @filesource
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Syscover\Pulsar\Traits\TraitModel;

class Group extends Model {

    use TraitModel;

	protected $table        = '012_300_group';
    protected $primaryKey   = 'id_300';
    public $timestamps      = false;
    protected $fillable     = ['id_300', 'name_300'];
    private static $rules   = [
        'name'  => 'required|between:2,50'
    ];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}
}