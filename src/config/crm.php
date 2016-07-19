<?php

return [
    /*
    |--------------------------------------------------------------------------
    | CRM
    |--------------------------------------------------------------------------
    |
    | Routes to public folders
    |
    */

    'libraryFolder'         => '/packages/syscover/crm/storage/library',
    'tmpFolder'             => '/packages/syscover/crm/storage/tmp',
    'attachmentFolder'      => '/packages/syscover/crm/storage/attachment',
    'iconsFolder'           => '/packages/syscover/pulsar/images/icons',

    //******************************************************************************************************************
    //***   Gender types
    //******************************************************************************************************************
    'genderTypes'           => [
        (object)['id' => 1,      'name' => 'crm::crm.male'],
        (object)['id' => 2,      'name' => 'crm::crm.female']
    ],

    //******************************************************************************************************************
    //***   Treatment types
    //******************************************************************************************************************
    'treatmentTypes'        => [
        (object)['id' => 1,      'name' => 'crm::crm.mr'],
        (object)['id' => 2,      'name' => 'crm::crm.mrs'],
        (object)['id' => 3,      'name' => 'crm::crm.miss']
    ],

    //******************************************************************************************************************
    //***   State types
    //******************************************************************************************************************
    'stateTypes'            => [
        (object)['id' => 1,      'name' => 'crm::crm.single'],
        (object)['id' => 2,      'name' => 'crm::crm.married'],
        (object)['id' => 3,      'name' => 'crm::crm.widower'],
        (object)['id' => 4,      'name' => 'crm::crm.widow']
    ],
];