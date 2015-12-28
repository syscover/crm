<?php namespace Syscover\Crm\Models;

use Syscover\Pulsar\Models\Model;
use Illuminate\Support\Facades\Validator;
use Syscover\Pulsar\Traits\TraitModel;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Mappable;

/**
 * Class Group
 *
 * Model with properties
 * <br><b>[id, name]</b>
 *
 * @package     Syscover\Market\Models
 */

class Group extends Model {

    use TraitModel;
    use Eloquence, Mappable;

	protected $table        = '009_300_group';
    protected $primaryKey   = 'id_300';
    protected $suffix       = '300';
    public $timestamps      = false;
    protected $fillable     = ['id_300', 'name_300'];
    protected $maps         = [];
    protected $relationMaps = [];
    private static $rules   = [
        'name'  => 'required|between:2,50'
    ];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}
}