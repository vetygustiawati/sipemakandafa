@if ((request()->user()->level) == 'admin')
    @include('pengasuh.layouts.sidebarAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('pengasuh.layouts.sidebarWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('pengasuh.layouts.sidebarPengasuh')
@endif