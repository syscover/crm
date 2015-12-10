@extends('pulsar::layouts.tab', ['tabs' => [
        ['id' => 'box_tab1', 'name' => trans_choice('pulsar::pulsar.customer', 1)],
        ['id' => 'box_tab2', 'name' => 'default'],
        ['id' => 'box_tab3', 'name' => 'default'],
        ['id' => 'box_tab4', 'name' => 'default'],
        ['id' => 'box_tab5', 'name' => 'default'],
    ]])

@section('css')
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/mappoint/css/mappoint.css') }}">
    <!-- Froala -->
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/froala_editor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/froala_style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/char_counter.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/code_view.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/emoticons.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/file.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/fullscreen.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/image_manager.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/image.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/line_breaker.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/table.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/css/plugins/video.css') }}">
    <!-- ./Froala -->
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/attachment/css/attachment-library.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/cropper/cropper.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/filedrop/filedrop.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/getfile/css/getfile.css') }}">
    <link rel="stylesheet" href="{{ asset('packages/syscover/pulsar/vendor/select-listdescription/select-listdescription.css') }}">
@stop

@section('script')
    @parent
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/getaddress/js/jquery.getaddress.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/cropper/cropper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/cssloader/js/jquery.cssloader.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/mobiledetect/mdetect.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/getfile/libs/filedrop/filedrop.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/getfile/js/jquery.getfile.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/speakingurl/speakingurl.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/duallistbox/jquery.duallistbox.1.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/datetimepicker/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Froala -->
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/froala_editor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/char_counter.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/align.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/code_view.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/colors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/emoticons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/entities.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/file.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/font_family.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/font_size.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/fullscreen.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/image.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/image_manager.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/inline_style.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/line_breaker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/link.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/lists.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/paragraph_format.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/paragraph_style.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/quote.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/table.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/save.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/url.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/plugins/video.min.js') }}"></script>
    @if(config('app.locale') != 'en')
        <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/wysiwyg.froala/js/languages/' . config('app.locale') . '.js') }}"></script>
    @endif
    <!-- ./Froala -->

    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/mappoint/js/jquery.mappoint.js') }}"></script>
    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/plugins/bootstrap-switch/bootstrap-switch.min.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ config('api.googleMapsApiKey') }}&libraries=places"></script>

    <script type="text/javascript" src="{{ asset('packages/syscover/pulsar/vendor/attachment/js/attachment-library.js') }}"></script>

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

                countryValue:               '{{ Input::old('country') }}',
                territorialArea1Value:      '{{ Input::old('territorialArea1') }}',
                territorialArea2Value:      '{{ Input::old('territorialArea2') }}',
                territorialArea3Value:      '{{ Input::old('territorialArea3') }}'
            });

            $.getAddress({
                id:                         '02',
                type:                       'laravel',
                appName:                    'pulsar',
                token:                      '{{ csrf_token() }}',
                lang:                       '{{ config('app.locale') }}',
                highlightCountrys:          ['ES','US'],

                useSeparatorHighlight:      true,
                textSeparatorHighlight:     '------------------',

                tA1Wrapper:					'billingTerritorialArea1Wrapper',
                tA2Wrapper:					'billingTerritorialArea2Wrapper',
                tA3Wrapper:					'billingTerritorialArea3Wrapper',
                tA1Label:                   'billingTerritorialArea1Label',
                tA2Label:                   'billingTerritorialArea2Label',
                tA3Label:                   'billingTerritorialArea3Label',
                countrySelect:              'billingCountry',
                tA1Select:                  'billingTerritorialArea1',
                tA2Select:                  'billingTerritorialArea2',
                tA3Select:                  'billingTerritorialArea3',

                countryValue:               '{{ Input::old('billingCountry') }}',
                territorialArea1Value:      '{{ Input::old('billingTerritorialArea1') }}',
                territorialArea2Value:      '{{ Input::old('billingTerritorialArea2') }}',
                territorialArea3Value:      '{{ Input::old('billingTerritorialArea3') }}'
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
    @include('pulsar::includes.html.form_record_header', ['action' => 'store'])
@stop
@section('layoutTabFooter')
    @include('pulsar::includes.html.form_record_footer', ['action' => 'store'])
@stop

@section('box_tab1')
        <!-- crm::customers.create -->
        @include('pulsar::includes.html.form_text_group', ['label' => 'ID', 'fieldSize' => 2, 'name' => 'id',  'value' => Input::old('id'), 'readOnly' => true])
        <div class="row">
            <div class="col-md-6">
                @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'id' => 'group', 'label' => trans_choice('pulsar::pulsar.group', 1), 'name' => 'group', 'value' => Input::old('group'), 'objects' => $groups, 'idSelect' => 'id_300', 'nameSelect' => 'name_300', 'class' => 'select2', 'data' => ['language' => config('app.locale'), 'width' => '100%', 'error-placement' => 'select2-group-outer-container']])
            </div>
            <div class="col-md-6">
                @include('pulsar::includes.html.form_datetimepicker_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.date'), 'containerId' => 'dateContent', 'name' => 'date', 'id' => 'idDate', 'value' => Input::old('date', date(config('pulsar.datePattern'))), 'required' => true, 'data' => ['format' => Miscellaneous::convertFormatDate(config('pulsar.datePattern')), 'locale' => config('app.locale')]])
            </div>
        </div>
        @include('pulsar::includes.html.form_text_group', ['label' => trans_choice('pulsar::pulsar.company', 1), 'name' => 'company', 'value' => Input::old('company'), 'maxLength' => '255', 'rangeLength' => '2,255'])
        @include('pulsar::includes.html.form_text_group', ['fieldSize' => 5, 'label' => trans('pulsar::pulsar.tin'), 'name' => 'tin', 'value' => Input::old('tin'), 'maxLength' => '255', 'rangeLength' => '2,255'])

        @include('pulsar::includes.html.form_text_group', ['label' => trans('pulsar::pulsar.name'), 'name' => 'name', 'value' => Input::old('name'), 'maxLength' => '50', 'rangeLength' => '2,50'])
        @include('pulsar::includes.html.form_text_group', ['label' => trans('pulsar::pulsar.surname'), 'name' => 'surname', 'value' => Input::old('surname'), 'maxLength' => '50', 'rangeLength' => '2,50'])
        <div class="row">
            <div class="col-md-6">
                @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'id' => 'gender', 'label' => trans('pulsar::pulsar.gender'), 'name' => 'gender', 'value' => Input::old('gender'), 'objects' => $genres, 'idSelect' => 'id', 'nameSelect' => 'name', 'class' => 'select2', 'data' => ['language' => config('app.locale'), 'width' => '100%', 'error-placement' => 'select2-gender-outer-container']])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.email'), 'name' => 'email', 'value' => Input::old('email'), 'maxLength' => '50', 'rangeLength' => '2,50', 'type' => 'email', 'required' => true])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.mobile'), 'name' => 'mobile', 'value' => Input::old('mobile'), 'maxLength' => '50', 'rangeLength' => '2,50'])
            </div>
            <div class="col-md-6">
                @include('pulsar::includes.html.form_datetimepicker_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.birth_date'), 'containerId' => 'birthDateContent', 'name' => 'birthDate', 'id' => 'idBirthDate', 'value' => Input::old('birthDate', date(config('pulsar.datePattern'))), 'data' => ['format' => Miscellaneous::convertFormatDate(config('pulsar.datePattern')), 'locale' => config('app.locale')]])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.phone', 1), 'name' => 'phone', 'value' => Input::old('phone'), 'maxLength' => '50', 'rangeLength' => '2,50'])
            </div>
        </div>

        @include('pulsar::includes.html.form_section_header', ['label' => trans('pulsar::pulsar.access'), 'icon' => 'fa fa-check-circle-o'])
        <div class="row">
            <div class="col-md-6">
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.user', 1), 'name' => 'user', 'value' => Input::old('user'), 'maxLength' => '50', 'rangeLength' => '2,50', 'required' => true])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.password'), 'type' => 'password' ,'name' => 'password', 'value' => Input::old('password'), 'maxLength' => '50', 'rangeLength' => '4,50', 'fieldSize' => 8, 'required' => true])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.repeat_password'), 'type' => 'password' , 'name' => 'repassword', 'value' => Input::old('repassword'), 'maxLength' => '50', 'rangeLength' => '4,50', 'fieldSize' => 8, 'required' => true])
            </div>
            <div class="col-md-6">
                @include('pulsar::includes.html.form_checkbox_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.active'), 'name' => 'active', 'value' => 1, 'checked' => Input::old('active')])
            </div>
        </div>

        @include('pulsar::includes.html.form_section_header', ['label' => trans_choice('pulsar::pulsar.geolocation', 1), 'icon' => 'fa fa-map-signs'])
        @include('pulsar::includes.html.form_text_group', ['label' => trans_choice('pulsar::pulsar.address', 1), 'name' => 'address', 'value' => Input::old('address'), 'maxLength' => '150', 'rangeLength' => '2,150'])
        <div class="row">
            <div class="col-md-6">
                @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans_choice('pulsar::pulsar.country', 1), 'id' => 'country', 'name' => 'country', 'idSelect' => 'id_002', 'nameSelect' => 'name_002', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale'), 'error-placement' => 'select2-country-outer-container']])
                @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'containerId' => 'territorialArea1Wrapper', 'labelId' => 'territorialArea1Label', 'name' => 'territorialArea1', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale')]])
                @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'containerId' => 'territorialArea2Wrapper', 'labelId' => 'territorialArea2Label', 'name' => 'territorialArea2', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale')]])
                @include('pulsar::includes.html.form_select_group', ['labelSize' => 4, 'fieldSize' => 8, 'containerId' => 'territorialArea3Wrapper', 'labelId' => 'territorialArea3Label', 'name' => 'territorialArea3', 'class' => 'col-md-12 select2', 'style' => 'width:100%', 'data' => ['language' => config('app.locale')]])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 4, 'label' => trans('pulsar::pulsar.cp'), 'name' => 'cp', 'value' => Input::old('cp'), 'maxLength' => '10', 'rangeLength' => '2,10'])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 6, 'label' => trans('pulsar::pulsar.locality'), 'name' => 'locality', 'value' => Input::old('locality'), 'maxLength' => '100', 'rangeLength' => '2,100'])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.latitude'), 'name' => 'latitude', 'value' => Input::old('latitude'), 'maxLength' => '100', 'rangeLength' => '2,100'])
                @include('pulsar::includes.html.form_text_group', ['labelSize' => 4, 'fieldSize' => 8, 'label' => trans('pulsar::pulsar.longitude'), 'name' => 'longitude', 'value' => Input::old('longitude'), 'maxLength' => '100', 'rangeLength' => '2,100'])
            </div>
            <div class="col-md-6">
                <div id="locationMapWrapper"></div>
            </div>
        </div>
        <!-- /crm::customers.create -->
@stop

@section('box_tab2')
@stop

@section('box_tab3')
@stop

@section('box_tab4')
@stop

@section('box_tab5')
@stop

@section('endBody')
@stop