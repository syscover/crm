<li{!! is_current_resource(['crm-group', 'crm-customer']) !!}>
    <a href="javascript:void(0)"><i class="fa fa-users"></i>{{ trans('crm::pulsar.package_name') }}</a>
    <ul class="sub-menu">
        @if(is_allowed('crm-customer', 'access'))
            <li{!! is_current_resource('crm-customer') !!}><a href="{{ route('crmCustomer', ['modal' => 0]) }}"><i class="fa fa-user"></i>{{ trans_choice('pulsar::pulsar.customer', 2) }}</a></li>
        @endif
        @if(is_allowed('crm-group', 'access'))
            <li{!! is_current_resource('crm-group') !!}><a href="{{ route('crmGroup') }}"><i class="fa fa-users"></i>{{ trans_choice('pulsar::pulsar.group', 2) }}</a></li>
        @endif
    </ul>
</li>