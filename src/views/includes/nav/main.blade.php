        <li{!! Miscellaneous::setCurrentOpenPage(['crm-group', 'crm-customer']) !!}>
            <a href="javascript:void(0)"><i class="fa fa-users"></i>{{ trans('crm::pulsar.package_name') }}</a>
            <ul class="sub-menu">
                @if(session('userAcl')->isAllowed(Auth::user()->profile_010, 'crm-customer', 'access'))
                    <li{!! Miscellaneous::setCurrentPage('crm-customer') !!}><a href="{{ route('crmCustomer') }}"><i class="fa fa-user"></i>{{ trans_choice('pulsar::pulsar.customer', 2) }}</a></li>
                @endif
                @if(session('userAcl')->isAllowed(Auth::user()->profile_010, 'crm-group', 'access'))
                    <li{!! Miscellaneous::setCurrentPage('crm-group') !!}><a href="{{ route('crmGroup') }}"><i class="fa fa-users"></i>{{ trans_choice('pulsar::pulsar.group', 2) }}</a></li>
                @endif
            </ul>
        </li>