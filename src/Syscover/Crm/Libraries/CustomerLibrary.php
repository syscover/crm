<?php namespace Syscover\Crm\Libraries;

use Illuminate\Support\Facades\Hash;
use Syscover\Pulsar\Libraries\Miscellaneous;
use Syscover\Crm\Models\Customer;

class CustomerLibrary
{
    /**
     * Function createCustomer
     *
     * Input names to create customer
     *
     * lang_id_301 [langId]
     * group_id_301 [groupId]
     * date_301 [date]
     * company_301 [company]
     * tin_301 [tin]
     * gender_id_301 [gender]
     * treatment_id_301 [treatment]
     * state_id_301 [stateId]
     * name_301 [name]
     * surname_301 [surname]
     * birth_date_301 [birthDate]
     * email_301 [email]
     * phone_301 [phone]
     * user_301 [user]
     * password_301 [password]
     * active_301 [active]
     * country_id_301 [country]
     * territorial_area_1_id_301 [territorialArea1]
     * territorial_area_2_id_301 [territorialArea2]
     * cp_301 [cp]
     * locality_301 [locality]
     * address_301 [address]
     *
     * @param   \Illuminate\Http\Request        $request
     * @return  \Syscover\Crm\Models\Customer   $customer
     * @throws  \Exception
     */
    public static function createCustomer($request)
    {
        if(! $request->has('email'))
            throw new \Exception('You have to define an email field to record a user');

        $customer = Customer::create([
            'lang_id_301'               => $request->has('langId')? $request->input('langId') : null,
            'group_id_301'              => $request->has('groupId')? $request->input('groupId') : null,
            'date_301'                  => $request->has('date')? $request->input('date') : date('U'),
            'company_301'               => $request->has('company')? $request->input('company') : null,
            'tin_301'                   => $request->has('tin')? $request->input('tin') : null,
            'gender_id_301'             => $request->has('gender')? $request->input('gender') : null,
            'treatment_id_301'          => $request->has('treatment')? $request->input('treatment') : null,
            'state_id_301'              => $request->has('stateId')? $request->input('stateId') : null,
            'name_301'                  => $request->has('name')? ucwords(strtolower($request->input('name'))) : null,
            'surname_301'               => $request->has('surname')? ucwords(strtolower($request->input('surname'))) : null,
            'birth_date_301'            => $request->has('birthDate')? \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('birthDate'))->getTimestamp() : null,
            'email_301'                 => strtolower($request->input('email')),
            'phone_301'                 => $request->has('phone')? $request->input('phone') : null,
            'user_301'                  => $request->has('user')? $request->input('user') : strtolower($request->input('email')),
            'password_301'              => $request->has('password')? Hash::make($request->input('password')) : Miscellaneous::randomStr(8),
            'active_301'                => $request->has('active'),
            'confirmed_301'             => false,
            'country_id_301'            => $request->has('country')? $request->input('country') : null,
            'territorial_area_1_id_301' => $request->has('territorialArea1')? $request->input('territorialArea1') : null,
            'territorial_area_2_id_301' => $request->has('territorialArea2')? $request->input('territorialArea2') : null,
            'cp_301'                    => $request->has('cp')? $request->input('cp') : null,
            'locality_301'              => $request->has('locality')? ucfirst($request->input('locality')) : null,
            'address_301'               => $request->has('address')? $request->input('address') : null
        ]);

        return $customer;
    }

    /**
     * Function updateCustomer
     *
     * Input names to update customer
     *
     * lang_id_301 [langId]
     * group_id_301 [groupId]
     * date_301 [date]
     * company_301 [company]
     * tin_301 [tin]
     * gender_id_301 [gender]
     * treatment_id_301 [treatment]
     * state_id_301 [stateId]
     * name_301 [name]
     * surname_301 [surname]
     * birth_date_301 [birthDate]
     * email_301 [email]
     * phone_301 [phone]
     * user_301 [user]
     * password_301 [password]
     * active_301 [active]
     * country_id_301 [country]
     * territorial_area_1_id_301 [territorialArea1]
     * territorial_area_2_id_301 [territorialArea2]
     * cp_301 [cp]
     * locality_301 [locality]
     * address_301 [address]
     *
     * @param   \Illuminate\Http\Request        $request
     * @return  \Syscover\Crm\Models\Customer   $customer
     * @throws  \Exception
     */
    public static function updateCustomer($request)
    {
        if(! $request->has('id'))
            throw new \Exception('You have to indicate a id customer');

        if(! $request->has('email'))
            throw new \Exception('You have to define an email field to record a user');

        Customer::where('id_301', $request->input('id'))->update([
            'lang_id_301'               => $request->has('langId')? $request->input('langId') : null,
            'group_id_301'              => $request->has('groupId')? $request->input('groupId') : null,
            'date_301'                  => $request->has('date')? $request->input('date') : date('U'),
            'company_301'               => $request->has('company')? $request->input('company') : null,
            'tin_301'                   => $request->has('tin')? $request->input('tin') : null,
            'gender_id_301'             => $request->has('gender')? $request->input('gender') : null,
            'treatment_id_301'          => $request->has('treatment')? $request->input('treatment') : null,
            'state_id_301'              => $request->has('stateId')? $request->input('stateId') : null,
            'name_301'                  => $request->has('name')? ucwords(strtolower($request->input('name'))) : null,
            'surname_301'               => $request->has('surname')? ucwords(strtolower($request->input('surname'))) : null,
            'birth_date_301'            => $request->has('birthDate')? \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('birthDate'))->getTimestamp() : null,
            'email_301'                 => strtolower($request->input('email')),
            'phone_301'                 => $request->has('phone')? $request->input('phone') : null,
            'user_301'                  => $request->has('user')? $request->input('user') : strtolower($request->input('email')),
            'password_301'              => $request->has('password')? Hash::make($request->input('password')) : Miscellaneous::randomStr(8),
            'active_301'                => $request->has('active'),
            'confirmed_301'             => false,
            'country_id_301'            => $request->has('country')? $request->input('country') : null,
            'territorial_area_1_id_301' => $request->has('territorialArea1')? $request->input('territorialArea1') : null,
            'territorial_area_2_id_301' => $request->has('territorialArea2')? $request->input('territorialArea2') : null,
            'cp_301'                    => $request->has('cp')? $request->input('cp') : null,
            'locality_301'              => $request->has('locality')? ucfirst($request->input('locality')) : null,
            'address_301'               => $request->has('address')? $request->input('address') : null
        ]);

        $customer = Customer::builder()->find($request->input('id'));

        if($customer === null)
            throw new \Exception('You have to indicate an id of a existing customer');

        return $customer;
    }

    /**
     * Function updatePassword
     *
     * Input names to update customer password
     *
     * password_301 [password]
     *
     * @param   \Illuminate\Http\Request        $request
     * @return  \Syscover\Crm\Models\Customer   $customer
     * @throws  \Exception
     */
    public static function updatePassword($request)
    {
        if(! $request->has('id'))
            throw new \Exception('You have to indicate a id customer');

        Customer::where('id_301', $request->input('id'))->update([
            'password_301' => Hash::make($request->input('password')),
        ]);

        $customer = Customer::builder()->find($request->input('id'));

        if($customer === null)
            throw new \Exception('You have to indicate an id of a existing customer');
    }
}