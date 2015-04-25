# Comunik App to Laravel 5

## Installation

**1 - After install Laravel framework, insert on file composer.json, inside require object this value**
```
"syscover/crm": "dev-master"

```

**2 - Register service provider, on file config/app.php add to providers array**

```
'Syscover\Pulsar\CrmServiceProvider',

```

**3 - To publish package, you must type on console**

```
php artisan vendor:publish --force

```

**7 - Optimized class loader**

```
php artisan optimize

```

**8 - Run migrate database**

```
php artisan migrate
```

**9 - Run seed database**

```
php artisan db:seed
```