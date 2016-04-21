@extends('pulsar::layouts.index', ['newTrans' => 'new', 'callback' => 'relatedCustomer'])

@section('head')
    @parent
    <!-- crm::customer.index -->
    <script>
        $(document).ready(function() {
            if ($.fn.dataTable)
            {
                $('.datatable-pulsar').dataTable({
                    'iDisplayStart' : {{ $offset }},
                    'aoColumnDefs': [
                        @if(isset($modal) && $modal)
                        { 'bSortable': false, 'aTargets': [7]},
                        { 'sClass': 'align-center', 'aTargets': [5,6,7]}
                        @else
                        { 'bSortable': false, 'aTargets': [7,8]},
                        { 'sClass': 'checkbox-column', 'aTargets': [7]},
                        { 'sClass': 'align-center', 'aTargets': [5,6,8]}
                        @endif
                    ],
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "{{ route('jsonData' . ucfirst($routeSuffix), ['modal' => $modal? 1 : 0]) }}"
                }).fnSetFilteringDelay();
            }
        });
    </script>
    <!-- /.crm::customer.index -->
@stop

@section('tHead')
    <!-- crm::customer.index -->
    <tr>
        <th data-hide="phone,tablet">ID.</th>
        <th data-class="expand">{{ trans('pulsar::pulsar.name') }}</th>
        <th data-hide="phone">{{ trans('pulsar::pulsar.surname') }}</th>
        <th data-hide="phone">{{ trans('pulsar::pulsar.email') }}</th>
        <th data-hide="phone">{{ trans_choice('pulsar::pulsar.group', 1) }}</th>
        <th data-hide="phone,tablet">{{ trans('pulsar::pulsar.active') }}</th>
        <th data-hide="phone,tablet">{{ trans('pulsar::pulsar.confirmed') }}</th>
        @if(! isset($modal) || isset($modal) && !$modal)
            <th class="checkbox-column"><input type="checkbox" class="uniform"></th>
        @endif
        <th>{{ trans_choice('pulsar::pulsar.action', 2) }}</th>
    </tr>
    <!-- /.crm::customer.index -->
@stop