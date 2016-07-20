<?php namespace Syscover\Crm\Libraries;

use Illuminate\Support\Facades\Hash;
use Syscover\Comunik\Models\Contact;
use Syscover\Crm\Models\Customer;
use Syscover\Pulsar\Libraries\Miscellaneous;

class CustomerLibrary
{
    /**
     * Function createCustomer
     *
     * Input names to set customers
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
     * @param $request
     * @return static
     * @throws \Exception
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


        $contact = Contact::create([
            'company_041'               => $request->has('company')? $request->input('company') : null,
            'name_041'                  => $request->has('name')? ucwords(strtolower($request->input('name'))) : null,
            'surname_041'               => $request->has('surname')? ucwords(strtolower($request->input('surname'))) : null,
            'birth_date_041'            => $request->has('birthDate')? \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('birthDate'))->getTimestamp() : null,
            'country_id_041'            => $request->input('country'),
            'prefix_041'                => null,
            'mobile_041'                => null,
            'email_041'                 => strtolower($request->input('email')),
            'unsubscribe_mobile_041'    => false,
            'unsubscribe_email_041'     => !$request->has('subscribeEmail'),
        ]);

        if($request->has('subscribeEmail'))
        {
            $contact->getGroups()->attach([config('ruralka.comunikGroupsId.newsletterRuralka')]);
        }

        return $customer;
    }

    public static function updateCustomer($request)
    {
        Customer::where('id_301', $request->input('id'))->update([
            'group_id_301'              => $request->input('customerType'),
            'company_301'               => empty($request->input('company'))? null : $request->input('company'),
            'tin_301'                   => CustomerLibrary::setTinFromNifTin($request),
            'gender_id_301'             => CustomerLibrary::setGenderFromTreatment($request),
            'treatment_id_301'          => $request->has('treatment')? $request->input('treatment') : null,
            'state_id_301'              => null,
            'name_301'                  => ucwords(strtolower($request->input('name'))),
            'surname_301'               => ucwords(strtolower($request->input('surname'))),
            'birth_date_301'            => empty($request->has('birthDate_submit'))? null : \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('birthDate_submit'))->getTimestamp(),
            'email_301'                 => $request->input('email'),
            'phone_301'                 => empty($request->input('phone'))? null : $request->input('phone'),
            'user_301'                  => $request->input('email'),
            'country_id_301'            => $request->input('country'),
            'cp_301'                    => $request->input('cp'),
            'locality_301'              => $request->input('locality'),
            'address_301'               => $request->input('address')
        ]);

        Contact::where('email_041', $request->input('email'))->update([
            'company_041'               => empty($request->input('company'))? null : $request->input('company'),
            'name_041'                  => ucwords(strtolower($request->input('name'))),
            'surname_041'               => ucwords(strtolower($request->input('surname'))),
            'birth_date_041'            => empty($request->has('birthDate_submit'))? null : \DateTime::createFromFormat(config('pulsar.datePattern'), $request->input('birthDate_submit'))->getTimestamp(),
            'country_id_041'            => $request->input('country'),
            'email_041'                 => strtolower($request->input('email'))
        ]);

        // return customer updated
        $customer =  Customer::where('id_301', $request->input('id'))->first();

        return $customer;
    }

    public static function updatePassword($request)
    {
        Customer::where('id_301', $request->input('id'))->update([
            'password_301' => Hash::make($request->input('password')),
        ]);
    }

    private static function setGenderFromTreatment($request)
    {
        // 1 =  male, 2 = female
        if($request->has('treatment') && $request->input('treatment') == '1')
            return 1;
        elseif($request->has('treatment') && ($request->input('treatment') == '2' || $request->input('treatment') == '3'))
            return 2;
        else
            return null;
    }
}