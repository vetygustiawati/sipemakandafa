@if ((request()->user()->level) == 'admin')
    @include('admin.layouts.headerAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('admin.layouts.headerWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('admin.layouts.headerPengasuh')
@endif