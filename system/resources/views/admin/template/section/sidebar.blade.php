@if ((request()->user()->level) == 'admin')
    @include('admin.layouts.sidebarAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('admin.layouts.sidebarWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('admin.layouts.sidebarPengasuh')
@endif