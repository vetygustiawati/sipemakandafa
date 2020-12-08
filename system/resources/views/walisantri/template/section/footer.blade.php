@if ((request()->user()->level) == 'admin')
    @include('walisantri.layouts.footerAdmin')
@elseif((request()->user()->level) == 'walisantri')
    @include('walisantri.layouts.footerWalisantri')
@elseif((request()->user()->level) == 'pengasuh')
    @include('walisantri.layouts.footerPengasuh')
@endif