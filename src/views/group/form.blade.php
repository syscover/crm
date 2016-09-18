@extends('pulsar::layouts.form')

@section('rows')
    <!-- crm::groups.form -->
    @include('pulsar::includes.html.form_text_group', [
        'label' => 'ID',
        'name' => 'id',
        'value' => old('id', isset($object)? $object->id_300 : null),
        'readOnly' => true,
        'fieldSize' => 2
    ])
    @include('pulsar::includes.html.form_text_group', [
        'label' => trans('pulsar::pulsar.name'),
        'name' => 'name',
        'value' => old('name', isset($object)? $object->name_300 : null),
        'maxLength' => '255',
        'rangeLength' => '2,255',
        'required' => true]
    )
    <!-- /crm::groups.form -->
@stop