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

class Customer extends Model {

    use TraitModel;
    use Eloquence, Mappable;

	protected $table        = '009_301_customer';
    protected $primaryKey   = 'id_301';
    protected $suffix       = '301';
    public $timestamps      = false;
    protected $fillable     = ['id_301', 'group_301', 'date_301', 'company_301'];
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