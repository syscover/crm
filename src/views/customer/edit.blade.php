@extends('pulsar::layouts.tab', ['tabs' => [
        ['id' => 'box_tab1', 'name' => trans_choice('pulsar::pulsar.customer', 1)],
        ['id' => 'box_tab2', 'name' => trans_choice('pulsar::pulsar.attachment', 2)],
        ['id' => 'box_tab3', 'name' => 'default'],
        ['id' => 'box_tab4', 'name' => 'default'],
        ['id' => 'box_tab5', 'name' => 'default'],
    ]])

@section('head')
    @parent
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/mappoint/css/mappoint.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/attachment/css/attachment-library.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/cropper/cropper.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/filedrop/filedrop.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/getfile/css/getfile.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/select-listdescription/select-listdescription.css') }}">

    <script src="{{ asset('packages/syscover/pulsar/vendor/getaddress/js/jquery.getaddress.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/cropper/cropper.min.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/cssloader/js/jquery.cssloader.min.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/mobiledetect/mdetect.min.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/filedrop/filedrop.min.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/getfile/js/jquery.getfile.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/speakingurl/speakingurl.min.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/duallistbox/jquery.duallistbox.1.3.1.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/datetimepicker/js/moment.min.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/vendor/mappoint/js/jquery.mappoint.js') }}"></script>
    <script src="{{ asset('packages/syscover/pulsar/plugins/bootstrap-switch/bootstrap-switch.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('api.googleMapsApiKey') }}&libraries=places"></script>

    @include('pulsar::includes.html.froala_references')

    <script src="{{ asset('packages/syscover/pulsar/vendor/attachment/js/attachment-library.js') }}"></script>
    @include('pulsar::includes.js.attachment', [
        'action'            => 'edit',
        'resource'          => 'crm-customer',
        'routesConfigFile'  => 'crm',
        'lang'              => session('baseLang'),
        'objectId'          => $object->id_301])

    <script type="text/javascript">
        $(document).ready(function() {
            $.getAddress({
                id:                         '01',
                type:                       'laravel',
                appName:                    'pulsar',
                token:                      '{{ csrf_token() }}',
                lang:                       '{{ config('app.locale') }}',
                highlightCountrys:          ['ES','US'],

                useSeparatorHighlight:      true,
                textSeparatorHighlight:     '------------------',

                countryValue:               '{{ $object->country_301 }}',
                territorialArea1Value:      '{{ $object->territorial_area_1_301 }}',
                territorialArea2Value:      '{{ $object->territorial_area_2_301 }}',
                territorialArea3Value:      '{{ $object->territorial_area_3_301 }}'
            });

            $.mapPoint({
                id: '01',
                urlPlugin: '/packages/syscover/pulsar/vendor',
                customIcon: {
                    src: '/packages/syscover/hotels/images/location.svg',
                    scaledWidth: 49,
                    scaledHeight: 71,
                    anchorX: 25,
                    anchorY: 71
                }
            });

            $('.wysiwyg').froalaEditor({
                language: '{{ config('app.locale') }}',
                toolbarInline: false,
                toolbarSticky: true,
                tabSpaces: true,
                shortcutsEnabled: ['show', 'bold', 'italic', 'underline', 'strikeThrough', 'indent', 'outdent', 'undo', 'redo', 'insertImage', 'createLink'],
                toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'insertHR', 'insertLink', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html'],
                heightMin: 130,
                enter: $.FroalaEditor.ENTER_BR,
                key: '{{ config('pulsar.froalaEditorKey') }}'
            });

            // set tab active
            @if($tab == 0)
            $('.tabbable li:eq(0) a').tab('show');
            @elseif($tab == 1)
            $('.tabbable li:eq(1) a').tab('show');
            @elseif($tab == 2)
            $('.tabbable li:eq(2) a').tab('show');
            @elseif($tab == 3)
            $('.tabbable li:eq(3) a').tab('show');
            @elseif($tab == 4)
            $('.tabbable li:eq(4) a').tab('show');
            @endif
        });
    </script>
@stop

@section('layoutTabHeader')
    @include('pulsar::includes.html.form_record_header', ['action' => 'update'])
@stop
@section('layoutTabFooter')
    @include('pulsar::includes.html.form_record_footer', ['action' => 'update'])
@stop

@section('box_tab1')
    <!-- crm::customer.create -->
    @include('pulsar::includes.html.form_text_group', ['label' => 'ID', 'fieldSize' => 2, 'name' => 'id',  'value' => $object->id_301, 'readOnly' => true])
        @include('pulsar::includes.html.form_select_group', ['fieldSize' => 4, 'label' => trans_choice('pulsar::pulsar.language', 1), 'fileSize' => 5, 'name' => 'lang', 'value' => $object->lang_301, 'required' => true, 'objects' => $langs, 'idSelect' => 'id_001', 'nameSelect' => 'name_001'])
    <div class="row">
        <div class="col-md-6">
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'id' => 'group', 'label' => trans_choice('pulsar::pulsar.group', 1), 'name' => 'group', 'value' => $object->group_301, 'objects' => $groups, 'idSelect' => 'id_300', 'nameSelect' => 'name_300', 'class' => 'select2', 'data' => ['language' => config('app.locale'), 'width' => '100%', 'error-placement' => 'select2-group-outer-container']])
        </div>
        <div class="col-md-6">
            @include('pulsar::includes.html.form_datetimepicker_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.date'), 'containerId' => 'dateContent', 'name' => 'date', 'id' => 'idDate', 'value' => date(config('pulsar.datePattern'), $object->date_301), 'required' => true, 'data' => ['format' => Miscellaneous::convertFormatDate(config('pulsar.datePattern')), 'locale' => config('app.locale')]])
        </div>
    </div>
    @include('pulsar::includes.html.form_text_group', ['label' => trans_choice('pulsar::pulsar.company', 1), 'name' => 'company', 'value' => $object->company_301, 'maxLength' => '255', 'rangeLength' => '2,255'])
    @include('pulsar::includes.html.form_text_group', ['fieldSize' => 5, 'label' => trans('pulsar::pulsar.tin'), 'name' => 'tin', 'value' => $object->tin_301, 'maxLength' => '255', 'rangeLength' => '2,255'])

    @include('pulsar::includes.html.form_text_group', ['label' => trans('pulsar::pulsar.name'), 'name' => 'name', 'value' => $object->name_301, 'maxLength' => '50', 'rangeLength' => '2,50'])
    @include('pulsar::includes.html.form_text_group', ['label' => trans('pulsar::pulsar.surname'), 'name' => 'surname', 'value' => $object->surname_301, 'maxLength' => '50', 'rangeLength' => '2,50'])
    <div class="row">
        <div class="col-md-6">
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.gender'), 'name' => 'gender', 'value' => $object->gender_301, 'objects' => $genres, 'idSelect' => 'id', 'nameSelect' => 'name'])
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.state', 1), 'name' => 'state', 'value' => $object->state_301, 'objects' => $states, 'idSelect' => 'id', 'nameSelect' => 'name'])
        </div>
        <div class="col-md-6">
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.treatment', 1), 'name' => 'treatment', 'value' => $object->treatment_301, 'objects' => $treatments, 'idSelect' => 'id', 'nameSelect' => 'name'])
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.email'), 'name' => 'email', 'value' => $object->email_301, 'maxLength' => '50', 'rangeLength' => '2,50', 'type' => 'email', 'required' => true])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.mobile'), 'name' => 'mobile', 'value' => $object->mobile_301, 'maxLength' => '50', 'rangeLength' => '2,50'])
        </div>
        <div class="col-md-6">
            @include('pulsar::includes.html.form_datetimepicker_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.birth_date'), 'containerId' => 'birthDateContent', 'name' => 'birthDate', 'id' => 'idBirthDate', 'value' => date(config('pulsar.datePattern'), $object->birth_date_301), 'data' => ['format' => Miscellaneous::convertFormatDate(config('pulsar.datePattern')), 'locale' => config('app.locale')]])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.phone', 1), 'name' => 'phone', 'value' => $object->phone_301, 'maxLength' => '50', 'rangeLength' => '2,50'])
        </div>
    </div>

    @include('pulsar::includes.html.form_section_header', ['label' => trans('pulsar::pulsar.access'), 'icon' => 'fa fa-check-circle-o'])
    <div class="row">
        <div class="col-md-6">
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.user', 1), 'name' => 'user', 'value' => $object->user_301, 'maxLength' => '50', 'rangeLength' => '2,50', 'required' => true])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.password'), 'type' => 'password' ,'name' => 'password', 'value' => old('password'), 'maxLength' => '50', 'rangeLength' => '4,50', 'fieldSize' => 8])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.repeat_password'), 'type' => 'password' , 'name' => 'repassword', 'value' => old('repassword'), 'maxLength' => '50', 'rangeLength' => '4,50', 'fieldSize' => 8])
        </div>
        <div class="col-md-6">
            @include('pulsar::includes.html.form_checkbox_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.active'), 'name' => 'active', 'value' => 1, 'checked' => $object->active_301])
            @include('pulsar::includes.html.form_checkbox_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.confirmed'), 'name' => 'confirmed', 'value' => 1, 'checked' => $object->confirmed_301, 'disabled' => true])
        </div>
    </div>

    @include('pulsar::includes.html.form_section_header', ['label' => trans_choice('pulsar::pulsar.geolocation', 1), 'icon' => 'fa fa-map-signs'])
    @include('pulsar::includes.html.form_text_group', ['label' => trans_choice('pulsar::pulsar.address', 1), 'name' => 'address', 'value' => $object->address_301, 'maxLength' => '150', 'rangeLength' => '2,150'])
    <div class="row">
        <div class="col-md-6">
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.country', 1), 'id' => 'country', 'name' => 'country', 'idSelect' => 'id_002', 'nameSelect' => 'name_002', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale'), 'error-placement' => 'select2-country-outer-container']])
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'containerId' => 'territorialArea1Wrapper', 'labelId' => 'territorialArea1Label', 'name' => 'territorialArea1', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale')]])
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'containerId' => 'territorialArea2Wrapper', 'labelId' => 'territorialArea2Label', 'name' => 'territorialArea2', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale')]])
            @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'containerId' => 'territorialArea3Wrapper', 'labelId' => 'territorialArea3Label', 'name' => 'territorialArea3', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale')]])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 4, 'label' => trans('pulsar::pulsar.cp'), 'name' => 'cp', 'value' => $object->cp_301, 'maxLength' => '10', 'rangeLength' => '2,10'])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 6, 'label' => trans('pulsar::pulsar.locality'), 'name' => 'locality', 'value' => $object->locality_301, 'maxLength' => '100', 'rangeLength' => '2,100'])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.latitude'), 'name' => 'latitude', 'value' => $object->latitude_301, 'maxLength' => '100', 'rangeLength' => '2,100'])
            @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.longitude'), 'name' => 'longitude', 'value' => $object->longitude_301, 'maxLength' => '100', 'rangeLength' => '2,100'])
        </div>
        <div class="col-md-6">
            <div id="locationMapWrapper"></div>
        </div>
    </div>
    <!-- ./crm::customer.create -->
@stop

@section('box_tab2')
    @include('pulsar::includes.html.attachment', [
        'action'            => 'edit',
        'routesConfigFile'  => 'crm'])
@stop

@section('endBody')
        <!--TODO: Implementar botón para añadir fotografías desde la librería-->
    <div id="attachment-library-mask">
        <div id="attachment-library-content">
            {{ trans('pulsar::pulsar.drag_files') }}
        </div>
    </div>
    <div id="attachment-library-progress-bar">
        <div class="valign-wrapper">
            <div class="container valign">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="progress">
                            <div id="upload-progress-bar" class="progress-bar progress-bar-success"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop