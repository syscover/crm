<?php namespace Syscover\Crm\Models;

use Syscover\Pulsar\Core\Model;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Mappable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Class Customer
 *
 * Model with properties
 * <br><b>[id, lang, group, date, company, tin, gender, treatment, state, name, surname, avatar, birth_date, email, phone, mobile, user, password, active, confirmed, country, territorial_area_1, territorial_area_2, territorial_area_3, cp, locality, address, latitude, longitude, custom_field_group, data]</b>
 *
 * @package     Syscover\Crm\Models
 */

class Customer extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    use Eloquence, Mappable;

	protected $table        = '009_301_customer';
    protected $primaryKey   = 'id_301';
    protected $suffix       = '301';
    public $timestamps      = false;
    protected $fillable     = ['id_301', 'lang_301', 'group_301', 'date_301', 'company_301', 'tin_301', 'gender_301', 'treatment_301', 'state_301', 'name_301', 'surname_301', 'avatar_301', 'birth_date_301', 'email_301', 'phone_301', 'mobile_301', 'user_301', 'password_301', 'active_301', 'confirmed_301', 'country_301', 'territorial_area_1_301', 'territorial_area_2_301', 'territorial_area_3_301', 'cp_301', 'locality_301', 'address_301', 'latitude_301', 'longitude_301', 'custom_field_group_301', 'data_301'];
    protected $hidden       = ['password_301', 'remember_token_301'];
    protected $maps         = [
        'lang'      => \Syscover\Pulsar\Models\Lang::class,
    ];
    protected $relationMaps = [];
    private static $rules   = [
        'name'      => 'required|between:2,255',
        'lang'      => 'required',
        'email'     => 'required|between:2,255|email|unique:009_301_customer,email_301',
        'user'      => 'required|between:2,255|unique:009_301_customer,user_301',
        'password'  => 'required|between:4,50|same:repassword'
    ];

    public static function validate($data, $specialRules)
    {
        if(isset($specialRules['emailRule']) && $specialRules['emailRule']) static::$rules['email'] = 'required|between:2,255|email';
        if(isset($specialRules['userRule']) && $specialRules['userRule'])   static::$rules['user'] = 'required|between:2,255';
        if(isset($specialRules['passRule']) && $specialRules['passRule'])   static::$rules['password'] = '';

        return Validator::make($data, static::$rules);
	}

    public function scopeBuilder($query)
    {
        return $query->join('001_001_lang', '009_301_customer.lang_301', '=', '001_001_lang.id_001')
            ->leftJoin('009_300_group', '009_301_customer.group_301', '=', '009_300_group.id_300');
    }

    /**
     * Get Lang from user
     *
     * @return \Syscover\Pulsar\Models\Lang
     */
    public function getLang()
    {
        return $this->belongsTo('Syscover\Pulsar\Models\Lang', 'lang_355');
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

    /**
     * Get attachments from customer
     *
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->hasMany('Syscover\Pulsar\Models\Attachment', 'object_016')
            ->where('001_016_attachment.lang_016', base_lang()->id_001)
            ->where('001_016_attachment.resource_016', 'crm-customer')
            ->leftJoin('001_015_attachment_family', '001_016_attachment.family_016', '=', '001_015_attachment_family.id_015')
            ->orderBy('001_016_attachment.sorting_016');
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