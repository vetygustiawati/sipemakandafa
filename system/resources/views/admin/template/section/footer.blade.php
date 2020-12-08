@if ((request()->user()->level) == 'admin')
    @include('admin.layouts.footerAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('admin.layouts.footerWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('admin.layouts.footerPengasuh')
@endif