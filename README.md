# CRM to Laravel 5.2

[![Total Downloads](https://poser.pugx.org/syscover/crm/downloads)](https://packagist.org/packages/syscover/crm)

## Installation

Before install sycover/crm, you need install syscover/pulsar to load application base

**1 - After install Laravel framework, insert on file composer.json, inside require object this value**
```
"syscover/crm": "~1.0"
```

and execute on console:
```
composer install
```

**2 - Register service provider, on file config/app.php add to providers array**

```
Syscover\Crm\CrmServiceProvider::class,

```

**3 - To publish package and migrate**

and execute composer update again:
```
composer update
```

**4 - Run seed database**

```
php artisan db:seed --class="CrmTableSeeder"
```

**5 - Activate package**

Access to Pulsar Panel, and go to Administration -> Permissions -> Profiles, and set all permissions to your profile by clicking on the open lock.

**6 - to use auth properties, include this arrays in config/auth.php**

Inside guards array
```
'crm' => [
    'driver'    => 'session',
    'provider'  => 'crmCustomer',
],
```

Inside providers array
```
'crmCustomer' => [
    'driver'    => 'eloquent',
    'model'     => Syscover\Crm\Models\Customer::class,
],
```

Inside passwords array
```
'crmPasswordBroker' => [
    'provider'  => 'crmCustomer',
    'email'     => 'pulsar::emails.password',
    'table'     => '001_021_password_resets',
    'expire'    => 60,
],
```

you can change email crmPasswordBroker, to custom appearance.

**7 - How get auth properties**
Use crm guard to get auth properties
```
auth('crm')
```