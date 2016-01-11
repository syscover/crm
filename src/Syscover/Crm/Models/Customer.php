<?php namespace Syscover\Crm\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
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
 * @package     Syscover\Crm\Models
 */

class Customer extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use TraitModel;
    use Eloquence, Mappable;
    use CanResetPassword;

	protected $table        = '009_301_customer';
    protected $primaryKey   = 'id_301';
    protected $suffix       = '301';
    public $timestamps      = false;
    protected $fillable     = ['id_301', 'group_301', 'date_301', 'company_301', 'tin_301', 'gender_301', 'name_301', 'surname_301', 'avatar_301', 'birth_date_301', 'email_301', 'phone_301', 'mobile_301', 'user_301', 'password_301', 'active_301', 'confirmed_301', 'country_301', 'territorial_area_1_301', 'territorial_area_2_301', 'territorial_area_3_301', 'cp_301', 'locality_301', 'address_301', 'latitude_301', 'longitude_301', 'custom_field_group_301', 'data_301'];
    protected $maps         = [];
    protected $relationMaps = [];
    private static $rules   = [
        'name'  => 'required|between:2,50'
    ];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}

    public function scopeBuilder($query)
    {
        return $query->join('009_300_group', '009_301_customer.group_301', '=', '009_300_group.id_300');
    }

    /**
     * Get group from user
     *
     * @return \Syscover\Crm\Models\Group
     */
    public function getGroup()
    {
        return $this->belongsTo(Group::class, 'group_301');
    }

    protected static function addToGetIndexRecords($parameters)
    {
        return Customer::builder();
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password_301;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->{$this->getRememberTokenName()};
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->{$this->getRememberTokenName()} = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token_301';
    }

    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email_301;
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return $this->user_301;
    }
}