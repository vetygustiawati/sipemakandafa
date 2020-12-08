@if ((request()->user()->level) == 'admin')
    @include('walisantri.layouts.sidebarAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('walisantri.layouts.sidebarWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('walisantri.layouts.sidebarPengasuh')
@endif