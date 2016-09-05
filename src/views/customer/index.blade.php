@extends('pulsar::layouts.index', [
        'newTrans' => 'new',
        'callback' => 'relatedCustomer'
    ])

@section('head')
    @parent
    <!-- crm::customer.index -->
    <script>
        $(document).ready(function() {
            if ($.fn.dataTable)
            {
                $('.datatable-pulsar').dataTable({
                    "displayStart": {{ $offset }},
                    "columnDefs": [
                        @if(isset($modal) && $modal)
                        { "sortable": false, "targets": [8]},
                        { "class": "align-center", "targets": [6,7,8]}
                        @else
                        { "sortable": false, "targets": [8,9]},
                        { "class": "checkbox-column", "targets": [8]},
                        { "class": "align-center", "targets": [6,7,9]}
                        @endif
                    ],
                    'processing': true,
                    'serverSide': true,
                    "ajax": {
                        "url": "{{ route('jsonData' . ucfirst($routeSuffix), ['modal' => $modal? 1 : 0]) }}",
                        "type": "POST",
                        "headers": {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        }
                    }
                }).fnSetFilteringDelay();
            }
        });
    </script>
    <!-- /crm::customer.index -->
@stop

@section('tHead')
    <!-- crm::customer.index -->
    <tr>
        <th data-hide="phone,tablet">ID.</th>
        <th data-hide="phone">{{ trans_choice('pulsar::pulsar.company', 1) }}</th>
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
    <!-- /crm::customer.index -->
@stop