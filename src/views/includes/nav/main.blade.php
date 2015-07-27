        <li{!! Miscellaneous::setCurrentOpenPage(['crm-family']) !!}>
            <a href="javascript:void(0);"><i class="icomoon-icon-users"></i>CRM</a>
            <ul class="sub-menu">
                @if(session('userAcl')->isAllowed(Auth::user()->profile_010, 'crm-family', 'access'))
                    <li{!! Miscellaneous::setCurrentPage('crm-family') !!}><a href="{{ route('CrmFamily') }}"><i class="icomoon-icon-grid"></i>{{ trans_choice('pulsar::pulsar.family', 2) }}</a></li>
                @endif
            </ul>
        </li>